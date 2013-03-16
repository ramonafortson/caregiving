<?php
/**
 * Template Name: discus

 */

get_header(); ?>


	<div id="primary" class="site-content">
		<div id="content" role="main">
        
    	<?php 
		global $post;
		query_posts('post_type=discus' );
		if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            
            <div class="discus-box">
            
            <div class="discus"> <?php the_post_thumbnail( $size, $attr ); ?> </div>
			<div class="discus-data">
			<h2><?php the_title(); ?></h2>
             <?php wp_list_comments(); ?> 
            <?php the_content(); ?>
            </div>
             <?php comment_form(); ?> 
             
             </div>
            
			<?php endwhile; ?>


			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>