<?php

require_once('./Assets/php/function.php');

if (isset($_SESSION['Login'])) {
    ReDirect('course.php');
} else {
    if (isset($_POST) && !empty($_POST)) {
        Login($_POST['user'], $_POST['pass']);
    }
}

?>

<!DOCTYPE html>
<!-- saved from url=(0042) -->
<html dir="ltr" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="Assets/css/Normalize.css">
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/font.icon.css">
    <title>Login</title>
    <script src="Assets/js/jquery-3.6.0.min.js"></script>

    <script src="Assets/js/admin.js"></script>
    <script src="Assets/js/paging.js"></script>
</head>

<body>

    <main>
        <form action="" method="post" class="login">
            <h2>Login</h2>

            <label for="user">Email</label>
            <input name="user" type="text">

            <label for="pass">Password</label>
            <input name="pass" type="text">

            <h5 class="err" style="color: #eb5d5d;height: 20px;"><?php echo MSG() ?></h5>

            <button type="submit">Login</button>
        </form>
    </main>


</body>

</html>