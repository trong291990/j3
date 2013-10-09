<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.modelitem');
class CocoateRealEstateModelObject extends JModelItem
{
  protected $item;
  public function getItem() 
  {
    if (!isset($this->item)) {
      $id = JRequest::getInt('id');
      // Get a TableObject instance
      $table = $this->getTable('Objects', 'CocoateRealEstateTable');
      // Load the object
      $table->load($id);
      // Assign the data
      $this->item['id'] = $table->id;
      $this->item['image'] = $table->image;
      $this->item['title'] = $table->title;
      $this->item['city'] = $table->city;
      $this->item['zip'] = $table->zip;
      $this->item['country'] = $table->country;
      $this->item['price'] = $table->price;
    }
    return $this->item;
  }
}
?>
