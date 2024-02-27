<?php

require_once('function.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sadre Danesh</title>
    <link rel="stylesheet" href="./Assets/css/index.css">
</head>

<body>

    <header class="header">
        <section class="header-hambergurmenu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

            <div class="header-hambergurmenu-title">
                <a href="index.php">خانه</a>
                <a href="roadmap.php" style="margin-left: 10px;">دوره ها</a>
                <a href="teacher-sadr.php">اساتید صدر دانش</a>
                <a href="teacher-baghai.php">اساتید بقایی</a>
                <a href="news.php" class="menu-news">اخبار</a>
                <a href="personal-sadr.php">پرسنل صدر دانش</a>
                <a href="personal-baghai.php">پرسنل بقایی</a>
                <a href="aboutus.php" class="menu-aboutus">درباره ما</a>
                <a href="comments.php" class="menu-comments">نظرات</a>
            </div>

            <div class="header-hambergurmenu-bg"></div>
        </section>
        <section class="header-right">
            <img class="header-logo-img" class="logo" src="../Design/Assets/images/logo.png" alt="Logo">
            <h1 class="header-logo-title name">آموزشگاه زبان صدر دانش و بقایی</h1>
            <div class="header-right-menu">
                <a href="index.php">خانه</a>
                <a href="roadmap.php" style="margin-left: 10px;">دوره ها</a>
                <div class="header-right-menu-title">
                    <a class="menu-teacher" id="teacher">اساتید</a>

                    <div class="header-right-menu-title-sub" id="teacher-sub">
                        <a href="teacher-sadr.php">صدر دانش</a>
                        <a href="teacher-baghai.php">بقایی</a>
                    </div>
                </div>
                <a href="news.php" class="menu-news">اخبار</a>
                <div class="header-right-menu-title">
                    <a class="menu-teacher" id="personal">پرسنل</a>

                    <div class="header-right-menu-title-sub" id="personal-sub">
                        <a href="personal-sadr.php">صدر دانش</a>
                        <a href="personal-baghai.php">بقایی</a>
                    </div>
                </div>
                <a href="aboutus.php" class="menu-aboutus">درباره ما</a>
                <a href="comments.php" class="menu-comments">نظرات</a>
            </div>
        </section>
        <section class="header-left">
            <a class="menu-call">تماس با ما</a>
            <img src="../Design/Assets/images/call.png" alt>
        </section>
    </header>

    <main>