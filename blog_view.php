<?php
ob_start();
session_start();
echo "<h3> Logged : $_SESSION[email]</h3>" ;
if (isset($_SESSION['loggedin'])) {
  echo "<p>";
  echo"<a href='blog_view.php'> แสดง Blog </a>|";
  echo"<a href='blog_form.php'> เพิ่ม Blog </a>|";
  echo "<a href='logout.php'> Logout </a>";
  echo "</p>" ;
}

include "connect.php";
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Title: " . $row["title"] . "<br/>";
        echo "Content: " . $row["content"] . "<br/>";
        echo "Poster: " . $row["poster"] . "<br/>";
        echo "Date: " . $row["dmy"] . "<br/>";
        echo "<a href='blog_delete.php?id=" . $row["id"] . "'> ลบ </a> ";
        echo "&nbsp;&nbsp;";
        echo "<a href='blog_edit.php?id=" . $row["id"] . "'> แก้ไข </a> ";
        echo "<hr/>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>