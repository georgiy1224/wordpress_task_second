<?php
/**
 * Template Name: Home Template
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		<center>
		<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
		</center>
	<img src="<?php echo bloginfo('template_directory') . '/images/after_slider.jpg';?>"  alt="" />		
	<div id="main_area">
	    <div id="contact2">
			<div id="contact_form">
			<?php echo do_shortcode('[contact-form-7 id="29" title="main page"]'); ?>	
			</div>
		
		</div>
		<div id="usefull">
			<div id="usefull_inner">
				<?php //dynamic_sidebar( 'usefull_links' ); ?>
				<?php
$curID = '51';
 
query_posts(
    array(
        'post_type'=>'page',
        'post_parent'=>$curID,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    )
);
 
echo '<ul>';
    while ( have_posts() ) : the_post();
        echo '<li><a href="'.get_permalink().'"> - '.get_the_title().'</a></li>';
    endwhile;
echo '</ul>';
 
wp_reset_query();
?>
			</div>
			
		   <?php wp_reset_query(); ?> 
		</div>
		<div id="about">
				<div id="about_text">
					<?php $id=6; $post = get_page($id); $content = apply_filters('the_content', $post->post_content); echo $content;  ?>
				</div>
				<div id="more_info"><a href="<?php echo get_permalink('6'); ?>"><img src="<?php echo bloginfo('template_directory') . '/images/more_info.png';?>"  alt="" /></a></div>
		</div>
			
	</div>
	<div class="clear"></div>
	<?php 		
		$frontpage_id = get_option('page_on_front');
		$link_rec = get_post_meta($frontpage_id, 'link_rec', TRUE);
	?>
	<div id="recognition">

		<div id="rec4"><a href="<?php echo $link_rec; ?>"><div></div></a></div>
		<div id="rec3"><a href="<?php echo $link_rec; ?>"><div></div></a></div>
	</div>


<?php get_footer(); ?>
