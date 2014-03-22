<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html>
<?php if (omega_extension_enabled('compatibility') && omega_theme_get_setting('omega_conditional_classes_html', TRUE)): ?>
<!--[if IEMobile 7]><html class="ie iem7" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
<!--[if lte IE 6]><html class="ie lt-ie9 lt-ie8 lt-ie7" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="ie lt-ie9 lt-ie8" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
<!--[if IE 8]><html class="ie lt-ie9" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><html class="ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
<![if !IE]><html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]>
<?php else: ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<?php endif; ?>
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body<?php print $attributes;?>>
<div class="l-page">
  <div class="container" id="container">
    <div class="z-header zone">
      <div class="w-header">
        <header class="l-header" role="banner">
          <div class="l-branding">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>

            <?php if ($site_name || $site_slogan): ?>
              <?php if ($site_name): ?>
                <h1 class="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>

              <?php if ($site_slogan): ?>
                <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
              <?php endif; ?>
            <?php endif; ?>
            
            <div class="branding--tagline"><span class="branding--tagline__date">May 23 - 25, 2014</span><span class="branding--tagline__location">Portland, OR</span></div>

            <?php print render($page['branding']); ?>
          </div>

          <?php print render($page['header']); ?>
        </header>
      </div>
    </div>
    <div class="z-content zone">
      <div class="l-main">
        <div class="l-content" role="main">
          <a id="main-content"></a>
          
          <div class="header--intro intro">
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1 class="page--title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print $content; ?>
            <h2 class="header--intro__heading intro__heading">Encouraging creativity in development while educating developers and designers.</h2>
            <p>Sessions subjects from non-technical to effectuation, this event is for YOU!</p>
          </div>
          
          <article class="block block--links">
            <ul class="links links__inline">
              <li>
                <a target="_blank" href="https://docs.google.com/forms/d/1UtRJ5U8VWwyUXLxy8OrlmClUw4xNhNpIOsY440NhOsA/viewform">Submit your Session Today!</a>
              </li>
              <li>
                <a target="_blank" href="https://docs.google.com/forms/d/1u8DZRYu1C5x17kSP2Irk-lc1zOyt0tu0pjxzXbl_UKM/viewform">Be a Volunteer!</a>
              </li>
              <li>
                <a href="mailto:info@devsignercon.com">Become a Sponsor!</a>
              </li>
            </ul>
          </article>
          
          <article class="venue--map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2795.5745288325006!2d-122.6859522!3d45.518642899999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950a1b7100ec67%3A0xf35a79e680d5ba54!2sThe+Eliot+Center!5e0!3m2!1sen!2sus!4v1394573964059" width="100%" height="400" frameborder="0" style="border:0"></iframe>
          </article>
          
        </div>
      </div>
    </div>
    <div class="z-footer zone">
      <div class="w-footer">
        <footer class="l-footer" role="contentinfo">
          <?php print render($page['footer']); ?>
        </footer>
      </div>
      <div class="w-footer-sub">
        <div class="l-footer-sub">
          <?php print render($page['footer_sub']); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
