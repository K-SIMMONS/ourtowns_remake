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

if( have_posts() ):
    while( have_posts() ):
        the_post();
            $pressDate = new DateTime(get_field('date'));
            $externalURL = get_field('external_link');
        ?>          

                <!-- Main Content -->

                <article>
                    <div class="news-post row">
                        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                            <a class="news-post-link" target="_blank" href="<?php echo $externalURL ?>"> <?php the_post_thumbnail( 'full', array('class' => 'img-fluid')); ?> </a>
                        </div>

                        <div class="col-12 col-md-8">
                            <p class="press-post-date sidebar-category-text"><?php echo $pressDate->format('F j, Y') ?></p>
                            <h2 class="press-post-title"><?php the_title(); ?></h2>
                            <p class="press-post-content single-body-text"><?php the_content(); ?></p>
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