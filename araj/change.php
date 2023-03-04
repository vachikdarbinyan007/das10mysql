<?php
$user_id=$_POST["name"];
$actpass=md5($_POST["actpass"]);
$newpass=md5($_POST["newpass"]);
$connection=mysqli_connect("localhost","root","","mysqldb9");
$sql="SELECT * FROM users WHERE id=$user_id AND password='$actpass'";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)==1){
    $sql="UPDATE users SET password='$newpass'";
    $result=mysqli_query($connection,$sql);
    echo "1";
}else{
    echo "0";
};
?>