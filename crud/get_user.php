<?php
require "database.php";

$query = "SELECT id, username, password FROM users WHERE username = '".$_REQUEST["username"]."' AND password = '".$_REQUEST["password"]."'";

$result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "ID: ".$row["id"]. " - Username: ".$row["username"]. " - Password: ".$row["password"]. "<br>";
        }
    }else{
        echo "without results";
    }
?>
