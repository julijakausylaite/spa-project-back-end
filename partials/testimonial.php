<!-- testimonial section -->
<section id="testimonial" class="testimonial text-center lightBg section-padding">
    <div class="container owl-carousel owl-theme">

        <?php
        $uzklausos_parametrai = [
            'post_type' => 'testimonial',
            'posts_per_page' => get_field('tb_limit')
        ];

        $result = new WP_Query($uzklausos_parametrai);

        if($result->have_posts()):
            while($result->have_posts()):
                $result->the_post();
                ?>
                <!-- HTML KODAS KURIS KARTOJASI -->
                <div class="item">
                    <i class="fas fa-quote-right pink-text"></i>
                    <?php the_content();
                    ?>
                    <div class="circle-image">
                        <img src="<?php the_post_thumbnail_url('testimonial-image'); ?>" alt="<?php bloginfo(); ?>">
                    </div>
                    <h4>
                        <?php the_field('name'); ?>, <span><?php the_field('date'); ?></span></h4>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
            
    </div>
</section>