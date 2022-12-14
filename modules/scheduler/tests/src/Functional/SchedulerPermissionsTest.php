<?php

namespace Drupal\Tests\scheduler\Functional;

/**
 * Tests the permissions of the Scheduler module.
 *
 * @group scheduler
 */
class SchedulerPermissionsTest extends SchedulerBrowserTestBase {

  /**
   * Tests that users without permission do not see the scheduler date fields.
   */
  public function testUserPermissionsAdd() {
    // Create a user who can add the content type but who does not have the
    // permission to use the scheduler functionality.
    $this->webUser = $this->drupalCreateUser([
      'access content',
      'administer nodes',
      'create ' . $this->type . ' content',
      'edit own ' . $this->type . ' content',
      'delete own ' . $this->type . ' content',
      'view own unpublished content',
    ]);
    $this->drupalLogin($this->webUser);

    // Check that neither of the fields are displayed when creating a node.
    $this->drupalGet('node/add/' . $this->type);
    $this->assertSession()->fieldNotExists('publish_on[0][value][date]');
    $this->assertSession()->fieldNotExists('unpublish_on[0][value][date]');

    // Initially run tests when publishing and unpublishing are not required.
    $this->nodetype->setThirdPartySetting('scheduler', 'publish_required', FALSE)
      ->setThirdPartySetting('scheduler', 'unpublish_required', FALSE)
      ->save();

    // Check that a new node can be saved and published.
    $title = $this->randomString(15);
    $edit = ['title[0][value]' => $title, 'status[value]' => TRUE];
    $this->drupalGet('node/add/' . $this->type);
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains(sprintf('%s %s has been created.', $this->typeName, $title));
    $this->assertTrue($this->drupalGetNodeByTitle($title)->isPublished(), 'The new node is published');

    // Check that a new node can be saved as unpublished.
    $title = $this->randomString(15);
    $edit = ['title[0][value]' => $title, 'status[value]' => FALSE];
    $this->drupalGet('node/add/' . $this->type);
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains(sprintf('%s %s has been created.', $this->typeName, $title));
    $this->assertFalse($this->drupalGetNodeByTitle($title)->isPublished(), 'The new node is unpublished');

    // Set publishing and unpublishing to required, to make it a stronger test.
    $this->nodetype->setThirdPartySetting('scheduler', 'publish_required', TRUE)
      ->setThirdPartySetting('scheduler', 'unpublish_required', TRUE)
      ->save();

    // @todo Add tests when scheduled publishing and unpublishing are required.
    // Cannot be done until we make a decision on what 'required'  means.
    // @see https://www.drupal.org/node/2707411
    // "Conflict between 'required publishing' and not having scheduler
    // permission"
  }

  /**
   * Tests that users without permission can edit existing scheduled content.
   */
  public function testUserPermissionsEdit() {
    // Create a user who can add the content type but who does not have the
    // permission to use the scheduler functionality.
    $this->webUser = $this->drupalCreateUser([
      'access content',
      'administer nodes',
      'create ' . $this->type . ' content',
      'edit own ' . $this->type . ' content',
      'delete own ' . $this->type . ' content',
      'view own unpublished content',
    ]);
    $this->drupalLogin($this->webUser);

    $publish_time = strtotime('+ 6 hours', $this->requestTime);
    $unpublish_time = strtotime('+ 10 hours', $this->requestTime);

    // Create nodes with publish_on and unpublish_on dates.
    $unpublished_node = $this->drupalCreateNode([
      'type' => $this->type,
      'status' => FALSE,
      'publish_on' => $publish_time,
    ]);
    $published_node = $this->drupalCreateNode([
      'type' => $this->type,
      'status' => TRUE,
      'unpublish_on' => $unpublish_time,
    ]);

    // Verify that the publish_on date is stored as expected before editing.
    $this->assertEquals($publish_time, $unpublished_node->publish_on->value, 'The publish_on value is stored correctly before edit.');

    // Edit the unpublished node and save.
    $title = 'For Publishing ' . $this->randomString(10);
    $this->drupalGet('node/' . $unpublished_node->id() . '/edit');
    $this->submitForm(['title[0][value]' => $title], 'Save');

    // Check the updated title, to verify that edit and save was sucessful.
    $unpublished_node = $this->nodeStorage->load($unpublished_node->id());
    $this->assertEquals($title, $unpublished_node->title->value, 'The unpublished node title has been updated correctly after edit.');

    // Test that the publish_on date is still stored and is unchanged.
    $this->assertEquals($publish_time, $unpublished_node->publish_on->value, 'The node publish_on value is still stored correctly after edit.');

    // Do the same for unpublishing.
    // Verify that the unpublish_on date is stored as expected before editing.
    $this->assertEquals($unpublish_time, $published_node->unpublish_on->value, 'The unpublish_on value is stored correctly before edit.');

    // Edit the published node and save.
    $title = 'For Unpublishing ' . $this->randomString(10);
    $this->drupalGet('node/' . $published_node->id() . '/edit');
    $this->submitForm(['title[0][value]' => $title], 'Save');

    // Check the updated title, to verify that edit and save was sucessful.
    $published_node = $this->nodeStorage->load($published_node->id());
    $this->assertEquals($title, $published_node->title->value, 'The published node title has been updated correctly after edit.');

    // Test that the unpublish_on date is still stored and is unchanged.
    $this->assertEquals($unpublish_time, $published_node->unpublish_on->value, 'The node unpublish_on value is still stored correctly after edit.');

  }

}
