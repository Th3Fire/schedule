<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<?php
require_once("connect.php");


$sql="SELECT * FROM test";
$result=mysqli_query($con,$sql);
$_result = $con->query($sql);
echo "<table width='100%'  border='5'>";
while($row = $_result->fetch_assoc()) 
{

// Associative array
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
printf ("%s (%s)\n",$row["CourseName"],$row["Time"]);
echo "<br>";

echo "<tr><td>$row[id]</td>";
echo "<td>$row[CourseName]</td>";
echo "<td>$row[Time]</td>";
echo "<td> <a href= \"delete.php?id=$row[id]\">ลบ </a></td></tr>";

}
echo "</table>";
// Numeric array




// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>

</body>
</html>

