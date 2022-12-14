<?php

namespace Drupal\Tests\video_embed_field\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Tests\video_embed_field\Functional\EntityDisplaySetupTrait;

/**
 * Test the colorbox formatter.
 *
 * @group video_embed_field
 */
class ColorboxFormatterTest extends WebDriverTestBase {

  use EntityDisplaySetupTrait;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'node',
    'colorbox',
    'video_embed_field',
    'colorbox_library_test',
    'video_embed_field_mock_provider',
  ];

  /**
   * How long it takes for colorbox to open.
   */
  const COLORBOX_LAUNCH_TIME = 250;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->setupEntityDisplays();
  }

  /**
   * Test the colorbox formatter.
   */
  public function testColorboxFormatter() {
    $this->setDisplayComponentSettings('video_embed_field_colorbox', [
      'autoplay' => FALSE,
      'responsive' => TRUE,
    ]);
    $node = $this->createVideoNode('https://example.com/mock_video');
    $this->drupalGet('node/' . $node->id());
    $this->click('.video-embed-field-launch-modal');
    $this->getSession()->wait(static::COLORBOX_LAUNCH_TIME);
    $this->assertSession()->elementExists('css', '#colorbox .video-embed-field-responsive-video');
    // Make sure the right library files are loaded on the page.
    $this->assertSession()->elementExists('css', 'link[href*="colorbox_style.css"]');
    $this->assertSession()->elementExists('css', 'link[href*="video_embed_field.responsive-video.css"]');
  }

}
