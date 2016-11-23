<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<title>Submit Form Using AJAX and jQuery</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("storage", $connection); // Selecting Database
//Fetching Values from URL
$cat=$_POST['name1'];
$loc=$_POST['email1'];
$query1="SELECT * from events where Location ='".$cat."' OR Category ='".$loc."'";
$result1 = mysql_query($query1);
echo "Filter According to Location OR Category(Matches Either Location/Category):";
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Category</th>
<th>Location</th>
<th>Description</th>
<th>User Review</th>
</tr>";
while($row = mysql_fetch_array($result1))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . $row['Description'] . "</td>";
  echo " <td> <button><i class=\"glyphicon glyphicon-thumbs-up\"></i> </button> </td>";
  
  //echo "<td><a id=\"event\" class=\"btn btn-warning\">Like</a></td> ";
  
  echo "</tr>";
  }
echo "</table>";
mysql_close($connection); // Connection Closed
?>