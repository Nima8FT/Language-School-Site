<?php

require_once('./Assets/php/header.php');

?>

<article class="teachers">

    <section class="head-title">
        <img class="line-right" src="./Assets/images/line.png" alt="Line">
        <h2>اساتید صدردانش</h2>
        <img src="./Assets/images/line.png" alt="Line">
    </section>

    <section class="teachers-list">

        <?php TeacherSadr('all'); ?>

    </section>

</article>

<?php

require_once('./Assets/php/footer.php');

?>