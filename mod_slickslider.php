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

// Jumble the images
if( $params->get('jumble') ){

    $items = array_values($images);

    mt_srand(1024);

    for ($i = count($items) - 1; $i > 0; $i--) {
        $j = mt_rand(0, $i);
        list($items[$i], $items[$j]) = array($items[$j], $items[$i]);
    }

    $images = $items;
}
 
// Helper
require JModuleHelper::getLayoutPath('mod_slickslider', 'default');