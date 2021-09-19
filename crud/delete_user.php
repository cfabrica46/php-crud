<?php
require "database.php";

$stmt = $conn->prepare("DELETE FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $_POST["username"], $_POST["password"]);
$stmt->execute();

if ($stmt->affected_rows === 0){
    die("no rows affected");
}

echo "completed";

?>
