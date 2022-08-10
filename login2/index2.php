<html>
<head>
    <title>Login</title>
</head>
<body>
<?php
    define("USERNAME","admin");
    define("PASSWORD","admin123");

    if(isset($_POST["login"]) or isset($_COOKIE["username"])){
        if($_COOKIE["username"] == USERNAME){
            header("location:dashboard2.php");
        }
        else if(empty($_POST["username"]) or empty($_POST["password"])){
            echo "user name or password is empty. please try again!";
        }
        
        else if($_POST["username"] == USERNAME and $_POST["password"] == PASSWORD){
            setcookie("username",USERNAME,time()+365*24*60*60,"","",false,true);
            header("location:dashboard2.php");
        }else{
            echo "User name and password are not matched...";
            header("location: index2.php");
        }
    }
?>
    <form action="" method="post">
    <div style="border:3px solid blue; width:300px; padding:10px" >
        <h1>Login Form</h1>
        User Name: <input type="text" name="username" /><br><br>
        Password: <input type="password" name="password" /><br><br>
       &emsp;&emsp;&emsp;&emsp; <input type="submit" name="login" value="login">
    </form>
    </div>
</body>
</html>