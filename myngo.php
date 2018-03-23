<?php
ob_start();
session_start();
if(!isset($_SESSION['ngo_username']))
    header("Location:login.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>MYNGO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style type="text/css">
	.shadow{
		box-shadow: 0px 0px 1px 3px #ccc;

	}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
     
      </ul>
    </div>
  </div>
</nav>
<?php

if(isset($_POST['approve']))
{
$menu_id=$_GET['menu_id'];
}
?>

<div class="row">
    <div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>
    <div class="col-sm-8" >
    	<?php
    	include 'connect.php';
    	$menu_id=$_GET['menu_id'];
    	if($menu_id==1)
    		{?>
    	<?php 
    	$location=$_SESSION['ngo_location'];
    	$sql2="select * from contribution where '$location' IN ( select location from user where user.user_id=contribution.user_id)  order by date desc";

    	if(!$b=$conn->query($sql2))
            die($conn->error);

    	while ($row2=$b->fetch_assoc())
    		{
    			$user_id=$row2['user_id'];
    			$sql3="select * from user where user_id='$user_id'";
    			if(!$b2=$conn->query($sql3))
    				die($conn->error);
    			$userdata=$b2->fetch_assoc();
    			$user_name=$userdata['name'];
    			$user_email=$userdata['email'];
                
    			$cat_id=$row2['cat_id'];
    			$contribution_description=$row2['contribution_description'];
    			$contribution_date=$row2['date'];
    			$contribution_id=$row2['contribution_id'];
    			?>
       	<div class="row shadow">
       		<?php
                    echo $user_name."<br>";
                    echo $user_email."<br>";
                    echo $contribution_description."<br>";
                    echo $contribution_date;

       		?>
       		<a href="delete.php?menu_id=1&con_id=<?php echo($contribution_id);  ?>"><input type="button" name="approve" value="Approve"></a>
       		
       	</div>
       	<?php }?>
      <?php }




      if($menu_id==2)
    		{?>
    	<?php 

    	$location=$_SESSION['ngo_location'];

    	$sql2="select * from issue where '$location' IN ( select location from user where user.user_id=issue.user_id)  order by date desc";

    	if(!$b=$conn->query($sql2))
            die($conn->error);

    	while ($row2=$b->fetch_assoc())
    		{

    			$user_id=$row2['user_id'];
    			$sql3="select * from user where user_id='$user_id'";
    			if(!$b2=$conn->query($sql3))
    				die($conn->error);
    			$userdata=$b2->fetch_assoc();
    			$user_name=$userdata['name'];
    			$user_email=$userdata['email'];
                $issue_id=$row2['issue_id'];
    			
    			$issue_description=$row2['issue_description'];
    			$issue_date=$row2['date'];
    			?>
       	<div class="row shadow">
       		<?php
                    echo $user_name."<br>";
                    echo $user_email."<br>";
                    echo $issue_description."<br>";
                    echo $issue_date;

       		?>
       		<a href="delete.php?menu_id=2&con_id=<?php echo($issue_id);  ?>"><input type="button" name="approve" value="Approve"></a>
       		
       	</div>
       	<?php }?>
      <?php }


if($menu_id==3)
    		{?>
    	<?php 
    	$location=$_SESSION['ngo_location'];
    	$sql2="select * from contribution where '$location' IN ( select location from user where user.user_id=contribution.user_id)  order by date desc";

    	if(!$b=$conn->query($sql2))
            die($conn->error);

    	while ($row2=$b->fetch_assoc())
    		{
    			$user_id=$row2['user_id'];
    			$sql3="select * from user where user_id='$user_id'";
    			if(!$b2=$conn->query($sql3))
    				die($conn->error);
    			$userdata=$b2->fetch_assoc();
    			$user_name=$userdata['name'];
    			$user_email=$userdata['email'];
                
    			$cat_id=$row2['cat_id'];
    			$contribution_description=$row2['contribution_description'];
    			$contribution_date=$row2['date'];
    			$contribution_id=$row2['contribution_id'];
    			?>
       	<div class="row shadow">
       		<?php
                    echo $user_name."<br>";
                    echo $user_email."<br>";
                    echo $contribution_description."<br>";
                    echo $contribution_date;

       		?>
       		
       		<a href="myngo.php?menu_id=3&con_id=<?php echo $contribution_id;  ?>"><input type="submit" name="approve" value="Approve"></a>
       		
       	</div>
       	<?php }?>
      <?php }?>

     </div>
  </div>


</body>
</html>