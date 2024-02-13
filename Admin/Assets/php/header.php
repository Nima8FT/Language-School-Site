<?php

require_once('function.php');

if (isset($_POST['action'])) {

    $AC = $_POST['action'];
    unset($_POST['action']);

    $Table = $_POST['Table'];
    unset($_POST['Table']);

    if (isset($_POST['id'])) {
        $ID = $_POST['id'];
        unset($_POST['id']);
    }

    if ($AC == "Insert")
        Insert($Table, $_POST);
    else if ($AC == "Update")
        Update($Table, $_POST, $ID);
    else if ($AC == "Delete")
        Delete($Table, $ID);

    ReDirect($URL);
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
    <title>Sadr Danesh</title>
    <script src="Assets/js/jquery-3.6.0.min.js"></script>

    <script src="Assets/js/mains.js"></script>
    <script src="Assets/js/page.js"></script>
    <script src="Assets/js/custom.js"></script>
</head>

<body>

    <?php
    require_once('aside.php');
    ?>