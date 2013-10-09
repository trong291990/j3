<?php

/**
 * @package 	cocoate.real_estate
 * @subpackage 	Component
 * @copyright 	Copyright (C) 2005 - 2010 cocoate.com. All rights reserved.
 * @license 	License GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('CocoateRealEstate');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
