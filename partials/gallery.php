<!-- gallery section -->
<section id="gallery" class="gallery text-center section-padding lightBg">
    <h2><?php the_field('gb_section_heading'); ?></h2>
    <div id="buttons">
    </div>
    
    <div class="container flex flex-wrap flex-center">

        <?php
        $uzklausos_parametrai = [
            'post_type' => 'zm_gallery',
            'posts_per_page' => get_field('gb_limit')
        ];
        // 

        $result = new WP_Query($uzklausos_parametrai);

        if($result->have_posts()):
            while($result->have_posts()):
                $result->the_post();
                // dump($result);
                // echo $result['query_vars']['posts_per_page'];
                ?>
                <!-- HTML KODAS KURIS KARTOJASI -->
                <?php
                $images = get_field('gallery');
                // dump($images);
                ?>

                <?php foreach( $images as $image ): ?>
              
                    <a data-fancybox="gallery1" class="gallery-img col" data-tags="<?php the_title(); ?>"  href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['sizes']['gallery-image']; ?>" alt="<?php bloginfo(); ?>">
                    </a>
			    <?php endforeach; ?>
                
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>

    </div>
</section>