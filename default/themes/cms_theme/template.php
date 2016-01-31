<?php
/**
 * Implements hook_preprocess_node().
 *
 * @see hook_preprocess_node()
 */
function cms_theme_preprocess_node(&$variables) {
   $node_type = isset($variables['node']->type) ? $variables['node']->type : '';
   if ($node_type == 'products') {
       
   }
}