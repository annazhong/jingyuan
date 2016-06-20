<?php
/**
*  Implementation of hook_form_alter().
*/  
function cms_theme_form_views_exposed_form_alter(&$form, &$form_state) {
  if($form['#id'] == 'views-exposed-form-products-page-1' ||
    $form['#id'] == 'views-exposed-form-products-page-2') {
    $form['field_color_value']['#options']['All'] = t('所有颜色');
    $form['field_chuang_tou_gui_value']['#options']['All'] = t('所有型号');
    $form['field_code_value']['#attributes']['placeholder'] = t('例如: 218#');
    $form['field_code_value']['#attributes']['size'] = 10;
    $form['submit']['#value'] = '查找';
  }
}