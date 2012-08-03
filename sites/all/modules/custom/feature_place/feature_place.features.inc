<?php
/**
 * @file
 * feature_place.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_place_node_info() {
  $items = array(
    'place' => array(
      'name' => t('Place'),
      'base' => 'node_content',
      'description' => t('e.g. a library or park'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
