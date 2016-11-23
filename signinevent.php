<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(".hello").click( function() {
    var yourText = $(this).text();
	alert(yourText);
});
</script>
</head>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("storage", $connection); // Selecting Database
//Fetching Values from URL
$query2="SELECT Category from events";
$result2 = mysql_query($query2);
echo"<div class=\"dropdown\">
<button  class=\"btn btn-primary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Select Category
<span class=\"caret\"></span></button>
<ul class=\"dropdown-menu\">";
while($row = mysql_fetch_array($result2)){ 
$Category = $row['Category']; 													//Creates a loop to loop through results
echo "<li id=\"yo\" class=\"hello\"><a href=\"#\">".$Category."</a></li>";  //$row['index'] the index here is a field name
}
echo "</ul>";
echo "</select>";
mysql_close($connection); // Connection Closed
?>