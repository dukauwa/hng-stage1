<!DOCTYPE html>
<html>
  <head>
    <title>List</title>
  </head>
<body>
<?php
include('dbconnect.php');
$result = mysql_query("SELECT * FROM interns")or die(mysql_error());

echo "<table border='1' cellpadding='25'>";
echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th></tr>";

while($row = mysql_fetch_array( $result )) {
  echo "<tr>";
  echo '<td>' . $row['id'] . '</td>';
  echo '<td>' . $row['firstname'] . '</td>';
  echo '<td>' . $row['lastname'] . '</td>';
  echo "</tr>";
}

echo "</table>";

?>

</body>
</html>
