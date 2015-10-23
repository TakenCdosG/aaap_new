<?php
/**
 * @file
 * config_bridge.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function config_bridge_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_event|node|event|form';
  $field_group->group_name = 'group_content_event';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'event';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content Event',
    'weight' => '44',
    'children' => array(
      0 => 'body',
      1 => 'field_link_widget_view',
      2 => 'field_date',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-event field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_event|node|event|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_gallery|node|homepage|form';
  $field_group->group_name = 'group_content_gallery';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'homepage';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content  Gallery',
    'weight' => '45',
    'children' => array(
      0 => 'field_image_gallery_',
      1 => 'field_title_image',
      2 => 'field_text_image',
      3 => 'field_widgets_home',
      4 => 'field_widgets_home_event',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-gallery field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_gallery|node|homepage|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_internal|node|internal_page|form';
  $field_group->group_name = 'group_content_internal';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'internal_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content internal Page',
    'weight' => '45',
    'children' => array(
      0 => 'body',
      1 => 'field_image_internal_page',
      2 => 'field_text_image_internal',
      3 => 'field_widgets_home_event',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-internal field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_internal|node|internal_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_content_widget|node|widget_|form';
  $field_group->group_name = 'group_content_widget';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'widget_';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Content Widget',
    'weight' => '46',
    'children' => array(
      0 => 'body',
      1 => 'field_tile_widget',
      2 => 'field_text_link',
      3 => 'field_link_widget',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-content-widget field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_content_widget|node|widget_|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_footer|node|global_configuration|form';
  $field_group->group_name = 'group_footer';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'global_configuration';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Footer',
    'weight' => '46',
    'children' => array(
      0 => 'field_text_footer',
      1 => 'field_url_facebook',
      2 => 'field_url_twiter',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-footer field-group-tab',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_footer|node|global_configuration|form'] = $field_group;

  return $export;
}
