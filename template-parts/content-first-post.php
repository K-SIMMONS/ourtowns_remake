<?php $category = get_the_category(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('postOne report-shadow');?>>
	<a href="<? the_permalink();?>">
        <?php the_post_thumbnail('full' , array('class' => 'img-fluid'));
        ?> <p class = "latest-post-category-big ms-4 mt-3"><?php echo $category[0]->name ?></p>
		<?php	if (is_singular()) :
			    the_title( '<h1 class="latest-post-title col-padding">', '</h1>' );
			else :
				?> <h1><? the_title();?></h1><?
			endif;?>
		<div class="latest-post-excerpt col-padding single-big-col-excerpt">
			<?php 
			if(has_excerpt())
			{
				echo get_the_excerpt();
			}
			else
			{
				echo wp_trim_words(get_the_content(), 40);
			}?>
		</div> 
	</a>
</article> <!-- #post-<?php the_ID(); ?> -->