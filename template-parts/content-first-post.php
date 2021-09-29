
<article id="post-<?php the_ID(); ?>" <?php post_class('postOne report-shadow');?>>
	<a href="<? the_permalink();?>">
        <?php the_post_thumbnail('full' , array('class' => 'img-fluid'));
			if (is_singular()) :
                ?><p class = "latest-post-category mt-2"><?php echo $category[0]->name ?></p>
				<?php the_title( '<h1 class="latest-post-title col-padding">', '</h1>' );
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