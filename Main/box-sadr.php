<?php

require_once('./Assets/php/header.php');

?>

<article class="boxes">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>دوره های فعال صدر دانش</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="boxes-list">

        <?php BoxSadr('all'); ?>

    </section>

</article>

<?php

require_once('./Assets/php/footer.php');

?>