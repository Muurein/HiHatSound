<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!--<base href="/">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="<?php get_template_directory_uri(); ?>/css/images/HiHat_favicon_white.png">

    <!--css-->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/styles.css" >

    <!--javascript-->
    <script src="<?= get_template_directory_uri(); ?>/javascript/main.js" defer></script>

    <!--to render <mat-icon> in header.html-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--font: Open Sans-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>
    <!-- <header>
    <nav id="main-menu">
        <ul>
            
            <li class="branding">
                <a routerLink="/home"><img class="logo" src="/assets/HiHat_logo_white_original.png" alt="logga" ></a>
            </li>

            
            <li class="hamburger" (click)="toggleMainMenu()">
                <i class="material-icons">{{ isMainMenuOpen ? "close" : "menu" }}</i>
            </li>

            
            <li class="menu-content" [class.is-open]="isMainMenuOpen">
                <a class="menu-item top-item" routerLink="/home">Hem</a>
                <a class="menu-item" routerLink="/podd" >Poddklippning</a>
                <a class="menu-item" routerLink="/event" >Eventplanering</a>
                <a class="menu-item" routerLink="/course" >Kurs</a>
                <a class="menu-item" routerLink="/about" >Om mig</a>
                <a class="menu-item" routerLink="/contact" >Kontakt</a>
            </li>
        </ul>
    </nav>
</header> -->

    <!--huvudmeny-->
    <header class="main-header">
        <div class="header-visible">
            <div class="branding">
                <a class="branding-a" href="<?php echo get_home_url(); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/css/images/HiHat_logo_white_original.png" alt="logga för Hi-Hat Sound">
                </a>
            </div>

            <button class="hamburger" id="hamburger" aria-label="Öppna meny">
                <span class="hamburger-lines"></span>
                <span class="hamburger-lines"></span>
                <span class="hamburger-lines"></span>
            </button>
        </div>

        <nav class="main-menu" id="main-menu">
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
    </header>