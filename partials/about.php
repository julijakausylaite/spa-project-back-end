<!-- about section -->
<section id="about" class="about text-center section-padding">
    <div class="container">
        <?php 
        $image = get_field('ab_image');
        // dump($image);
        ?>
        <img src="<?php echo $image['sizes']['logo1']; ?>" alt="<?php bloginfo('name'); ?>">
        <h2><?php the_field('ab_heading'); ?></h2>
        <?php the_field('ab_description'); ?>
        <?php
            $link = get_field('ab_button');
            if($link['target']){
                $target='target="_blank"';
            }
        ?>
        <a class="pink-button" href="<?php echo $link['ur'] ?>" <?php echo $target2 ?? ''; ?>><?php echo $link['title']; ?></a>
    </div>
</section>