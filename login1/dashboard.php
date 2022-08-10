<?php
    define("USERNAME","admin");
    define("PASSWORD","admin123");

    if(isset($_POST["login"])){
        if(empty($_POST["username"]) or empty($_POST["password"])){
            echo "user name or password is empty. please try again!";
        }
        
        if($_POST["username"] == USERNAME and $_POST["password"] == PASSWORD){
            echo "<h2>Welcome ".$_POST["username"]."</h2>";
        }else{
            echo "User name and password are not matched...";
            header("location: index.php");
        }
    }
?>