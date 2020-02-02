<!-- contacts section -->
<section id="contacts" class="contacts text-center section-padding">
    <div  class="container">
        <h2><?php the_field('cub_section_heading'); ?></h2>
        <div class="section-title">
            <?php the_field('cub_section_description'); ?>
        </div>
        <div class="flex flex-wrap flex-center">
            <div class="contacts-box">
                <?php
                    $link = get_sub_field('cub_adress_link');
                    if($link['target']){
                        $target='target="_blank"';
                    }
                ?>
                <a href="<?php echo $link['url']; ?>" <?php echo $target ?? ''; ?>>
                    <div class="flex contacts-with-icons">
                        <span class="flex circle-icon pinkBg"><i class="fas fa-map-marked-alt"></i></span>
                            <div>
                            <p><?php the_field('cub_adress_street'); ?></p>
                            <p><?php the_field('cub_adress_town'); ?></p>
                        </div>
                    </div>
                </a>
                <div class="flex contacts-with-icons">
                    <span class="flex circle-icon pinkBg"><i class="far fa-envelope"></i></span>
                    <div>
                        <?php
                        if(have_rows('cub_email_repeater')):
                            while(have_rows('cub_email_repeater')):
                                the_row();
                                // Repeater lauku iskvietimas
                                // the_sub_field('lauko_pavadinimas'); - reiksme spausdina
                                // get_sub_field('lauko_pavadinimas'); - reiksme grazina
                                ?>
                                <!-- HTML KODAS KURIS KARTOJASI -->
                                <a href="mailto:<?php the_sub_field('email'); ?>">
                                    <p><?php the_sub_field('email'); ?></p>
                                </a>
                                <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="flex contacts-with-icons">
                    <span class="flex circle-icon pinkBg"><i class="fas fa-mobile-alt"></i></span>
                    <div>
                    <?php
                        if(have_rows('cub_phone_repeater')):
                            while(have_rows('cub_phone_repeater')):
                                the_row();
                                // Repeater lauku iskvietimas
                                // the_sub_field('lauko_pavadinimas'); - reiksme spausdina
                                // get_sub_field('lauko_pavadinimas'); - reiksme grazina
                                ?>
                                <!-- HTML KODAS KURIS KARTOJASI -->
                                <a href="tel:<?php 
                                        $tel = get_sub_field('phone');
                                        $tel = str_replace(' ','',$tel);
                                        echo $tel;
                                    ?>">
                                    <p><?php the_sub_field('phone'); ?></p>
                                </a>
                                <?php
                            endwhile;
                        endif;
                        ?>
                        <!-- <a href="tel:+02 365 2365 3265 (02)">
                            <p>+02 365 2365 3265 (02)</p>
                        </a>
                        <a href="tel:+02 365 2365 3265 (04)">
                            <p>+02 365 2365 3265 (04)</p>
                        </a> -->
                        
                    </div>
                </div>
            </div>
            <div class="contacts-box">
                <?php 
                    echo do_shortcode(get_field('cub_contact_shortcode'));
                ?>
            </div>
        </div>
    </div>
</section>