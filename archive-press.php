<?php

/*
Template

*/
get_header();
?>
<main class="container-fluid main">

<!-- Page Header -->

    <header>
        <h1 class="single-page-title my-5"><?php wp_title('');?></h1>
    </header>

    <div class="press-page">
<?
$pressDate = new DateTime(get_field('date'));
$externalURL = get_field('external_link');
if( have_posts() ):
    while( have_posts() ):
        the_post();?>          

                <!-- Main Content -->

                <article>
                    <div class="news-post">
                        <div>
                            <a target="_blank" href="<?php echo $externalURL ?>"> <?php the_post_thumbnail(); ?> </a>
                        </div>

                        <div>
                            <?php echo $pressDate->format('F j, Y') ?>
                            <?php the_title(); ?>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            


<?php    
	endwhile;
endif; ?>

    </div>
</main>

<? 
get_footer();
?>