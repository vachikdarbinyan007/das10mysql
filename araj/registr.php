<?php
$connection=mysqli_connect("localhost","root","","mysqldb9");
$old_name=$_POST["name"];
$old_email=$_POST["email"];
$old_password=$_POST["password"];
$old_gender=$_POST["gender"];
$name=mysqli_real_escape_string($connection,$old_name);
$email=mysqli_real_escape_string($connection,$old_email);
$re_password=mysqli_real_escape_string($connection,$old_password);
$password=md5($re_password);
$gender=mysqli_real_escape_string($connection,$old_gender);
$sql="INSERT INTO users(name,email,password,gender) VALUES('$name','$email','$password','$gender')";
mysqli_query($connection,$sql);
?>