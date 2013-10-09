<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

function com_uninstall()
{
	
$command="drop table if exists demo_list";
$db=JFactory::getDBO();
$db->setQuery($command);
	if(!$db->query())
	{
	echo "<script>alert('Lỗi dữ liệu ---> ".addslashes($db->stderr())."<-------\nNội dung : $command[$i]');document.history.go(-1);</script>"; 
	exit();
	}	
	?>
	<div class="header">Demo đã được gỡ bỏ.</div>
	<p>
	Cảm ơn đã sử dụng chương trình.Hẹn gặp lại trong các phiên bản sau.
	</p>
	<?php
}

?>