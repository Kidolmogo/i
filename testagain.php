<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<body>
    <form action="testagain.php" method="post">
        <input type="text" name="name"><br><br>
        <input type="email" name="email"><br><br>
        <input type="password" name="pass">
        <input type="submit" value="Submit">
    </form>
    <?php
    error_reporting(0);
    //variable naming
    $x = $_POST["name"];
    $y = $_POST["email"];
    $z = $_POST["pass"];
    // connection establishment
    $conn = new mysqli("localhost" , "root" , "" ,"gov");
    // connection true/false
    if($conn->connect_error){
        die("Connection failed:".$conn->$connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO gov(Name , Email , Password) value(?,?,?)" );
        $stmt->bind_param("sss" , $x , $y , $z);
        $stmt->execute();
        echo "Singned in successfully";
        $stmt->close();
        $conn->close();
    }
    
    
    ?>
</body>
</html>