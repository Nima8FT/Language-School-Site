<?php

require_once('./Assets/php/header.php');
$Table = "slider";

?>

<h1 class="Head1">اسلایدر</h1>

<table class="main__table" id="data">

    <?php HtmlTitle($Table, array('')); ?>

    <?php HtmlRow($Table, array('')); ?>

</table>

<?php
require_once('./Assets/php/footer.php');
?>