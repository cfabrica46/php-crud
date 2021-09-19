<?php
require "database.php";

$stmt = $conn->prepare("INSERT INTO users(username, password) VALUES (?,?)");
$stmt->bind_param("ss", $_POST["username"], $_POST["password"]);
$stmt->execute();

if ($stmt->error !== ""){
    die("error into insert user: ".$stmt->error);
}

echo "completed";

?>
