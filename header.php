<!DOCTYPE html>
<html lang="en">
  <head>

<meta charset="UTF-8" />
<!-- <link rel="stylesheet" href="/dist/assets/css/style.min.css" /> -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap"
  rel="stylesheet"
/>

<!-- Useful meta tags -->
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
<body>
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
    </div>
  </nav>
 </header>
