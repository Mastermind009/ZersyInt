<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("storage", $connection); // Selecting Database
//Fetching Values from URL
$query1="SELECT Location from events";
$query2="SELECT Category from events";
$result1 = mysql_query($query1);
$result2 = mysql_query($query2);
echo "Filter According to Location:";
echo "<select id='Loc' name='Location'>";
while($row = mysql_fetch_array($result1)){ 
$Location = $row['Location']; 													//Creates a loop to loop through results
echo '<option value="'.$Location.'">'.$Location.'</option>';  //$row['index'] the index here is a field name
}
echo "</select>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Filter According to Category:";
echo "<select id='Cat' name='Category'>";
while($row = mysql_fetch_array($result2)){ 
$Category = $row['Category']; 													//Creates a loop to loop through results
echo '<option value="'.$Category.'">'.$Category.'</option>';  //$row['index'] the index here is a field name
}
echo "</select>";
mysql_close($connection); // Connection Closed
?>