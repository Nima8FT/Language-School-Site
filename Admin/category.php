<?php

require_once('./Assets/php/header.php');
$Table = "category";

?>

<h1 class="Head1">دسته بندی</h1>

<table class="main__table" id="data">

    <?php HtmlTitle($Table, array('')); ?>

    <?php HtmlRow($Table, array('')); ?>
    
</table>

<?php
require_once('./Assets/php/footer.php');
?>