<?php
require_once("classeMenu.php");

?>
<div class="all-header-container">
    <img src="images/logo.webp" alt="">
    <div class="header-container">
        <a href="index.php">Home</a>
        <div class="menu_nav">
            <a href="#" class="menu">Menu</a>
            <div class="menu_content">
                <?php
                    Menu::AffichageMenu()
                ?>
            </div>
        </div>
        <a href="#">Services</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="header-container-responsive">
        <a href="#burger-menu">☰</a>
    </div>
    <div id="burger-menu" class="side-bar">
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="#">Services</a>
        <a href="contact.php">Contact</a>
        <a class="close" href="#">&times;</a>
    </div>
</div>