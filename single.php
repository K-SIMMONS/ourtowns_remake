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
		
		
		<main class ="container-fluid main">
			<article>

				<header class="mb-4 mt-4">

				
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
								echo get_avatar( get_the_author_email(), 55, '', '', $args);
								?>
							</div>
				
							<div class="d-flex flex-column">
								<span class="posted-on">Posted on <?php the_time('M j, Y');?></span>
								<span class="posted-on posted-by">By <?php the_author_posts_link(); ?></span>
							</div>
						</div>
				
				</header>

				<div class="container-fluid p-0">
					<div class="row justify-content-start">
						<div class = "col-lg-7 single-post-col-left">
							<div class="mb-3">
								<?php the_post_thumbnail('full', array('class' => 'img-fluid mb-3')); ?>
								<p class="image-credit-text"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
							</div>

						<div class="single-body-text">
						<?php the_content();?>
						</div>

						<div> <!-- Bottom section -->

							<div class="d-flex topic-container">
								<p class="mb-0 topic-title">TOPICS: </p>
								<div class="d-flex flex-wrap">
									<?php
									foreach ($category as $item)
									echo '<a class = "topics-bottom" href="' . get_category_link($item->term_id) . '">' . $item->name . '</a>';
									?>
								</div>
							</div>
							
							<div class="button-container">
								<a class="back-button" href="<?php echo home_url(); ?>">BACK</a>
							</div>


						</div>
					</div> <!-- col -->

					<div class="col me-auto"> <!-- Sidebar -->
						<?php get_template_part( 'single-page-sidebar' ); ?>
					</div>

				</div> <!-- row -->
			</div> <!-- container -->
		</article>
	</main>
		
		
		<?php    
	endwhile;
endif;



wp_reset_postdata();


get_footer();
?>