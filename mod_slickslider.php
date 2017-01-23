<?php

/**
 * Slick Slider! Module Entry Point
 * 
 * @package    Joomla
 * @subpackage Modules
 * @license    MIT
 * @link
 *     
 */
 
// No direct access
defined('_JEXEC') or die;

// Get document
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . '/modules/mod_slickslider/assets/css/slick.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_slickslider/assets/css/slick-theme.css');
$document->addScript(JURI::base() . 'modules/mod_slickslider/assets/js/slick.min.js');

// Create random unique name
$random = uniqid();

// Find size
$height = $params->get('height', 384);

// Find cover
$cover = $params->get('cover', false);

// Find all images
$images = array_filter(
	array(
		$params->get('slide_a'),
		$params->get('slide_b'),
		$params->get('slide_c'),
		$params->get('slide_d'),
		$params->get('slide_e'),
		$params->get('slide_f'),
		$params->get('slide_g'),
		$params->get('slide_h'),
		$params->get('slide_i'),
		$params->get('slide_j'),
		$params->get('slide_k'),
		$params->get('slide_l'),
		$params->get('slide_m'),
		$params->get('slide_n'),
		$params->get('slide_o'),
		$params->get('slide_p'),
		$params->get('slide_q'),
		$params->get('slide_u'),
		$params->get('slide_r'),
		$params->get('slide_s'),
		$params->get('slide_t'),
		$params->get('slide_u'),
		$params->get('slide_v'),
		$params->get('slide_w'),
		$params->get('slide_x'),
		$params->get('slide_y'),
		$params->get('slide_z')
	)
);

// Find all links
$links = array_filter(
	array(
		$params->get('link_a'),
		$params->get('link_b'),
		$params->get('link_c'),
		$params->get('link_d'),
		$params->get('link_e'),
		$params->get('link_f'),
		$params->get('link_g'),
		$params->get('link_h'),
		$params->get('link_i'),
		$params->get('link_j'),
		$params->get('link_k'),
		$params->get('link_l'),
		$params->get('link_m'),
		$params->get('link_n'),
		$params->get('link_o'),
		$params->get('link_p'),
		$params->get('link_q'),
		$params->get('link_u'),
		$params->get('link_r'),
		$params->get('link_s'),
		$params->get('link_t'),
		$params->get('link_u'),
		$params->get('link_v'),
		$params->get('link_w'),
		$params->get('link_x'),
		$params->get('link_y'),
		$params->get('link_z')
	)
);

// Jumble the images
if( $params->get('jumble') ){

	$items = array_values($images);

	mt_srand(1024);

	for ($i = count($items) - 1; $i > 0; $i--) {
		$j = mt_rand(0, $i);
		list($items[$i], $items[$j]) = array($items[$j], $items[$i]);
		list($links[$i], $links[$j]) = array($links[$j], $links[$i]);
	}

	$images = $items;
	$links = $links;
}
 
// Helper
require JModuleHelper::getLayoutPath('mod_slickslider', 'default');