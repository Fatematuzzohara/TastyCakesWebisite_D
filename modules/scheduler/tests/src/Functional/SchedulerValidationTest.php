<?php

namespace Drupal\Tests\scheduler\Functional;

/**
 * Tests the validation when editing a node.
 *
 * @group scheduler
 */
class SchedulerValidationTest extends SchedulerBrowserTestBase {

  /**
   * Tests the validation when editing a node.
   *
   * The 'required' checks and 'dates in the past' checks are handled in other
   * tests. This test checks validation when fields interact.
   */
  public function testValidationDuringEdit() {
    $this->drupalLogin($this->adminUser);

    // Set unpublishing to be required.
    $this->nodetype->setThirdPartySetting('scheduler', 'unpublish_required', TRUE)->save();

    // Create an unpublished page node, then edit the node and check that if a
    // publish-on date is entered then an unpublish-on date is also needed.
    $node = $this->drupalCreateNode([
      'type' => $this->type,
      'status' => FALSE,
    ]);
    $edit = [
      'publish_on[0][value][date]' => date('Y-m-d', strtotime('+1 day', $this->requestTime)),
      'publish_on[0][value][time]' => date('H:i:s', strtotime('+1 day', $this->requestTime)),
    ];
    $this->drupalGet('node/' . $node->id() . '/edit');

    $this->submitForm($edit, 'Save');
    // Check that validation prevents entering a publish-on date with no
    // unpublish-on date if unpublishing is required.
    $this->assertSession()->pageTextContains("If you set a 'publish on' date then you must also set an 'unpublish on' date.");
    $this->assertSession()->pageTextNotContains(sprintf('%s %s has been updated.', $this->typeName, $node->title->value));

    // Create an unpublished page node, then edit the node and check that if the
    // status is changed to published, then an unpublish-on date is also needed.
    $node = $this->drupalCreateNode([
      'type' => $this->type,
      'status' => FALSE,
    ]);
    $edit = ['status[value]' => TRUE];
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
    // Check that validation prevents publishing the node directly without an
    // unpublish-on date if unpublishing is required.
    $this->assertSession()->pageTextContains("Either you must set an 'unpublish on' date or save this node as unpublished.");
    $this->assertSession()->pageTextNotContains(sprintf('%s %s has been updated.', $this->typeName, $node->title->value));

    // Create an unpublished node, edit the node and check that if both dates
    // are entered then the unpublish date is later than the publish date.
    $node = $this->drupalCreateNode([
      'type' => $this->type,
      'status' => FALSE,
    ]);
    $edit = [
      'publish_on[0][value][date]' => $this->dateFormatter->format($this->requestTime + 8100, 'custom', 'Y-m-d'),
      'publish_on[0][value][time]' => $this->dateFormatter->format($this->requestTime + 8100, 'custom', 'H:i:s'),
      'unpublish_on[0][value][date]' => $this->dateFormatter->format($this->requestTime + 1800, 'custom', 'Y-m-d'),
      'unpublish_on[0][value][time]' => $this->dateFormatter->format($this->requestTime + 1800, 'custom', 'H:i:s'),
    ];
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
    // Check that validation prevents entering an unpublish-on date which is
    // earlier than the publish-on date.
    $this->assertSession()->pageTextContains("The 'unpublish on' date must be later than the 'publish on' date.");
    $this->assertSession()->pageTextNotContains(sprintf('%s %s has been updated.', $this->typeName, $node->title->value));
  }

}
