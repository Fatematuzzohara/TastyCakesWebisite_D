<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/space/templates/page.html.twig */
class __TwigTemplate_0814190e5a1b529f7df085ccee7bf1e79396ca88ad264701d7780ca9124ea077 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        if (($context["is_front"] ?? null)) {
            // line 68
            echo "  <div id=\"header-top\" class=\"section\">
    ";
            // line 69
            if (($context["header_media_video"] ?? null)) {
                // line 70
                echo "      <video id=\"header-video\" class=\"ng-scope\" poster=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_video_still"] ?? null), 70, $this->source), "html", null, true);
                echo "\" autoplay loop>
        <source src=\"";
                // line 71
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_media_url"] ?? null), 71, $this->source), "html", null, true);
                echo "\" type=\"video/mp4\">
        Your browser does not support the video tag.
      </video>
    ";
            } else {
                // line 75
                echo "      <div id=\"header-image\" style=\"background: #000 url('";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_media_url"] ?? null), 75, $this->source), "html", null, true);
                echo "') no-repeat fixed center bottom / cover \"></div>
    ";
            }
            // line 77
            echo "
    ";
            // line 78
            if (($context["overlay_styles"] ?? null)) {
                // line 79
                echo "      <div id=\"header-overlay\" style=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["overlay_styles"] ?? null), 79, $this->source), "html", null, true);
                echo "\"></div>
    ";
            }
            // line 81
            echo "
    ";
            // line 82
            if (($context["screen"] ?? null)) {
                // line 83
                echo "      <div id=\"header-screen\"></div>
    ";
            }
            // line 85
            echo "    ";
            if (($context["fade"] ?? null)) {
                // line 86
                echo "      <div id=\"header-bg\"></div>
    ";
            }
            // line 88
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "

    <div class=\"section layout-container clearfix\">
      ";
            // line 91
            if (($context["logo"] ?? null)) {
                // line 92
                echo "        <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 92, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\" id=\"logo\">
          <img src=\"";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["space_logo"] ?? null), 93, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" />
        </a>
      ";
            }
            // line 96
            echo "    </div>
    <div class=\"nav-down\"></div>
  </div>

  <div class=\"separator-wrapper\">
    <div class=\"separator separator-left\"></div>
    <div class=\"joint left\"></div>
    <div class=\"separator separator-middle\"></div>
    <div class=\"joint right\"></div>
    <div class=\"separator separator-right\"></div>
  </div>
