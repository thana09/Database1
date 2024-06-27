<?php
include "connect.php";

// Check if the form data is set
if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['poster'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $poster = $_POST['poster'];

    $sql = "INSERT INTO blog (title, content, poster, dmy)
            VALUES ('$title', '$content', '$poster', now()";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: Form data is missing.";
}

$conn->close();
?>