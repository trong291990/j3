<?php
// No direct access to this file
defined('_JEXEC') or die;
?>
<tr>
  <th width="5">
  <?php echo JText::_('COM_COCOATEREALESTATE_OBJECT_HEADING_ID'); ?>
  </th>
  <th width="20">
  <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
  </th>
  <th>
  <?php echo JText::_('COM_COCOATEREALESTATE_OBJECT_HEADING_TITLE'); ?>
  </th>
  <th>
  <?php echo JText::_('COM_COCOATEREALESTATE_OBJECT_HEADING_CITY'); ?>
  </th>
  <th>
  <?php echo JText::_('COM_COCOATEREALESTATE_OBJECT_HEADING_COUNTRY'); ?>
  </th>
  <th>
  <?php echo JText::_('COM_COCOATEREALESTATE_OBJECT_HEADING_PRICE'); ?>
  </th>
</tr>