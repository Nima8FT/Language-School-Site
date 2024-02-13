<?php

require_once('./Assets/php/header.php');
$Table = "comments";

?>

<h1 class="Head1">نظرات و پیشنهادات</h1>

<table class="main__table" id="data">

    <?php HtmlTitle($Table, array('')); ?>

    <?php HtmlRow($Table, array('')); ?>

</table>

<?php
require_once('./Assets/php/footer.php');
?>