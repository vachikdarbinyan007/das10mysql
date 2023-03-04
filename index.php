<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="" method="post">
    <select name="s" id="s">
        <option value="price">Price</option>
    </select>
    <input type="number" name="from" placeholder="from"/>
    <input type="number" name="to" placeholder="to"/>
    <input type="submit" value="Send">
    </form>
    <?php
    $con=mysqli_connect("localhost","root","","mysqldb9");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $select=$_POST["s"];
    $from=$_POST["from"];
    $to=$_POST["to"];
    $sql="SELECT * FROM pizza WHERE $select BETWEEN $from AND $to";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){?>
        <div>Name: <?php echo $row["anun"]?></div>
        <div>Vorak: <?php echo $row["vorak"]?></div>
        <div>Gin: <?php echo $row["price"]?>&euro;</div>
<?php
    };};
    ?>
</body>
</html>