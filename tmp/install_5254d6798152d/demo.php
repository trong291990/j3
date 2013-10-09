<?php 
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$db=&JFactory::getDBO();
$query="select * from demo_list";
$db->setQuery($query);

//lay nhieu dong dy lieu
$rows=$db->loadObjectList();
echo"
<fieldset><legend>Dữ liệu trong bảng demo_list</legend>
<table width=100%>
<tr>
<th>Id</th><th>Name</th><th>Age</th><th>State</th>
</tr>";
for($i=0,$n=count($rows);$i<$n;$i++)
{
	$row=$rows[$i];
	echo"<tr><td>$row->id</td><td>$row->name</td><td>$row->age</td><td>$row->state</td></tr>";
}
echo"</table></fieldset>";

//lay 1 dong du lieu
$row=$db->loadObject();
echo"
<fieldset><legend>Dòng đầu tiên trong bảng demo_list</legend>
<table width=100%>
 <tr><th>Id</th><th>Name</th><th>Age</th><th>State</th></tr>";
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
echo"<br>Number Record : $result </fieldset>";
//them dong du lieu trong bang
$query="INSERT INTO `demo_list` VALUES ('', 'Mr demo',200,1)";
$db->setQuery($query);
$db->query();

?>