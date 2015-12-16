<?php
/**
 * Override or insert variables into the page template.
 */


function aaap_preprocess_page(&$vars){
    $nodo = aaap_current_node();
    if(empty($nodo)){
        $nodo = new stdClass();
        $nodo->type = 0;
    }

    drupal_add_js(path_to_theme().'/js/theme_scripts.js');
    drupal_add_css(path_to_theme().'/css/style.css');
    drupal_add_css(path_to_theme().'/css/editor.css');

    switch($nodo->type){
        case 'homepage':
            drupal_add_js(path_to_theme().'/fotorama/fotorama.js');
            drupal_add_css(path_to_theme().'/fotorama/fotorama.css');
            break;
    }

}

function aaap_preprocess_node(&$variables){
    $nodo = aaap_current_node();
    if(empty($nodo)){
        $nodo = new stdClass();
        $nodo->type = 0;
    }
    switch(@$nodo->type){
        case 'homepage':
        case 'internal_page':
            $node_config= node_load(7);
            $variables['title_events_widget'] = $node_config->field_title_events_widget['und'][0]['value'];
            break;
    }

    if ($variables['node']->type = "forum") {
        date_default_timezone_set('America/New_York');
        $timeStamp = $variables['node']->created;
        $date = new DateTime();
        $date->setTimestamp($timeStamp);
        $date_str = $date->format('F d, Y - h:i');
        $variables['submitted'] = t('Submitted by !username on !datetime', array('!username' => $variables['name'], '!datetime' => $date_str));
    }
}
