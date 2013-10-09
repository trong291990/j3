<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.controller');
class CocoateRealEstateController extends JControllerLegacy
{
  function display($cachable = false,$p1='') 
  {
    // Set default view if not set
    JRequest::setVar('view', JRequest::getCmd('view', 'objects')); 
    parent::display($cachable);
  }
}
?>
