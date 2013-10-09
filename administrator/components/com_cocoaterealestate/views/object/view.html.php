<?php
// No direct access to this file
defined('_JEXEC') or die; 
jimport('joomla.application.component.view');
class CocoateRealEstateViewObject extends JViewLegacy 
{
  public function display($tpl = null) 
  {
    // get the Data
    $form = $this->get('Form');
    $item = $this->get('Item');
    
    // Assign the Data
    $this->form = $form;
    $this->item = $item;
 
    // Set the toolbar
    $this->addToolBar();
 
    // Display the template
    parent::display($tpl);
  }
 
  protected function addToolBar() 
  {
    JRequest::setVar('hidemainmenu', true);
    $isNew = ($this->item->id == 0);
    JToolBarHelper::title($isNew ? JText::_('COM_COCOATEREALESTATE_MANAGER_OBJECT_NEW') : JText::_('COM_COCOATEREALESTATE_MANAGER_OBJECT_EDIT'));
    JToolBarHelper::save('object.save');
    JToolBarHelper::cancel('object.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    JToolbarHelper::preferences('com_cocoaterealestate');
  }
}
