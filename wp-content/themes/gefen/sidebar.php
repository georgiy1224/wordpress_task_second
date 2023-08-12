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
		
		<div id="secondary" class="widget-area" role="complementary">
			<?php //dynamic_sidebar( 'sidebar-1' );
				if (get_the_ID()==50){
			?>
            <div id="contact_sidebar_english">
            	<div id="contact_form_english">

					 <?php echo do_shortcode('[contact-form-7 id="368" title="main page_copy"]');?>
            	 </div>
			</div>
        </div><!-- #secondary -->
             <?php		
			}
			else{
			?>
            <div id="contact_sidebar">
            	<div id="contact_form">
					 <?php echo do_shortcode('[contact-form-7 id="29" title="main page"]');?>
            	 </div>
			</div>
            <div id="rec_sidebar">
                <div id="rec_sidebar_inner">
                    <?php dynamic_sidebar( 'recommendations' ); ?>
                </div>
            </div>
		</div><!-- #secondary -->
		<?php
        }
        ?>	
