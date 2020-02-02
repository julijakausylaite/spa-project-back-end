<?php get_header(); ?>

<?php
if(have_posts()):
	while(have_posts()):
		the_post();
		?>
        <!-- HTML KODAS KURIS KARTOJASI -->
        <!-- home section -->
		<section id="home" class="single-home text-center">
            <div class="background-home" style='background-image: url(<?php the_post_thumbnail_url('1536x1536'); ?>);'></div>		
            <div class="background-home-overlay"></div>	
			<div class="container flex flex-direction-column">
                <h1><?php the_title(); ?></h1>
            </div>
		</section>

		<!-- about section -->
		<section id="about" class="about text-center section-padding">
			<div class="container">
                <?php the_content(); ?>
			</div>
		</section>
		<?php
	endwhile;
endif;
?>
<?php get_footer(); ?>