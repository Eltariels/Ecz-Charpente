<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- ---------- ENCODAGE ------------------- -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- ---------- COMPATIBILITE EDGE ------------------- -->
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <!-- ---------- COMPATIBILITE IE ------------------- -->
    <meta http-equiv="cache-control" content="no-cache">
    <!-- ---------- NO-CACHE ------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- ---------- CONTENT-TYPE ------------------- -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ---------- META VIEWPORT ------------------- -->
    <meta name="language" content="French">
    <!-- ---------- LANGUAGE ------------------- -->

    <title>ECZ - Charpente</title>
    <!-- ---------- TITLE ------------------- -->

    <meta name="description" content="Site Web de l'entreprise ECZ">
    <!-- ---------- DESCRIPTION ------------------- -->
    <meta name="keywords" content="MMI Chambéry, Département MMI, IUT de Chambéry, Université Savoie Mont Blanc">
    <!-- ---------- KEYWORDS WEBSITE ------------------- -->
    <meta name="robots" content="index, follow">
    <!-- ---------- ROBOTS ------------------- -->

    <meta name="author" content="BORELLA Théo">
    <!-- ---------- AUTHOR OF WEBSITE ------------------- -->
    <meta name="copyright" content="All rights reserved to Mr. BORELLA Théo">
    <!-- ---------- COPYRIGHTS ------------------- -->

    <!-- <link rel=" icon" type="img/svg" href="img/svg/"> -->
    <!-- ---------- ICON HEAD ------------------- -->
    <?php wp_head(); ?>
</head>

<?php

//NavBar
$navbar = get_field('navbar', 'options');

//MainTitle
$maintitlehome = get_field('main_title_home');
//SecondaryTitle
$secondtitlehome = get_field('second_title_home');

//Background Image Home
$bgimghome = get_field('bgimghome', 'option');

//Logo Nav Home
$logonav = get_field('logonav', 'option');

//Icon Home
$iconhome = get_field('iconhome', 'option');

//debug($navbar);
?>

<body <?php body_class(); ?>>

    <?php if (is_front_page()) : ?>

        <header class="PrimaryHeader" style="background-image: url(<?php if (!empty($bgimghome)) : ?><?php echo ($bgimghome['url']); ?><?php endif; ?>) ">
            <div class="HomeFilter"></div>

            <div class="HeaderNav">
                <div class="NavContainer Img">
                    <?php if (!empty($logonav)) : ?>
                        <a href="<?php echo (get_home_url()); ?>"><img src="<?php echo ($logonav['url']); ?>" alt="<?php echo ($logonav['alt']); ?>" /></a>
                    <?php endif; ?>
                </div>
                <?php wp_nav_menu(array(
                    'menu' => 'main_menu',
                    'container_class' => 'NavContainer Nav',
                    'menu_class' => 'NavList'
                )); ?>
            </div>

            <div class="HeaderContainer">
                <div class="HeaderContain Title">
                    <?php if (!empty($maintitlehome)) : ?>
                        <h1><?php echo ($maintitlehome); ?></h1>
                    <?php endif; ?>
                </div>
                <div class="HeaderContain SubTitle">
                    <?php if (!empty($secondtitlehome)) : ?>
                        <h2><?php echo ($secondtitlehome); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="HeaderContain Button">
                    <?php if (!empty($iconhome)) : ?>
                        <a href="#prestahome"><img src="<?php echo ($iconhome['url']); ?>" alt="<?php echo ($iconhome['alt']); ?>" /></a>
                    <?php endif; ?>
                </div>
            </div>
        </header>

    <?php else : ?>

        <header class="SecondHeader" style="background-image: url(<?php if (!empty($bgimghome)) : ?><?php echo ($bgimghome['url']); ?><?php endif; ?>) ">
            <div class="HomeFilter"></div>
            <div class="HeaderNav">
                <div class="NavContainer Img">
                    <?php if (!empty($logonav)) : ?>
                        <a href="<?php echo (get_home_url()); ?>"><img src="<?php echo ($logonav['url']); ?>" alt="<?php echo ($logonav['alt']); ?>" /></a>
                    <?php endif; ?>
                </div>
                <?php wp_nav_menu(array(
                    'menu' => 'main_menu',
                    'container_class' => 'NavContainer Nav',
                    'menu_class' => 'NavList',
                    'menu_id' => false
                )); ?>
            </div>

            <div class="HeaderContainer">
                <div class="HeaderContain Title">
                    <h1><?php echo(get_the_title()); ?></h1>
                </div>
            </div>
        </header>

    <?php endif; ?>