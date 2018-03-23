<?php
ob_start();
session_start();
if(!isset($_SESSION['ngo_username']))
    header("Location:login.php");
$con_id=$_GET['con_id'];
$menu_id=$_GET['menu_id'];
include 'connect.php';
if($menu_id==1)
{
$sql="select * from contribution where contribution_id='$con_id' ";
if(!$a=$conn->query($sql))
die($conn->error);
$r=$a->fetch_assoc();
$contribution_id=$r['contribution_id'];
$user_id=$r['user_id'];
$cat_id=$r['cat_id'];
$contribution_description=$r['contribution_description'];
$date=$r['date'];
$id=$_SESSION['ngo_id'];
$sql="insert into approve values('','$user_id','$cat_id','$contribution_description','$date','$id') ";
if(!$q=$conn->query($sql))
die($conn->error);
$sql="delete from contribution where contribution_id='$contribution_id'";
if(!$q=$conn->query($sql))
die($conn->error);
header('Location:myngo.php?menu_id='.$menu_id);
}
else
echo "SElection wrong";
?>
