<?php require_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <h1 class="title capitalize"><?php the_title(); ?></h1>

    <div class="position">
    	<?php echo get_post_meta( $post->ID, 'position', true ); ?> 
    </div>

    <div class="row bio">
    	<div class="col-xs-3">
    		<div class="picture">
    			<?php echo get_first_image( get_the_ID(), true, array( 150, 92 ) ); ?>
    		</div>
    	</div>
    	<div class="col-xs-9">
    		<?php the_content(); ?>
    	</div>
    </div>
<?php endwhile; else: endif; ?>
                        
<?php include_once( 'partials/footer.php' ); ?>