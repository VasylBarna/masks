<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
/>
<meta name="robots" content="index, follow" />
<meta name="google" content="notranslate" />
<meta name="format-detection" content="telephone=no" />
<meta name="description" content="" />

<title><?php bloginfo('description'); ?></title>

<?php wp_head() ?>

</head>
<body class="full-document">
<div class="container">
<div class="wrapper">
<div class="wrapperImg">
  <img class="back" src="<?php bloginfo('template_url'); ?>./src/assets/images/back-hero-desk.png" alt="Background image">
 <header class="header">
  <nav class="navigation">
    <div class="nav-title">
      <a href="./index.php" class="logo"><?php the_field('name_company')?></a>
      <div class="menu" id="menu" data-menu>
        <ul class="site-nav list">
          <li class="item">
            <a
              href="./index.php"
              class="link current"
              rel="noreferrer noopener"
              >Home</a
            >
          </li>
          <li class="item">
            <a href="#About" class="link" rel="noreferrer noopener">About</a>
          </li>
          <li class="item"><a href="#" class="link">Product</a></li>
          <li class="item"><a href="#" class="link">Contact</a></li>
          <li class="item"><a href="#" class="link">History</a></li>
          <li class="item">
            <button
              class="btn btnHeader"
              type="button"
              aria-expanded="false"
              aria-controls="menu-container"
              data-menu-button
            >
              Contact&nbsp;us
            </button>
          </li>
        </ul>
      </div>
         <button class="menu-button" type="button" aria-expanded="false" aria-controls="menu" data-menu-button>
          <!-- <svg class="svg-menu" width="40" height="40" aria-label="Mobile menu switch">
            <use class="icon-cross" href="<?php bloginfo('template_url'); ?>./src/assets/images/icon-cross.svg"></use>
            <use class="icon-menu" href="<?php bloginfo('template_url'); ?>./src/assets/images/icon-menu.svg"></use>
          </svg> -->
            <div class="svg-menu" width="40" height="40" aria-label="Mobile menu switch">
            <img class="icon-cross" href="<?php bloginfo('template_url'); ?>./src/assets/images/icon-cross.svg">
            <img class="icon-menu" href="<?php bloginfo('template_url'); ?>./src/assets/images/icon-menu.svg">
          </div>
        </button>
    </div>
  </nav>
 </header>
