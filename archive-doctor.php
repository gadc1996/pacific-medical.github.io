<?php include('functions/renders.php'); ?>

<?php get_header();?>
<!--Inicia imagen destacada-->
<section class="featured-image">
</section>
<!--Termina Imagen destacada -->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderDoctorsTitle(single_cat_title( '', false ));
				while(have_posts()){
					the_post();
		?>
			<div class="doctor-card">
			<div class="header">
				<img class="doctor-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
				<h2 class="doctor-name"><?php the_title(); ?></h2>		
			</div>	
			<div class="doctor-info"><?php the_content(); ?></div>
			</div>
		<?php
				}		
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->




<?php get_footer();?>