<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //iets is gepost
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        //checks of username & password niet leeg zijn en checkt of naam niet numeric is
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
                //opslaan in database
                $user_id = random_num(20);
                $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

                mysqli_query($con, $query);
                //brengt je naar login
                header("Location: login.php");
                die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
<div id="box">
    <form method="post">
        <div id="Login_top">Signup</div>

        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Signup"><br><br>

        <!--brengt je naar login-->
        <a href="login.php">Click to login</a><br><br>
    </form>
</div>
</body>
</html>