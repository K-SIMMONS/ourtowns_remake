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

<div class="container mt-5 mb-5">
<?php 
	$category = get_the_category();
	echo '<a class="single-category-text" href="' . esc_url( get_category_link( $categories[0]->term_id) ) . '">'
	 . $category[0]->name . '</a>'; ?>
        <h1 class="single-page-title mt-4"><?php the_title();?></h1>
        <hr class="title-hr">
    </div>

 <div class = "container">
	 <div class="row justify-content-between">
		<div class = "col-lg-8 col-md-7">
			<?php the_content();?>
		</div>
	</div>
</div>


<?php
// get_sidebar();
get_footer();
