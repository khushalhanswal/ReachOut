<?php
ob_start();
session_start();
if(!isset($_SESSION['user_username']))
    header("Location:userlogin.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
<?php
include 'connect.php';
$sql="select * from user";
echo $_SESSION['user_username'];
echo $_SESSION['user_name'];
echo $_SESSION['user_email'];
echo $_SESSION['user_location'];
echo $_SESSION['user_credit'];



?>
</body>
</html>