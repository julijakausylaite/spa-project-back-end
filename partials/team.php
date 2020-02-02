<!-- team section -->
<section id="team" class="team-section text-center section-padding">
    <div  class="container">
        <h2><?php the_field('tb_section_heading'); ?></h2>
        <div class="section-title">
            <?php the_field('tb_section_description'); ?>
        </div>
        <div class="flex flex-center flex-wrap">

            <?php
            if(have_rows('tb_team_members_repeater')):
                while(have_rows('tb_team_members_repeater')):
                    the_row();
                    ?>
                    <!-- HTML KODAS KURIS KARTOJASI -->
                    <div class="team flex-column"> 
                        <?php 
                        $image = get_sub_field('image');
                        // dump($image);
                        ?>
                        <img src="<?php echo $image['sizes']['team-image']; ?>" alt="<?php bloginfo('name'); ?>">
                        <div class="team-member-info">
                            <h3><?php the_sub_field('name'); ?></h3>
                            <?php the_sub_field('position'); ?>
                            <div class="team-member-icons">
                                <?php
                                if(have_rows('icons_repeater')):
                                    while(have_rows('icons_repeater')):
                                        the_row();
                                        ?>
                                        <!-- HTML KODAS KURIS KARTOJASI -->
                                        <?php
                                            $link = get_sub_field('link');
                                            if($link['target']){
                                                $target='target="_blank"';
                                            }
                                        ?>
                                        <a href="<?php echo $link['url']; ?>" <?php echo $target ?? ''; ?>><i class="fab <?php the_sub_field('icon'); ?>"></i></a>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>