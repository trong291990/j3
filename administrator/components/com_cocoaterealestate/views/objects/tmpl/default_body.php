<?php
// No direct access to this file
defined('_JEXEC') or die;
?>
<?php foreach($this->items as $i => $item): ?>
  <tr class="row<?php echo $i % 2; ?>">
  <td><?php echo $item->id; ?></td>
  <td><?php echo JHtml::_('grid.id', $i, $item->id); ?></td>
  <td>
  <a href="<?php echo JRoute::_('index.php?option=com_cocoaterealestate&task=object.edit&id=' . $item->id); ?>">
  <?php echo $item->title; ?>
  </a>
  </td>
  <td><?php echo $item->city; ?></td>
  <td><?php echo $item->country; ?></td>
  <td><?php echo $item->price; ?></td>
  </tr>
<?php endforeach; ?>