<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nokap_ourtown_remake
 */

get_header();
?>
 <div class = "container-fluid p-0">
	<div class = "row">
		<div class = "col-12 col-md-7 single-post-col-left">
			
		</div>
	</div>



	</div>
	<?php the_content();?>

<?php
get_sidebar();
get_footer();
