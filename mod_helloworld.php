<?php
/**
 * @copyright
 * @var \Joomla\Registry\Registry $params
 * @var array $module
 */

defined('_JEXEC') or die;

include_once __DIR__ . '/helper.php';

$helper = new ModHelloworldHelper($params);

JHtml::stylesheet('modules/mod_helloworld/assets/css/helloworld.css');
JHtml::script('modules/mod_helloworld/assets/js/helloworld.js');

require JModuleHelper::getLayoutPath('mod_helloworld', $params->get('layout', 'default'));