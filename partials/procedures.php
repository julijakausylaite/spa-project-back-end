<!-- procedures section -->
<section id="procedures" class="procedures text-center section-padding">
    <div  class="container">
        <h2><?php the_field('pob_section_heading'); ?></h2>
        <div class="section-title">
            <?php the_field('pob_section_description'); ?>
        </div>
        <div class="flex flex-center flex-wrap">

            <?php
            $uzklausos_parametrai = [
                'cat' => get_field('pob_post_category'),
                'posts_per_page' => get_field('pob_limit')
            ];

            $result = new WP_Query($uzklausos_parametrai);

            if($result->have_posts()):
                while($result->have_posts()):
                    $result->the_post();
                    ?>
                    <!-- HTML KODAS KURIS KARTOJASI -->
                    <div class="flex-column border">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('block-image'); ?>" alt="<?php the_title(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </a>
                        <a class="dark-button" href="<?php the_permalink(); ?>"><?php _e('Read More', 'vcs-starter') ?></a>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>

            <!-- <div class="flex-column border">
                <img src="assets/imagecompressor/procedures1.jpg" alt="procedure">
                <h3>Massage Therapy</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, aliquid, voluptates officia voluptatem quisquam nisi, perferendis laboriosam cumque laborum beatae at qui repellat possimus. Magnam impedit incidunt ullam debitis nemo!</p>
                <a class="dark-button" href="#">Read More</a>
            </div>
            <div class="flex-column border">
                <img src="assets/imagecompressor/procedures2.jpg" alt="procedure">
                <h3>Beauty Care</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, aliquid, voluptates officia voluptatem quisquam nisi, perferendis laboriosam cumque laborum beatae at qui repellat possimus. Magnam impedit incidunt ullam debitis nemo!</p>
                <a class="dark-button" href="#">Read More</a>
            </div>					
            <div class="flex-column border">
                <img src="assets/imagecompressor/procedures3.jpg" alt="procedure">
                <h3>Executive Reflexology</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, aliquid, voluptates officia voluptatem quisquam nisi, perferendis laboriosam cumque laborum beatae at qui repellat possimus. Magnam impedit incidunt ullam debitis nemo!</p>
                <a class="dark-button" href="#">Read More</a>
            </div> -->
        </div>
    </div>
</section>
