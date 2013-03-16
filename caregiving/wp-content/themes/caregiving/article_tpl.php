<?php
/**
 * Template Name: article

 */

get_header(); ?>


	<div id="primary" class="site-content">
		<div id="content" role="main">
        
    	<?php 
		global $post;
		query_posts('post_type=article' );
		if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
            
			<?php while ( have_posts() ) : the_post(); ?>
            
            <article>
            
            <div class="images"> <?php the_post_thumbnail( $size, $attr ); ?> </div>
			<div class="blog-data">
			<h2><?php the_title(); ?></h2>
             
           <p> <?php content (55, __('.....{ Read more }')); ?>  <p>
          	
            <div class="share">
            
           		<h4>Share this Article</h4><?php echo do_shortcode('[hupso]');?>
           
           </div>
           
            </div>
            </article><!-- #post-0 -->
            
             <?php endwhile; ?>


		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>