<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //Iets is gepost
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    //checks of username & password niet leeg zijn en checkt of naam niet numeric is 
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
            //leest van database
            //checkt of de gegeven username hetzelfde is als een username in de database met een limiet van 1 resultaaat
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);
            //checkt of result successvol is
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    //als het password klopt ga je naar index pagina
                    if($user_data['password'] == $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];   
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "Wrong username or password!";
    }else
    {
        echo "Wrong username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body> 
<div id="box">
    <form method="post">
        <div id="Login_top">Login</div>

        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Login"><br><br>

        <!--Brengt je naar singup.php-->
        Don't have an account yet? 
        <a href="signup.php">Signup</a><br><br>
    </form>
</div>
</body>
</html>