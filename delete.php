<?php
require_once("connect.php");

$sql = "DELETE FROM course WHERE id=".$_GET['id'];

if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);

?>