<?php 
// No direct access to this file
defined('_JEXEC') or die;
jimport('joomla.application.component.view');
class CocoateRealEstateViewObjects extends JViewLegacy 
{
  function display($tpl = null) 
  {
    // Get data from the model
    $items = $this->get('Items');
    $pagination = $this->get('Pagination');
 
    // Assign data to the view
    $this->items = $items;
    $this->pagination = $pagination;
                
    // Set the toolbar
    $this->addToolBar();
 
    // Display the template
    parent::display($tpl);
  }
        
  protected function addToolBar() 
  {
    JToolBarHelper::title(JText::_('COM_COCOATEREALESTATE_MANAGER_OBJECTS'));
    //JToolBarHelper::deleteListX('', 'objects.delete');
//    JToolBarHelper::editListX('object.edit');
//    JToolBarHelper::addNewX('object.add');
    JToolBarHelper::deleteList('', 'objects.delete');
    JToolBarHelper::editList('object.edit');
    JToolBarHelper::addNew('object.add');
  }      
}
?>
