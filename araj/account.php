<?php 
$connection=mysqli_connect("localhost","root","","mysqldb9");
if(isset($_POST["name"]) && isset($_POST["password"])){
    $name=$_POST["name"];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM users WHERE name='$name' AND password='$password' ";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)==1){
        while($row=mysqli_fetch_assoc($result)){
            $user_name=$row["name"];
            $user_email=$row["email"];
            $user_gender=$row["gender"];
            $user_id=$row["id"];
        }
    }else{
        header("Location:login.php");
    };
}else{
    header("Location:login.php");
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Registration | Coala</title>
</head>
<body>
    <div class="container">
        <h1>Welcome <?=$user_name?></h1>
        <div class="row card">
           <div class="twelve columns">
            <ul>
                <li>Gender:<?=$user_gender?></li>
                <li>E-Mail:<?=$user_email?></li>
            </ul>
           </div> 
           <div class="twelve columns">
                <button class="button-primary" id="logoutbtn">Logout</button>
           </div> 
           <div class="twelve columns">
           <form action="changepassword.php" method="post">
                <button style="margin-top:1rem;" name="btn" value="<?php echo $user_id?>">Change Password</button>
            </form>
           </div>
        </div>
    </div>
    <script>
        logoutbtn.onclick=function(){
            let req;
            req = new XMLHttpRequest();
            req.open("post","logout.php",true);
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            req.send(null);
            req.onreadystatechange = go;
       
        function go(){
        if(req.readyState == 4 && req.status == 200){
           window.location="login.php"
        }
       }
        }
    </script>
</body>
</html>