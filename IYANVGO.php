<?php
    include('login.php');

	if(isset($_SESSION['login_user'])){
        header("location: secretPage");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="loginPage.css"> -->
    <title>IYANVGO :)</title>
</head>

<body>
    <a href="/">Go Back</a>
    <div id="login">
        <form action="login" method="POST">
            <input id="name" name="username" placeholder="hmmmmm" type="text">
            <input id="password" name="password" placeholder="hmmmmm" type="password">
            <br><br>
            <input name="submit" type="submit" value="secret... shhh">
            <span><?php echo $error; ?></span>
        </form>
    </div>
</body>
</html>