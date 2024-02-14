<?php

require_once('./Assets/php/header.php');
$Table = "news";

if(!isset($_SESSION['Login'])) {
    ReDirect('login.php');
}

?>

<h1 class="Head1">اخبار</h1>

<table class="main__table" id="data">

    <?php HtmlTitle($Table, array('')); ?>

    <?php HtmlRow($Table, array('')); ?>

</table>

<?php
require_once('./Assets/php/footer.php');
?>