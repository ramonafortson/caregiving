<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
            
            <div class="article-data">
            	
                <div class="images">
                	
                     <?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
                    
                </div>
				
                <div class="blog-data sub">
                	
                    <h2><?php echo get_the_title(); ?></h2> 
                    	
					<?php the_content(); ?>
                
                </div>
                
				</div> 
				
              
                
				<?php  comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>