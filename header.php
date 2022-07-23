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
    <div class="wrapper">
        <header class="header container">
          <div class="nav-title">
            <a href="./index.php" class="logo"><?php the_field('name_company')?></a>
            <div class="header__burger">
              <span></span>
            </div>
            <nav class="navigation">
              <ul class="site-nav list">
                <li class="item">
                  <a href="./index.php" class="link current" rel="noreferrer noopener">Home</a>
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
                  data-menu-button>Contact us
                </button>
              </li>
            </ul>
          </nav>
        </div>
      </header>
