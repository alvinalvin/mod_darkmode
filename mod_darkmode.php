<?php
/**
 * @copyright	Copyright © 2022 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	https://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
// Include assets
$doc->addStyleSheet(JURI::root()."modules/mod_darkmode/assets/css/styles.css");
$doc->addScript(JURI::root()."modules/mod_darkmode/assets/js/main.js");
require JModuleHelper::getLayoutPath('mod_darkmode', $params->get('layout', 'default'));
