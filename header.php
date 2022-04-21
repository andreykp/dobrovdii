<!DOCTYPE html>
<html lang="ua">
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Благодійний Фонд «ДОБРОВДІЇ»</title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

    <header class="header">
        <div class="container main-nav ">
            <nav>
                <a href="index.html" class="logo-link link">Благодійний Фонд «ДОБРОВДІЇ»</a>
                <ul class="site-nav list">
                    <li class="item"><a href="#about" class="header-link">Про нас</a></li>
                    <li class="item"><a href="#events" class="header-link">Акції</a></li>
                    <li class="item"><a href="#news" class="header-link">Новини</a></li>
                    <li class="item"><a href="#" class="header-link">Оферта</a></li>
                    <li class="item"><a href="#contacts" class="header-link">Контакти</a></li>
                </ul>
            </nav>

            <ul class="language-list list">
                <li class="item"><a href="<?= get_template_directory_uri() ?>/index-eng.html" class="language-link">En</a></li>

                <li class="item"><a href="<?= get_template_directory_uri() ?>/index.html" class="language-link">Ua</a></li>
            </ul>
        </div>
    </header>

