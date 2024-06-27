<?php
include "connect.php";

// Check if the form data is set
if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['id'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['id'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE blog SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: blog_view.php");
        exit(0);
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: Form data is missing.";
}

$conn->close();
?>