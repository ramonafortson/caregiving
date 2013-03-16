<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			
            
            <div class="facebook-bx">
            	
                <iframe src=				     "//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&amp;width=295&amp;height=297&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:295px; height:297px;" allowTransparency="true">
                </iframe>
                
            </div>
           
           	
         <?php if(is_page(array(9))); { ?>
            <div class="vaccation-box">
				
				<?php 
                $page_id = 62; 
                $page_data = get_page( $page_id );
                
                echo '<h3>'. $page_data->post_title .'</h3>';
                
                echo apply_filters('the_content', $page_data->post_content);
                ?>                
           
            </div>
          
          <?php  }?>
            
            <div class="testimonal-box">         
				<div class="said">
					<div class="why-uss">
						<div class="float_l why-inner"><span>What People Say&acute;s</span></div>
						<?php global $wpdb,$wp_query;
							$testimonial = $wpdb->get_results("select text_full,clientname from wp_testimonials"); ?>
							<div class="slider-outer">
								<div id="slider">
									<ul>	
									<?php foreach($testimonial as $monial){
										echo "<li><div class='testimonial'><span class='invetted-top'></span>".$monial->text_full."<span class='invetted-bottom'></span></div>";
										echo "<div class='director'>".$monial->clientname."</div></li>";
										}
									?>
									</ul>
								</div>
							</div>
					</div>
				</div>
              
           </div>   
            
		</div><!-- #secondary -->
	<?php endif; ?>