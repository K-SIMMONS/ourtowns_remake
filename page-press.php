<?php 
get_header();
?>

<?
if( have_posts() ):
    while( have_posts() ):
        the_post();?>          
            <main class="container-fluid main">

                <!-- Page Header -->
                
                <header>
                    <h1 class="single-page-title my-4"><?php the_title();?></h1>
                </header>

                <!-- Main Content -->

                <article>
                        <div>
                            
                        </div>
                </article>
            </main>
















<?php    
	endwhile;
endif;

get_footer();
?>