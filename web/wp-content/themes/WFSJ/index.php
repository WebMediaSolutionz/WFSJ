<?php require_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if ( is_page( 5 ) || is_page( 18 ) || is_page( 20 ) || is_page( 22 ) || is_page( 24 ) ) { ?>
	<div class="col-sm-offset-1 col-sm-10 post-content">
	<?php } else if ( is_page( 7 ) || is_page( 10 ) ) { ?>
	<div class="col-sm-offset-1 col-sm-10 post-content">
	<?php } else if ( is_page( 28 ) || is_page( 30 ) || is_page( 32 ) || is_page( 34 ) ) { ?>
	<div class="col-sm-8 post-content">
	<?php } else { ?>
	<div class="post-content">
	<?php } ?>
		<?php the_content(); ?>
	</div>
<?php endwhile; else: endif; ?>
						
<?php include_once( 'partials/footer.php' ); ?>