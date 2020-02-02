<!-- appointment section -->
<section id="appointment" class="appointment-section lightBg">
    <div  class="flex">
        <?php 
        $image = get_field('cb_image');
        // dump($image);
        ?>
        <img src="<?php echo $image['sizes']['appointment-image']; ?>" alt="<?php bloginfo('name'); ?>" class="appointment-container">
        <?php echo do_shortcode(get_field('cb_form_shortcode')); ?>
    </div>
</section>