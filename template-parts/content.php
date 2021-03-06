<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nokap_ourtown_remake
 */


$category = get_the_category(); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-5 ms-3 gy-2  post-shadows'); ?>>
	<a href="<? the_permalink();?>">
	
		<?php the_post_thumbnail('full' , array('class' => 'img-fluid'));
		?> <p class = "latest-post-category ms-2 mt-2"><?php echo $category[0]->name ?></p>
		<?php	if (is_singular()) : 
					the_title( '<h1 class=" ms-2 latest-post-title">', '</h1>' );
		    

			else :
					?> <h1><? the_title();?></h1><?
			endif;?>
		<div class="ms-2 latest-post-excerpt">
			<?
			if(has_excerpt())
			{
				echo get_the_excerpt();
			}
			else
			{
				echo wp_trim_words(get_the_content(), 18);
			}
			?>
		</div> 
	</a>
</article><!-- #post-<?php the_ID(); ?> -->