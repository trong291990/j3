<?php
// No direct access to this file
defined('_JEXEC') or die;
?>
<h1><?php echo $this->item['title']; ?></h1>
<img src="<?php echo $this->item['image']; ?>">
<ul>
  <li>
  <?php echo $this->item['zip']; ?> 
  <?php echo $this->item['city']; ?>,
  <?php echo $this->item['country']; ?>
  </li>
  <li>
  <strong><?php echo $this->item['price']; ?> €</strong>
  </li>
</ul>
<pre>
<?php 
// uncomment the next line to see the array
// print_r($this->item); ?>
</pre>
