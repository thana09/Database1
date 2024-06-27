<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply</title>
</head>
<body>

<?php
    include "connect.php";
    $sql = "    SELECT * FROM blog Where id='$_GET[ref]' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "<h2> $row[title]</h2>";
    echo "<p> $row[content]</p>";
    echo "<p> $row[poster] date: $row[dmy]</p>";
    echo "<hr/>";
?>

<form action="reply_insert.php?ref<?php echo $row['id']?>" method="post">
    ข้อความผู้ตอบ <textarea name="reply" row="5" cols="30"> </textarea> <br/>
    ผู้ตอบ <input type="text" name="user" /> <br/>
    <input type="submit" value="SEND" />
</form>
</body>
</html>