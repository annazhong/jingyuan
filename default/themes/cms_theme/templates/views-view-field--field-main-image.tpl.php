<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
//field_field_main_image
if (isset($row->_field_data['nid']['entity']->field_images['uid'])) {
  $uri = $row->_field_data['nid']['entity']->field_images['uid'][0]['uri'];
  $nid = $row->_field_data['nid']['entity']->nid;
  $path = 'node/' . $nid;
  $field_image_url = image_style_url('medium', $uri);
  $output = '<a href="' . $path . '" ><img src="'. $field_image_url .'" width="220" height="165"></a>';
}
?>
<?php print $output;?>

<?php include_once("baidu_js_push.php");
