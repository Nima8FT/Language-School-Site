<?php

require_once('./Assets/php/header.php');

?>

<article class="news">

    <sections class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>اخبار</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </sections>

    <section class="news-list">

        <?php News('all'); ?>

    </section>

</article>

<?php

require_once('./Assets/php/footer.php');

?>