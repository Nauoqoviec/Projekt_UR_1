<?php
    require 'php/functions.php';
    session_start();
?>


<header>
    <div class="container header">
        <img src="img/logo.png" alt="logo" id="logo">
            <?php include 'navigation.php' ?>
        <?php zaloguj(); ?>
    </div>
</header>