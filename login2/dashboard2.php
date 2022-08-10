<a href ="dashboard2.php?action=logout"><button style="float:right" type="button" name="logout" >Logout</button></a>

<?php
   echo "<h2>Welcome ".$_COOKIE["username"]."!</h2>";
   if(isset($_GET["action"]) and $_GET["action"]=="logout"){
       setcookie("username","",time()-3600,"","",false,true);
       header("location:index2.php");
   }
?>