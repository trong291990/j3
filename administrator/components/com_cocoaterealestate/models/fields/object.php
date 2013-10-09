<?php
defined('_JEXEC') or die;
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
class JFormFieldObject extends JFormFieldList
{
  protected $type = 'Object';
  protected function getOptions()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('id,title,price,city');
    $query->from('#__cocoaterealestate_objects');
    $db->setQuery((string)$query);
    $titles = $db->loadObjectList();
    $options = array();
    if($titles){
      foreach($titles as $title)
      {
        $options[] = JHtml::_('select.option', $title->id, $title->id.' '.$title->city.' '.$title->title.' '.money_format('%i', $title->price));
      }
    }
    $options = array_merge(parent::getOptions(), $options);
    return $options;
  }
}