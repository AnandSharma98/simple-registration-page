<?php

if(isset($_POST['SEND'])){
$pwd=$_POST['pwd'];
$cnpwd=$_POST['cnpwd'];
if(!(isset($_POST['radios']))){
echo"go back and complete the form ";}
else if($pwd!=$cnpwd){echo "go back & type password correctly ";}
else{
$conn=mysqli_connect('localhost','root','','user_registration');
if(!$conn){ die("connection failed: ".mysqli_connect_error());}
$gname=$_POST['gname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$gender=$_POST['radios'];
$ad_w=$_POST['adfeild'];
$add=str_replace("\n","<br>",$ad_w);
$eid=$_POST['eid'];

$sql="INSERT INTO USER VALUES('$gname','$lname','$lname','$uname','$pwd','$add','$eid')";

if(mysqli_query($conn,$sql)){
echo"sign in successful";}
else{
echo"Error: ".$sql."<br>".mysqli_error($conn);}
mysqli_close($conn);
}
}
?>