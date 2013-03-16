<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
    </div><!-- #page -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
        	
            <h3>Site Info</h3>
		
            <div class="footer-box">
    
				<?php if ( is_active_sidebar( 'footer' ) ) : ?>
                        <?php dynamic_sidebar( 'footer' ); ?>
                <?php endif; ?>        

            </div>
            
            <p>&copy; 2013 All rights reserved.</p>
            
		</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>