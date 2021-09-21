<?php

/**
 * Plugin Name: Sistema Cardápio
 * Plugin URI: https://agencialaf.com
 * Description: Este plugin é parte do ConverteFácil.
 * Version: 1.1.0
 * Author: Ingo Stramm
 * Text Domain: sistema-cardapio
 * License: GPLv2
 */

defined('ABSPATH') or die('No script kiddies please!');

define('SC_DIR', plugin_dir_path(__FILE__));
define('SC_URL', plugin_dir_url(__FILE__));

require_once SC_DIR . 'tgm/tgm.php';
require_once SC_DIR . 'function.php';
require_once SC_DIR . 'cmb.php';
require_once SC_DIR . 'shortcode.php';
require_once SC_DIR . 'scripts.php';

require 'plugin-update-checker-4.10/plugin-update-checker.php';
$updateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://raw.githubusercontent.com/IngoStramm/sistema-cardapio/master/info.json',
    __FILE__,
    'sistema-cardapio'
);
