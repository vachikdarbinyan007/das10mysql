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
        <h1>Registration YANIAN</h1>
        <div class="row card">
            <div class="twelve columns">
                <span>Enter Name:</span>
                <input type="text" placeholder="Name..." class="u-full-width" id="naminp"/>
            </div>
            <div class="twelve columns input_div">
                <span>Enter E-Mail:</span>
                <input type="email" placeholder="Password..." class="u-full-width" id="emailinp"/>
            </div>
            <div class="twelve columns input_div">
                <span>Enter Password:</span>
                <input type="password" placeholder="Password..." class="u-full-width" id="passwordinp"/>
            </div>
            <div class="twelve columns input_div">
                <span>Enter Gender:</span>
                <select name="s" id="s" class="u-full-width">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="twelve columns input_div">
                <input type="submit" value="Click"  class="button-primary" id="reg_btn" onclick="x()"/>
            </div>
        </div>
    </div>
    <script>
      let req;
       function x(){
        let nam=document.getElementById("naminp").value;
        let email=document.getElementById("emailinp").value;
        let password=document.getElementById("passwordinp").value;
        let gender=document.getElementById("s").value;

        let data='name='+nam+'&email='+email+'&password='+password+'&gender='+gender;
        req = new XMLHttpRequest();
        req.open("post","registr.php",true);
        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        req.send(data);
        req.onreadystatechange = go;
       };
       function go(){
        if(req.readyState == 4 && req.status == 200){
           window.location="login.php"
        }
       }
    </script>
</body>
</html>