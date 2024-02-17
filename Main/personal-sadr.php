<?php

require_once('./Assets/php/header.php');

?>

<article class="teachers">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>پرسنل صدر دانش</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="teachers-list">

        <?php PersonalSadr('all'); ?>

    </section>

</article>

<?php

require_once('./Assets/php/footer.php');

?>