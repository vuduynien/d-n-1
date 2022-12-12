<?php
include './view/header.php'; ?>
<br> <br>
<style>
    img {
        height: 200px;
    }

    table {
        margin: auto;
    }

    table {
        border: 1px solid;
        padding: 20px;
    }
</style>
<table border="10px">
    <?php
    viewcart(1);

    ?>

</table>

<?php include './view/footer.php' ?>