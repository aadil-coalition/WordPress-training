<!DOCTYPE html>
<html <?php language_attributes(); ?> 
style="margin-top: 0 !important;">

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php   wp_head(); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <!-- <h1 class="sgh-header"> <a href="<?php //echo get_home_url(); ?>">
      <img src="<?php //echo get_theme_file_uri('/images/SGH_logo_rgb.png'); ?>" alt="website logo">
      </a></h1> -->
      <!-- <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  -->
            <?php 
      $menuArr = wp_get_nav_menu_items('compnay');

      $menuArr = array_chunk($menuArr, floor(sizeof($menuArr)/2));

      echo "<pre>";
      //  print_r($menuArr);
      echo "</pre>";
      ?>
    <!-- <nav> 
          <ul>
            <?php 
              //   $menuArr = wp_get_nav_menu_items('compnay');
              //    $i = 0;
              //   while($menuArr) {
              //     $menuItem = array_shift($menuArr); 
              //     ?>
              //     <li><a href="<?php //echo $menuItem->url; ?>"><?php //echo $menuItem->title; ?></a></li>
              //     <?php
              // }
            ?>
          </ul>
      </nav> -->


      <!-- <form class="my-form" action="#">
        <label for="search"></label>
        <input type="text" id="search">
      </form> -->



    <body <?php body_class();  ?> >


    <header class="sgh-header-container">

            <div class="desktop-nav">
                <nav>
                    <ul>
                        <?php
                          $i = 0;
                          while($menuArr[0][$i]) {
                            ?>
                            <li><a class="sgh-header-menu-item-link" href="<?php echo $menuArr[0][$i]->url; ?>"><?php echo $menuArr[0][$i]->title; ?></a></li>
                            <?php
                            $i++;
                          }
                        ?>
                    </ul>
                    <h1 class="sgh-header"> <a class="sgh-header-menu-item-link" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_theme_file_uri('/images/SGH_logo_rgb.png'); ?>" alt="website logo">
                      </a>
                    </h1>
                    <ul>
                    <?php
                          $i = 0;
                          while($menuArr[1][$i]) {
                            ?>
                            <li><a class="sgh-header-menu-item-link" href="<?php echo $menuArr[1][$i]->url; ?>"><?php echo $menuArr[1][$i]->title; ?></a></li>
                            <?php
                            $i++;
                          }
                        ?>
                    </ul>
                </nav>

              <form class="my-form" action="#">
                <label for="search"></label>
                <input placeholder="SEARCH" type="text" id="search">
              </form>
            </div>            

            <div class="mobile-nav">
              <h1 class="sgh-header"> <a class="sgh-header-menu-item-link" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_theme_file_uri('/images/SGH_logo_rgb.png'); ?>" alt="website logo">
                </a>
              </h1>
              <div class="hamburger-lines">
                  <span class="line line1"></span>
                  <span class="line line2"></span>
                  <span class="line line3"></span>
              </div>
            </div>
            <nav class="display-none">
                <ul>
                  <?php 
                    $menuArr = array_merge($menuArr[0], $menuArr[1]);
                    // echo "<pre>";
                    // echo print_r($menuArr);
                    // echo print_r($menuArr[1]);
                    // echo "</pre>";
                    $i = 0;
                    while($menuArr[$i]) {
                      ?>
                      <li><a class="sgh-header-menu-item-link" href="<?php echo $menuArr[$i]->url; ?>"><?php echo $menuArr[$i]->title; ?></a></li>
                      <?php
                      $i++;
                    }
                  ?>
                </ul>
              </nav>
    </header>

    <div class="showcase">
      <img loading="lazy" class="header-background" src="<?php echo get_theme_file_uri('/images/Vertical Line.png'); ?>" alt="image of clear ocean on a sunny day">
      <div>
      <h2>building a world</h2>
      <h2>that's always advancing</h2>
      </div>
    </div>
