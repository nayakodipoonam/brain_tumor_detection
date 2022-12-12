<!DOCTYPE html>
<html lang="en">
<head>
  <title>SQL_Connections</title>
  <?php include 'links.php'  ?>
</head>
<body>

<div class="container">
  <h1>Add Another record</h1>
  <form action="" method="POST">
      <label for="id">ID of the student</label>
      <input type="number" name="id">
      <br> <br>
      <label for="name">Name of the student</label>
      <input type="text" name="name">
      <br> <br>
      <label for="branch">Branch of the student</label>
      <input type="text" name="branch">
      <br><br>
      <label for="email">Email of the student</label>
      <input type="email" name="email">
      <br><br>
      <label for="marks">Marks of the student</label>
      <input type="number" name="marks">
      <br><br>
      
      <input type="submit" name="submit" value="ADD" >
      

  </form>
  <button onclick="display.php">Display</button>
  <p></p>
</div>

</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $name= $_POST['name'];
  $br= $_POST['branch'];
  $em= $_POST['email'];
  $marks= $_POST['marks'];
  
  $insert_q ="INSERT INTO `record`(`ID`, `Name`, `Branch`, `Email`, `Marks`) VALUES ('$id','$name','$br','$em','$marks')";
  
  $res = mysqli_query($con,$insert_q);

  if($res)
  {
    ?>
    <script>
      alert("new entry inserted")
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("entry not inserted")
    </script>
    <?php
  }
  
  

}


?>