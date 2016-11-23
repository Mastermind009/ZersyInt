<?php 
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("storagedb", $connection); // Selecting Database
$query = mysql_query("insert into form_element(name, email, password, contact) values ('$name2', '$email2', '$password2','$contact2')");
//while($r=mysql_fetch_array($res))
//{
//	echo '<div>'.$r['name'].'</div>';
//}

?>