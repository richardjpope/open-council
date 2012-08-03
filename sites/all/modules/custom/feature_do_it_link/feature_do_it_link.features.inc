<?php
/**
 * @file
 * feature_do_it_link.features.inc
 */

/**
 * Implements hook_node_info().
 */
function feature_do_it_link_node_info() {
  $items = array(
    'do_it_link' => array(
      'name' => t('Do it link'),
      'base' => 'node_content',
      'description' => t('The landing page for a transactional service.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
