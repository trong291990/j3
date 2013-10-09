<?php
// No direct access to this file
defined('_JEXEC') or die; 
jimport('joomla.application.component.controlleradmin');
class CocoateRealEstateControllerObjects extends JControllerAdmin
{
  public function getModel($name = 'Object', $prefix = 'CocoateRealEstateModel')         {
    $model = parent::getModel($name, $prefix, array('ignore_request' => true));
    return $model;
  }
}