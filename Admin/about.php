<?php

require_once('./Assets/php/header.php');
$Table = "about";

if(!isset($_SESSION['Login'])) {
    ReDirect('login.php');
}

?>

<h1 class="Head1">درباره ما</h1>

<table class="main__table" id="data">

    <?php HtmlTitle($Table, array('')); ?>

    <?php HtmlRow($Table, array('')); ?>
    
</table>

<?php
require_once('./Assets/php/footer.php');
?>