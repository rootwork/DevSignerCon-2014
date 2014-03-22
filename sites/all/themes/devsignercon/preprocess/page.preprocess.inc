<?php

/**
 * Implements hook_preprocess_page().
 */
function devsignercon_preprocess_page(&$vars) {
  if ( empty($vars['page']['breadcrumb']) && $vars['is_front'] == FALSE ) {
    $vars['page']['breadcrumb'] = array(
                                    '#theme_wrappers' => array(
                                      0 => 'region',
                                    ),
                                    '#region' => 'breadcrumb',
                                    '#name' => 'Breadcrumb',
                                  );
  }
  
  if ( empty($vars['page']['navigation']) ) {
    $vars['page']['navigation'] = array(
                                    '#theme_wrappers' => array(
                                      0 => 'region',
                                    ),
                                    '#region' => 'navigation',
                                    '#name' => 'Navigation',
                                  );
  }
}
