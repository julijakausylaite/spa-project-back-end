<!-- home section -->
<section id="home" class="home">
    <?php 
        $image = get_field('hb_background_image');
        // dump($image);
    ?>
    <div class="background-home" style='background-image: url(<?php echo $image['sizes']['1536x1536']; ?>);'></div>
    <div class="container flex flex-direction-column">
        <div class="small-container">
            <div class="pink-text rufina-font">
                <?php the_field('hb_name'); ?>
            </div>
            <h1><?php the_field('hb_heading'); ?></h1>
            <?php the_field('hb_description'); ?>
            <div class="home-columns flex">
                <?php
                $link1 = get_field('hb_button1');
                $link2 = get_field('hb_button2');
                if($link1['target']){
                    $target1='target="_blank"';
                }
                if($link2['target']){
                    $target2='target="_blank"';
                }
                ?>
                <a href="<?php echo $link1['url']; ?>" <?php echo $target1 ?? ''; ?> class="home-buttons pink-sharp-button"><?php echo $link1['title']; ?><i class="fas <?php the_field('hb_button1_icon'); ?>"></i></a>
                <a href="<?php echo $link2['url']; ?>" class="home-buttons play-button" <?php echo $target2 ?? ''; ?>><i class="fas <?php the_field('hb_button2_icon'); ?> pink-text"></i><?php echo $link2['title']; ?></a>
            </div>
        </div>
    </div>

    
</section>