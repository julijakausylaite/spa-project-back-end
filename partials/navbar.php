<!-- navigation block -->	
<nav class="main-nav">
    <div class="container flex align-center">
        <div class="head-nav-column">
            <?php 
            $image = get_field('ho_logo_image','option');
            // dump($image);
            ?>
            <a href="#home"><img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>"></a>
        </div>
        <div class="head-nav-column">
            <i class="fas fa-bars burger-menu-icon"></i>
            <?php
            $menu_settings = [
                    'menu_class' => "menu flex nav-links flex-between",
                    'container' => false,
                    'theme_location' => 'primary-navigation',
                    'walker' => new Custom_navwalker()  //prideda prie a ir li elementu klases
            ];
            wp_nav_menu($menu_settings);
            ?>
        </div>
    </div>
</nav>