<?php require_once( 'config.php' ); ?>
<?php include_once( 'partials/header.php' ); ?>

<?php $count = 0; ?>
<div class="row team">
    <?php $the_query = new WP_Query( "cat=2" ); ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
        <?php $count++; ?>
        <div class="col-sm-3">
            <div class="team_member">
                <a class="picture" href="<?php the_permalink(); ?>">
                    <?php echo get_first_image( get_the_ID(), true, array( 150, 92 ) ); ?>
                </a>

                <div class="details">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                
                    <div class="excerpt">
                        <?php echo ( strlen( $post->post_content ) > 60 ) ? substr( $post->post_content, 0, 57 ) . "..." : $post->post_content; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if ( $count % 4 == 0 ) { ?>
            </div>
            <div class="row team">
        <?php } ?>
    <?php endwhile; ?>  
</div>
<?php wp_reset_postdata(); ?>
                        
<?php include_once( 'partials/footer.php' ); ?>