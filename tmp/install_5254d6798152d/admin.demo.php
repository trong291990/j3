<?php 
defined( '_JEXEC' ) or die( 'Restricted access' ); 
echo"<div><h3>Development Demo By Phạm Trương Hồng Ngân. Email:phamtruonghongngan@yahoo.com</h3></div>";
$db=&JFactory::getDBO();
$query="select * from demo_list";
$db->setQuery($query);

//lay nhieu dong dy lieu
$rows=$db->loadObjectList();
echo"
<fieldset><legend>Dữ liệu trong bảng demo_list</legend>
<table class='adminlist'> 
<thead> 
<tr >
<th class='title'>Id</th><th>Name</th><th>Age</th><th>State</th>
</tr>
</thead> 
";
$k = 0;
for($i=0,$n=count($rows);$i<$n;$i++)
{
	$row=$rows[$i];
	echo"<tr class='row$k'><td>$row->id</td><td>$row->name</td><td>$row->age</td><td>$row->state</td></tr>";
	$k = 1 - $k; 
}
echo"</table></fieldset>";

//lay 1 dong du lieu
$row=$db->loadObject();
echo"
<fieldset><legend>Dòng đầu tiên trong bảng demo_list</legend>
<table class='adminlist'><thead>  
 <tr><th class='title'>Id</th><th>Name</th><th>Age</th><th>State</th></tr></thead> ";
echo"<tr><td>$row->id</td><td>$row->name</td><td>$row->age</td><td>$row->state</td></tr>";
echo"</table></fieldset>";
//lay gia tri tuoi lon nhat trong bang
$query="select max(age) from demo_list";
$db->setQuery($query);
$result=$db->loadResult();
echo"<fieldset><legend>Truy vấn lấy kết quả MAX, COUNT</legend><br>Max age in table : $result";
//dem so dong trong bang
$query="select count(*) from demo_list";
$db->setQuery($query);
$result=$db->loadResult();
echo"<br>Number Record : $result</fieldset>";
//them dong du lieu trong bang
$query="INSERT INTO `demo_list` VALUES ('', 'Mr demo".date('dmyHis')."',99,1)";
$db->setQuery($query);
$db->query();

$query="select * from demo_list";
$db->setQuery($query);
$rows=$db->loadObjectList();
echo"
<fieldset><legend>Dữ liệu trong bảng demo_list Sau khi thêm dữ liệu Mr demo</legend>
<table class='adminlist'> 
<thead> 
<tr >
<th class='title'>Id</th><th>Name</th><th>Age</th><th>State</th>
</tr>
</thead> 
";
$k = 0;
for($i=0,$n=count($rows);$i<$n;$i++)
{
	$row=$rows[$i];
	echo"<tr class='row$k'><td>$row->id</td><td>$row->name</td><td>$row->age</td><td>$row->state</td></tr>";
	$k = 1 - $k; 
}
echo"</table></fieldset>";
?>