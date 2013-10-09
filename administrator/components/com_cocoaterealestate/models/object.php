<?php
// No direct access to this file
defined('_JEXEC') or die; 
jimport('joomla.application.component.modeladmin');
class CocoateRealEstateModelObject extends JModelAdmin
{
  public function getForm($data = array(), $loadData = true) 
  {
    // Get the form.
    $form = $this->loadForm('com_cocoaterealestate.object', 'object', array('control' => 'jform', 'load_data' => $loadData));
    return $form;
  }
 
  protected function loadFormData() 
  {
    // Check the session for previously entered form data.
    $data = JFactory::getApplication()->getUserState('com_cocoaterealestate.edit.object.data', array());
    if(empty($data)){
      $data = $this->getItem();
    }
    return $data;
  }
 
  public function getTable($name = 'Objects', $prefix = 'CocoateRealEstateTable', $options = array())
  {
    return parent::getTable($name, $prefix, $options);
  }
}
