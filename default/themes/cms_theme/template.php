<?php
/**
*  Implementation of hook_form_alter().
*/  
function cms_theme_form_views_exposed_form_alter(&$form, &$form_state) {
  if($form['#id'] == 'views-exposed-form-products-page-1' ||
    $form['#id'] == 'views-exposed-form-products-page-2') {
    $form['field_color_value']['#options']['All'] = '任意';
    $form['submit']['#value'] = '查找';
  }
}