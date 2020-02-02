<!-- page footer -->
<footer class="lightBg">
    <div class="container text-center">
        <?php
        $image = get_field('fo_logo', 'option');
        ?>
        <img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>">
        <div>

            <?php
            $menu_settings = [
                    'menu_class' => "flex flex-center flex-wrap",
                    'container' => false,
                    'theme_location' => 'footer-navigation',
                    'walker' => new Custom_navwalker()  //prideda prie a ir li elementu klases
            ];
            wp_nav_menu($menu_settings);
            ?>
        </div>
        <div class="footer-icons">
            <?php
            if(have_rows('fo_icon', 'options')):
                while(have_rows('fo_icon', 'options')):
                    the_row();
                    ?>
                    <!-- HTML KODAS KURIS KARTOJASI -->
                    <?php
                        $link = get_sub_field('link');
                        if($link['target']){
                            $target='target="_blank"';
                        }
                    ?>
                   <a href="<?php echo $link['url']; ?>" <?php echo $target ?? ''; ?>> <i class="fab <?php the_sub_field('icon'); ?>"></i></a>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</footer>