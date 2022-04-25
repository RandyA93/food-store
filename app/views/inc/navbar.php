<div id="Header_wrapper">
    <header id="Header">        
        <div id="Top_bar">
            <div class="container">
                <div class="column one">
                    <div class="top_bar_left clearfix">
                        <!-- Logo -->
                        <div class="logo">
                            <a id="logo" href="<?php echo URLROOT; ?>" title="BeEcoFood - BeTheme" data-height="100" data-padding="20"><img class="logo-main scale-with-grid" src="<?php echo URLROOT; ?>/images/logo_white_@1x.png" data-retina="<?php echo URLROOT; ?>/images/logo_white_@2x.png" data-height="117" data-no-retina /><img class="logo-sticky scale-with-grid" src="<?php echo URLROOT; ?>/images/logo-sticky.png" data-retina="<?php echo URLROOT; ?>/images/logo-sticky.png" data-height="27" data-no-retina /><img class="logo-mobile scale-with-grid" src="<?php echo URLROOT; ?>/images/logo-sticky.png" data-retina="<?php echo URLROOT; ?>/images/logo-sticky.png" data-height="27" data-no-retina /><img class="logo-mobile-sticky scale-with-grid" src="<?php echo URLROOT; ?>/images/logo-sticky.png" data-retina="<?php echo URLROOT; ?>/images/logo-sticky.png" data-height="27" data-no-retina /></a>
                        </div>
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul id="menu-menu" class="menu menu-main">
                                    <li <?php echo ($data["title"] == "home") ? 'class="current-menu-item"' : '' ?>>
                                        <a href="<?php echo URLROOT; ?>"><span>Home</span></a>
                                    </li>
                                    <li <?php echo ($data["title"] == "about") ? 'class="current-menu-item"' : '' ?>>
                                        <a href="<?php echo URLROOT; ?>/pages/about"><span>About us</span></a>
                                    </li>
                                    <li <?php echo ($data["title"] == "products") ? 'class="current-menu-item"' : '' ?>>
                                        <a href="<?php echo URLROOT; ?>/pages/products"><span>Products</span></a>
                                    </li>
                                </ul>
                            </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            if($data["title"] == "home") {
                require APPROOT . "/views/inc/slider.php";
            } else {
                require APPROOT . "/views/inc/subheader.php";
            }
        ?>
    </header>
</div>