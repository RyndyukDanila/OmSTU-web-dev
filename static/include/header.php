<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="static/css/style.css">
        <title>Dogs Shelter</title>
    </head>
    <body>
        <div class="wrapper">
            <header id="open" class="header">
                <div id="close" class="header__container">  
                    <a href="<?php echo BASE_URL . "main.php"; ?>" class="header__logo">
                        <img src="static/img/logo.svg" width=40px alt="Логотип">
                    </a>
                    <div class="header__menu menu">
                        <nav class="menu__body">
                            <ul class="menu__list">
                                <li class="menu__item">
                                    <a href="<?php echo BASE_URL . "main.php"; ?>" class="menu__link">ГЛАВНАЯ</a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo BASE_URL . "breeds.php"; ?>" class="menu__link">ПОРОДЫ</a>
                                </li>
                                <li class="menu__item">
                                    <a href="<?php echo BASE_URL . "general_list.php"; ?>" class="menu__link">ОБЩИЙ СПИСОК</a>
                                </li>
                                <?php if (isset($_SESSION['id'])): ?>
                                    <li class="menu__item">
                                        <a href="<?php echo BASE_URL . "profile.php"; ?>" class="menu__link">ПРОФИЛЬ</a>
                                    </li>
                                <?php else: ?>    
                                    <li class="menu__item">
                                        <a href="<?php echo BASE_URL . "registration.php"; ?>" class="menu__link">ПРОФИЛЬ</a>
                                    </li>
                                <?php endif; ?>
                                
                            </ul>
                        </nav>
                    </div>
                    <?php if (isset($_SESSION['id'])): ?>
                        <div class="header__button">
                            <a href="<?php echo BASE_URL . "logout.php"; ?>" class="button button_blue">ВЫЙТИ</a>
                            <a href="#open" class="icon-menu"><span></span></a>
                            <a href="#close" class="close-icon-menu"></a>
                        </div>
                    <?php else: ?>    
                        <div class="header__button">
                            <a href="<?php echo BASE_URL . "login.php"; ?>" class="button button_blue">ВОЙТИ</a>
                            <a href="#open" class="icon-menu"><span></span></a>
                            <a href="#close" class="close-icon-menu"></a>
                        </div>
                    <?php endif; ?>
                </div>
            </header>
<!-- HEADER -->