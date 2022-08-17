<?php
    include ('connection.php');
    if(isset($_POST["add"])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $job = $_POST['job'];

        

        $sq1 ="INSERT INTO member_details(FirstName, LastName, Address, JobTitle ) VALUES ('$firstname','$lastname','$address','$job')";
        if($con-> query($sq1)){  //(mysqli_query($con,$sql))
            header("location:index.php");
        }else {
            echo "connection error: ".$con->connect_error;
        }
    }
    if(isset($_POST["update"])){
        $id=$_POST["id"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $address=$_POST["address"];
        $job=$_POST["job"];
    
        $sql = "UPDATE member_details SET FirstName='$firstname', LastName='$lastname', Address='$address', JobTitle='$job' WHERE ID=$id";
        $con->query($sql);
        //$_SESSION['message'] = "Member details updated!";
        header("location:index.php");
      }

    
?>