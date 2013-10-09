<?php
// No direct access to this file
defined('_JEXEC') or die;
 
jimport('joomla.database.table');

class CocoateRealEstateTableObjects extends JTable
{
  	var $id = null;
	var $title = null;
	var $city = null;
	var $price = null;
	var $published = 0;
	
  function __construct(&$db) 
  {
    parent::__construct('#__cocoaterealestate_objects', 'id', $db);
  }
}
?>