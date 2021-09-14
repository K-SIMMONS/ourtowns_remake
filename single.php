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

<?
if( have_posts() ):
    while( have_posts() ):
        the_post();
		?>
		<header class="container mt-5 mb-5">
			
		<?php 

			$category = get_the_category();
			echo '<a class="single-category-text" href="' . get_category_link($category[0]->term_id) . '">'
			 . $category[0]->name . '</a>'; ?>
				<h1 class="single-page-title my-4"><?php the_title();?></h1>
				<hr class="title-hr mb-4">
				<div class="d-flex">
					<div>
						<?php 
						$args = array(
							'class' => 'avatar-radius'
						);
						echo get_avatar( 'srussell@alphaworks.tech', 55, '', '', $args);
						?>
					</div>
		
					<div class="d-flex flex-column">
						<span class="posted-on">Posted on <?php the_time('M j, Y');?></span>
						<span class="posted-on posted-by">By <?php the_author_posts_link(); ?></span>
					</div>
				</div>
		
		</header>
		
		<main>

			 <div class = "container">
				 <div class="row justify-content-between">
					<div class = "col-lg-7 single-post-col-left">
						<div class="mb-3">
                			<?php the_post_thumbnail('full', array('class' => 'img-fluid mb-3')); ?>
							<p class="image-credit-text"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
						</div>

						<div class="single-body-text">
						<?php the_content();?>
						</div>
					</div> <!-- col -->

					<div class="col-lg-4">
						<?php get_template_part( 'single-page-sidebar' ); ?>
					</div>

				</div> <!-- row -->
			</div> <!-- container -->

		</main>
		
		
		<?php    
	endwhile;
endif;

get_footer();
?>