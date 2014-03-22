<?php

/**
 * Implements hook_preprocess_maintenance_page().
 */
function devsignercon_preprocess_maintenance_page(&$vars) {
  drupal_add_css(
    drupal_get_path('theme', 'devsignercon') . '/css/layouts/wrappers/wrappers.layout.css'
  );
  drupal_add_css(
    drupal_get_path('theme', 'devsignercon') . '/css/devsignercon.maintenance.css'
  );
}