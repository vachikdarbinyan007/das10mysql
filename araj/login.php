<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="normalize.css">
    <title>LOGIN | Coala</title>
</head>
<body>
    <div class="container">
        <div class="row card">
            <h1>Login YANIAN</h1>
            <div class="twelve columns">
                <span>Enter Name:</span>
                <form action="account.php" method="post">

                <input type="text" name="name" placeholder="Name..." class="u-full-width"/>
            </div>
            <div class="twelve columns ">
                <span>Enter Password:</span>
                <input type="password" name="password" placeholder="Password..." class="u-full-width"/>
            </div>
            <div class="twelve columns input_div">
                <input type="submit" value="Click"  class="button-primary"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>