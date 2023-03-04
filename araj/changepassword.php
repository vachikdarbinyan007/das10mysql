<?php
if(isset($_POST["btn"])){
    $id=$_POST["btn"];
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
    <title>CHANGE PASSWORD | Coala</title>
</head>
<body>
    <div class="container">
        <div class="row card">
            <h1>CHANGE PASSWORD YANIAN</h1>
            <div class="twelve columns">
                <span>Enter actual Password:</span>
                <input type="password" placeholder="Password..." class="u-full-width" id="act_pass"/>
            </div>
            <div class="twelve columns input_div">
                <span>Enter new Password:</span>
                <input type="password" placeholder="Password..." class="u-full-width" id="new_pass"/>
            </div>
            <div class="twelve columns input_div">
                <button value="<?=$id?>" class="button-primary" id="btn">Click</button>
            </div>
        </div>
    </div>

    <script>
        btn.onclick=function(){
            let req= new XMLHttpRequest();
            let id=btn.value;
            let actpass=act_pass.value;
            let newpass=new_pass.value;
            let data = "name="+id+"&actpass="+actpass+"&newpass="+newpass;
            req.open("POST","change.php",true);
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            req.send(data);
            req.onreadystatechange = go;

            function go(){
            if(req.readyState == 4 && req.status == 200){
             if(req.responseText==="0"){
                alert("not Found");
             }else if(req.responseText==="1"){
                document.write("password  changed");
                setTimeout(function(){
                    window.location = "login.php";
                },2000)
             }
            }
       }
        }
    </script>
</body>
</html>