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


$star = strtotime($row->field_field_date[0]['raw']['value']);
$end =strtotime($row->field_field_date[0]['raw']['value2']);

$date_cust = date("l, F jS",$star);
if($star!=$end){
   $date_cust .=" through ".date("l, F jS",$end)." ,".date("Y",$star);
}
print "<a href='".drupal_get_path_alias('node/'.$row->nid)."'>".$date_cust."</a>";


?>