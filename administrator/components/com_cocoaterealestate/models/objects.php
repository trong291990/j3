<?php
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.modellist');
class CocoateRealEstateModelObjects extends JModelList
{
  protected function getListQuery() 
  {
    // Create a new query object.
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
 
    // Select some fields
    $query->select('id,title,city,country,price');
 
    // From the realestate table
    $query->from('#__cocoaterealestate_objects');
    return $query;
  }
}
?>