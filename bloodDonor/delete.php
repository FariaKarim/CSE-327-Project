<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
include 'dbconnect.php';

$qry="delete from blood where id=$id";
$result=mysqli_query($conn,$qry);
if($result){
	echo "Sucessfully Deleted";
	header('location:dashboard.php');
}
else{
	echo "Error..";
}
}

?>