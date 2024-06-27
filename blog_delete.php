<?php
include "connect.php";

// SQL to delete a record
$sql = "DELETE FROM blog WHERE id=$_GET[id]";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: blog_view.php");
    exit(0);
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>