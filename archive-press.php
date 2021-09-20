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

$args = array(
    'post_type' => 'press',
    'order' => 'ASC',
    'paged' => get_query_var('paged', 1)
);

$pressPosts = new WP_Query($args);

if( $pressPosts->have_posts() ):
    while( $pressPosts->have_posts() ):
        $pressPosts->the_post();
        
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

endif;?>

<!-- Pagination -->
        <div class="pagination d-flex">
            <?php
            echo paginate_links(array(
                'total' => $pressPosts->max_num_pages,
                'next_text' => '>',
                'prev_text' => '<'
            ));

            ?>
        </div>

    </div>
</main>

<? 
get_footer();
?>