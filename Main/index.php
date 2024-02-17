<?php

require_once('./Assets/php/header.php');

?>


<article class="slider-container">

    <?php Slider(); ?>

    <button id="nextBtn" class="slider-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
        </svg>
    </button>

    <button id="prevBtn" class="slider-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>
    </button>
</article>

<article class="facilities">
    <div class="facilities-item">
        <img src="./Assets/images/book.png" alt="item">
        <div class="facilities-item-title">
            <h3>انواع زبان</h3>
            <p>انگلیسی فرانسه و آلمانی</p>
        </div>
    </div>
    <div class="facilities-item">
        <img src="./Assets/images/online.png" alt="item">
        <div>
            <h3>آموزش</h3>
            <p>حضوری و مجازی</p>
        </div>
    </div>
    <div class="facilities-item">
        <img src="./Assets/images/support.png" alt="item">
        <div>
            <h3>مشاوره</h3>
            <p>پاسخگویی آنلاین و تلفنی</p>
        </div>
    </div>
    <div class="facilities-item">
        <img src="./Assets/images/teach.svg" alt="item">
        <div>
            <h3>پکیج ها</h3>
            <p>TCC, free descution</p>
        </div>
    </div>
</article>

<article class="boxes">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>دوره های فعال صدر دانش</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="boxes-list">

        <?php BoxSadr('filter'); ?>

    </section>

    <section class="show">
        <a href="box-sadr.php">نمایش دوره های بیشتر</a>
        <img src="./Assets/images/edame.png" alt="arrow">
    </section>

</article>

<article class="boxes">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>دوره های فعال بقایی</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="boxes-list">

        <?php BoxBaghai('filter') ?>

    </section>

    <section class="show">
        <a href="box-baghai.php">نمایش دوره های بیشتر</a>
        <img src="./Assets/images/edame.png" alt="arrow">
    </section>

</article>

<article class="teachers">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>اساتید صدردانش</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="teachers-list">

        <?php TeacherSadr('filter'); ?>

    </section>

    <section class="show">
        <a href="teacher-sadr.php">نمایش دوره های بیشتر</a>
        <img src="./Assets/images/edame.png" alt="arrow">
    </section>

</article>

<article class="teachers">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>اساتید بقایی</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="teachers-list">

        <?php TeacherBaghai('filter'); ?>

    </section>

    <section class="show">
        <a href="teacher-baghai.php">نمایش دوره های بیشتر</a>
        <img src="./Assets/images/edame.png" alt="arrow">
    </section>

</article>

<article class="news">

    <sections class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>اخبار</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </sections>

    <section class="news-list">

        <?php News('filter'); ?>

    </section>

    <section class="show">
        <a href="news.php">نمایش دوره های بیشتر</a>
        <img src="./Assets/images/edame.png" alt="arrow">
    </section>

</article>

<article class="about">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>درباره صدر دانش</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="about-title">
        <img src="./Assets/images/Slider.png" alt="Slider">
        <?php AboutUs(); ?>
    </section>

</article>

<article class="teachers">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>پرسنل صدر دانش</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="teachers-list">

        <?php PersonalSadr('filter'); ?>

    </section>

    <section class="show">
        <a href="personal-sadr.php">نمایش دوره های بیشتر</a>
        <img src="./Assets/images/edame.png" alt="arrow">
    </section>

</article>

<article class="teachers">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>پرسنل بقایی</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="teachers-list">

        <?php PersonalBaghai('filter'); ?>

    </section>

    <section class="show">
        <a href="personal-baghai.php">نمایش دوره های بیشتر</a>
        <img src="./Assets/images/edame.png" alt="arrow">
    </section>

</article>

<article class="comments">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>نظرات و پیشنهادات</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="comments-bottom">

        <?php Commetns(); ?>

    </section>

</article>

<?php

require_once('./Assets/php/footer.php');

?>