<?php

require_once('./Assets/php/header.php');

?>

<article class="roadmap">

    <section class="roadmap-head">

        <div class="roadmap-head-title germany">
            <div class="circle"></div>
            <p>آلمانی</p>
        </div>

        <div class="roadmap-head-title french">
            <div class="circle"></div>
            <p>فرانسه</p>
        </div>

        <div class="roadmap-head-title english">
            <div class="circle"></div>
            <p>انگلیسی</p>
        </div>

    </section>

    <section class="roadmap-body">

        <div class="french-row">
            <?php RoadmapFn(); ?>
        </div>

        <div class="english-row">
            <?php RoadmapEn(); ?>
        </div>

        <div class="germany-row">
            <?php RoadmapGr(); ?>
        </div>

    </section>

</article>

<?php

require_once('./Assets/php/footer.php');

?>