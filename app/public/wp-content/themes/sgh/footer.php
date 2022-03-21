<?php 
    $menuArr = wp_get_nav_menu_items('Footer');
    // declare an array
    $subMenuArr = array();
    $subSubMenuArr = array();
    $parentMenuArr = array();
    // loop through menuArr and push all submenu items into subMenuArr
    foreach($menuArr as $menuItem) {
      if($menuItem->menu_item_parent) {
        array_push($subMenuArr, $menuItem);
      }
    }
    // loop throut subMenuArr and push all sub submenu items into subSubMenuArr
    foreach($subMenuArr as $subMenuItem) {
      foreach($menuArr as $menuItem) {
        if($menuItem->menu_item_parent == $subMenuItem->ID) {
          array_push($subSubMenuArr, $menuItem);
        }
      }
    }
    // remove all the sussubmenu array from subMenu arr
    foreach($subSubMenuArr as $subSubMenuItem) {
      foreach($subMenuArr as $key => $subMenuItem) {
        if($subSubMenuItem->ID == $subMenuItem->ID) {
          unset($subMenuArr[$key]);
        }
      }
    }
    // loop through menu arr and push all non-submenu items into parentMenuArr
    foreach($menuArr as $menuItem) {
      if(!$menuItem->menu_item_parent) {
        array_push($parentMenuArr, $menuItem);
      }
    }

    // echo "<pre>";
    // print_r($parentMenuArr);    
    // print_r($subMenuArr);
    // print_r($subSubMenuArr);
    // echo "</pre>";
?>

<footer> 
    <h5> <img src="<?php echo get_theme_file_uri('/images/SGH_logo_rgb copy-1.png') ?>" alt="company logo"></h5>
    <ul class="footer-list">
        <?php 
        //loop thorug parent menu array
        // echo "<pre>";
        // print_r($parentMenuArr);
        // echo "</pre>";
        $counter = 0;
        foreach($parentMenuArr as $menuItem) {
            //loop through submenu array
            // display parentmenu item ?>
                
                <li class="footer-list-item">
                <h5> <a class="sgh-header-menu-item-link" href="<?php echo $menuItem->url ?>"> <?php echo $menuItem->title; ?> </a>  <i class="fa-solid fa-minus display-none"></i>  <i class="fa-solid x<?php echo $counter ?> fa-plus"></i></h5>
                <ul class="sub-footer-list x-<?php echo $counter ?>">
            <?php
            
            foreach($subMenuArr as $subMenuItem) {
                //if parent menu item id matches submenu item parent id
                if($menuItem->ID == $subMenuItem->menu_item_parent) {
                    ?>
                     <li><a class="sgh-header-menu-item-link" href="<?php $subMenuItem->url ?>"><?php echo $subMenuItem->title ?></a></li>
                    <?php
                    // loop throug subsubmenu and check if it has parentof submenuitem
                    foreach($subSubMenuArr as $subSubMenuItem) {
                        if($subMenuItem->ID == $subSubMenuItem->menu_item_parent) {
                            ?>
                            <li class="sub-sub-list-item"><a class="sgh-header-menu-item-link" href="<?php echo $subSubMenuItem->url ?>"><?php echo $subSubMenuItem->title ?></a></li>
                            <?php
                        }
                    }
                }
            }
            ?>
                    </li>
                </ul>
           <?php
            $counter++;
        }
        ?>
    </ul>
      <div class="terms-condition">
          <p> Privacy policy | Terms of use</p>
          <!-- copyright symbol in html -->
          <p> &#169; Copyright <?php echo get_the_date('Y') ?> Samrt Global Holdings Inc. All rights reserved. </p>
        </div>
        </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>