";
        }
        // line 108
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
    ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 111)) {
            // line 112
            echo "      <div id=\"main-menu\">
        <!-- Show the site logo -->
        <img alt=\"";
            // line 114
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["space_logo"] ?? null), 114, $this->source), "html", null, true);
            echo "\">
        ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
      </div>
      <div class=\"menu-hamburger icon-menu\">
      </div>
    ";
        }
        // line 120
        echo "
    ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 121)) {
            // line 122
            echo "      <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
            echo "\">
        ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
      </header>
    ";
        }
        // line 126
        echo "
    ";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 127)) {
            // line 128
            echo "      <div class=\"featured\" class=\"section\">
        <aside class=\"featured__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 134
        echo "
    ";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_top", [], "any", false, false, true, 135)) {
            // line 136
            echo "      <div class=\"page-top\">
        <aside class=\"page-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_top", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 142
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\" style=\"background: ";
        // line 143
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region_content_image_url"] ?? null), 143, $this->source), "html", null, true);
        echo "\">
      ";
        // line 144
        if (($context["region_content_screen"] ?? null)) {
            // line 145
            echo "        <div class=\"screen\"></div>
      ";
        }
        // line 147
        echo "      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "

        ";
        // line 150
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 150) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 150))) {
            // line 151
            echo "          ";
            $context["content_class"] = "content-both";
            // line 152
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 152) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 152))) {
            // line 153
            echo "          ";
            $context["content_class"] = "content-left";
            // line 154
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 154) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 154))) {
            // line 155
            echo "          ";
            $context["content_class"] = "content-right";
            // line 156
            echo "        ";
        } elseif (( !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 156) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 156))) {
            // line 157
            echo "          ";
            $context["content_class"] = "content-full";
            // line 158
            echo "        ";
        }
        // line 159
        echo "
        <main id=\"content\" class=\"column main-content ";
        // line 160
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_class"] ?? null), 160, $this->source), "html", null, true);
        echo "\" role=\"main\">
          ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 161)) {
            // line 162
            echo "            <div class=\"content-top\">
              <aside class=\"content-top__inner section layout-container clearfix\" role=\"complementary\">
                ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 168
        echo "
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 171, $this->source), "html", null, true);
        echo "
            ";
        // line 172
        if (($context["title"] ?? null)) {
            // line 173
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 174, $this->source), "html", null, true);
            echo "
              </h1>
            ";
        }
        // line 177
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 177, $this->source), "html", null, true);
        echo "
            ";
        // line 178
        if (($context["tabs"] ?? null)) {
            // line 179
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Tabs"));
            echo "\">
                ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 180, $this->source), "html", null, true);
            echo "
              </nav>
            ";
        }
        // line 183
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
        echo "
            ";
        // line 184
        if (($context["action_links"] ?? null)) {
            // line 185
            echo "              <ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 185, $this->source), "html", null, true);
            echo "</ul>
            ";
        }
        // line 187
        echo "
            ";
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
        echo "
          </section>

          ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 191)) {
            // line 192
            echo "            <div class=\"content-bottom\">
              <aside class=\"content-bottom__inner section layout-container clearfix\" role=\"complementary\">
                ";
            // line 194
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
              </aside>
            </div>
          ";
        }
        // line 198
        echo "
        </main>
        ";
        // line 200
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 200)) {
            // line 201
            echo "          <div id=\"sidebar-left\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 203
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_left", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 207
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 207)) {
            // line 208
            echo "          <div id=\"sidebar-right\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 210
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_right", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 214
        echo "      </div>
    </div>

    <div class=\"separator-footer\"></div>

    ";
        // line 219
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_2", [], "any", false, false, true, 219)) {
            // line 220
            echo "      <div class=\"content_2_wrapper\" style=\"background: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region_content_2_image_url"] ?? null), 220, $this->source), "html", null, true);
            echo "\">
        ";
            // line 221
            if (($context["region_content_2_screen"] ?? null)) {
                // line 222
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 224
            echo "        <div class=\"content_2\">
          <aside class=\"content_2__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 226
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_2", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 231
        echo "
    ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_3", [], "any", false, false, true, 232)) {
            // line 233
            echo "      <div class=\"content_3_wrapper\" style=\"background: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region_content_3_image_url"] ?? null), 233, $this->source), "html", null, true);
            echo "\">
        ";
            // line 234
            if (($context["region_content_3_screen"] ?? null)) {
                // line 235
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 237
            echo "        <div class=\"content_3\">
          <aside class=\"content_3__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 239
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_3", [], "any", false, false, true, 239), 239, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 244
        echo "
    ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_4", [], "any", false, false, true, 245)) {
            // line 246
            echo "      <div class=\"content_4_wrapper\" style=\"background: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region_content_4_image_url"] ?? null), 246, $this->source), "html", null, true);
            echo "\">
        ";
            // line 247
            if (($context["region_content_4_screen"] ?? null)) {
                // line 248
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 250
            echo "        <div class=\"content_4\">
          <aside class=\"content_4__inner section layout-container clearfix\" role=\"complementary\">
            ";
            // line 252
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_4", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 257
        echo "
    ";
        // line 258
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_5", [], "any", false, false, true, 258)) {
            // line 259
            echo "      <div class=\"content_5_wrapper\" style=\"background: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["region_content_5_image_url"] ?? null), 259, $this->source), "html", null, true);
            echo "\">
        ";
            // line 260
            if (($context["region_content_5_screen"] ?? null)) {
                // line 261
                echo "          <div class=\"screen\"></div>
        ";
            }
            // line 263
            echo "        <div class=\"content_5\">
          <aside class=\"content_5__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 265
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_5", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
            echo "
          </aside>
        </div>
      </div>
    ";
        }
        // line 270
        echo "
    ";
        // line 271
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom", [], "any", false, false, true, 271)) {
            // line 272
            echo "      <div class=\"page-bottom\">
        <aside class=\"page-bottom__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 274
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bottom", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 278
        echo "
    <footer class=\"site-footer\">
      ";
        // line 280
        if (($context["social_icons"] ?? null)) {
            // line 281
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_icons"] ?? null), 281, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 283
        echo "      ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 283) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 283)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 283))) {
            // line 284
            echo "        <div class=\"site-footer__top layout-container clearfix\">
          ";
            // line 285
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
            echo "
          ";
            // line 286
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
            echo "
          ";
            // line 287
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 287), 287, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 290
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 290)) {
            // line 291
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 293
        echo "    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/space/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 293,  540 => 291,  537 => 290,  531 => 287,  527 => 286,  523 => 285,  520 => 284,  517 => 283,  511 => 281,  509 => 280,  505 => 278,  498 => 274,  494 => 272,  492 => 271,  489 => 270,  481 => 265,  477 => 263,  473 => 261,  471 => 260,  466 => 259,  464 => 258,  461 => 257,  453 => 252,  449 => 250,  445 => 248,  443 => 247,  438 => 246,  436 => 245,  433 => 244,  425 => 239,  421 => 237,  417 => 235,  415 => 234,  410 => 233,  408 => 232,  405 => 231,  397 => 226,  393 => 224,  389 => 222,  387 => 221,  382 => 220,  380 => 219,  373 => 214,  366 => 210,  362 => 208,  359 => 207,  352 => 203,  348 => 201,  346 => 200,  342 => 198,  335 => 194,  331 => 192,  329 => 191,  323 => 188,  320 => 187,  314 => 185,  312 => 184,  307 => 183,  301 => 180,  296 => 179,  294 => 178,  289 => 177,  283 => 174,  280 => 173,  278 => 172,  274 => 171,  269 => 168,  262 => 164,  258 => 162,  256 => 161,  252 => 160,  249 => 159,  246 => 158,  243 => 157,  240 => 156,  237 => 155,  234 => 154,  231 => 153,  228 => 152,  225 => 151,  223 => 150,  218 => 148,  215 => 147,  211 => 145,  209 => 144,  205 => 143,  202 => 142,  195 => 138,  191 => 136,  189 => 135,  186 => 134,  179 => 130,  175 => 128,  173 => 127,  170 => 126,  164 => 123,  159 => 122,  157 => 121,  154 => 120,  146 => 115,  140 => 114,  136 => 112,  134 => 111,  129 => 108,  115 => 96,  107 => 93,  100 => 92,  98 => 91,  91 => 88,  87 => 86,  84 => 85,  80 => 83,  78 => 82,  75 => 81,  69 => 79,  67 => 78,  64 => 77,  58 => 75,  51 => 71,  46 => 70,  44 => 69,  41 => 68,  39 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/space/templates/page.html.twig", "C:\\xampp\\htdocs\\drupalsite3.test\\themes\\space\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "set" => 151);
        static $filters = array("escape" => 70, "t" => 92);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
