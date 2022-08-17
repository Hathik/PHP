<html>
<head></head>
<body>
<?php include 'connection.php';
  $firstname = "";
  $lastname ="";
  $address ="";
  $job="";
  $id="";
  $update=false;
?>
    
  <h1>Member Details</h1>
 <?php 
  if(isset($_GET['action']) and $_GET['action']=="edit"){
    $id = $_GET['id'];
    $update =true;
    $sql = "SELECT * FROM member_details WHERE id=$id";

    $result = $con-> query($sql);
    print_r($result);
    if($result->num_rows==1){
      $n = $result->fetch_assoc();
      $firstname = $n["FirstName"];
      $lastname =$n["LastName"];
      $address =$n["Address"];
      $job=$n["JobTitle"];
    }
  }

 
  ?>
  <?php
    $query = "SELECT * FROM member_details";
    $result = $con->query($query);
  ?>
  <table style="border:1px solid">
    <thead>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>job Title</th>
      <th>Actions</th>
  </thead>
  <?php
    if($result){
      //while($row = $result->fetch_row());
      while($row = $result-> fetch_assoc()){
        print_r($row); echo "<br>";
  ?>
  <tr>
    <td><?php echo $row["ID"] ?></td>
    <td><?php echo $row["FirstName"] ?></td>
    <td><?php echo $row["LastName"] ?></td>
    <td><?php echo $row["Address"] ?></td>
    <td><?php echo $row["JobTitle"] ?></td>
    <td><a href="index.php?action=edit&amp;id=<?php echo $row["ID"];?>">Edit</a></td>
    <td><a href="index.php?action=del&amp;id=<?php echo $row["ID"];?>">Remove</a></td>
  </tr>
  
  <?php
      }}
      $result -> free_result();
  ?>
  </table>
  <h1>Add Members</h1>
    <form action="memberAction.php" method="post">
    <input hidden type="text" name="id" value= "<?php echo $id ?>"><br><br>
		FirstName : <input type="text" name="firstname" value= "<?php echo $firstname ?>"><br><br>
        LastName  : <input type="text" name="lastname" value= "<?php echo $lastname ?>"><br><br>
        Address : <input  name="address"   value= "<?php echo $address ?>"><br><br>
        Job Title : <input type="text" name="job" value= "<?php echo $job ?>"><br><br>
        <div style="padding: 15px 200px; ">
        <?php if($update){ ?>
          <input type="submit" name="update" value="update">
        <?php } else {?>
        <input type="submit" name="add" value="add">
        <?php } ?>
</div>
	</form>
</body>
</html>