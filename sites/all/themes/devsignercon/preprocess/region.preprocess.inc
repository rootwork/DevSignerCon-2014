<?php

/**
 * Implements hook_preprocess_page().
 */
function devsignercon_preprocess_region(&$vars) {
  if ( $vars['region'] == 'breadcrumb' ) {
    $vars['breadcrumb'] = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb()));
  }
  
  if ( $vars['region'] == 'navigation' ) {
    $vars['primary_nav'] = menu_tree_output(menu_tree_all_data('main-menu'));
  }
}