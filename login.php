<!--om-->
<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>ReachOut</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

</head>
<body>
  <?php
   $err="";
  include 'connect.php';
  if(isset($_POST['submit']))
  {
  extract($_POST);
  $sql="select * from ngo where username='$user' ";
  if(!$a=$conn->query($sql))
    die($conn->error);
  if($a->num_rows==0)
    $err="UserName Not Exists";
  else{

    $row=$a->fetch_assoc();
    $pass=$row['password'];
    if($pass!=$pwd)
      $err="Invalid Password";

  }
   if($err=="")
   {
    $_SESSION['ngo_username']=$user;
    $_SESSION['ngo_password']=$pwd;
    $_SESSION['ngo_name']=$row['name'];
    $_SESSION['ngo_location']=$row['location'];
    $_SESSION['ngo_id']=$row['id'];
    header('Location:myngo.php?menu_id=1');
 
    
    
   }
  }
  ?>
<form action="login.php" method="post">
  <div class="form-group">
    <?php echo $err; ?>
  </div>
  <div class="form-group">

    <label for="email">Email address:</label>
    <input type="text" class="form-control" id="email" name="user">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
 
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
</body>
</html>