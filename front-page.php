<?php get_header();?>



<section id="home_hero">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col text-center">
                    <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/american-renewal.png'); ?>" alt="american renewal banner">
                </div>
            </div>
        </div>
    </section>


    <section class="divider">
    <div class="container ">
        <div class="row yellow_divider">
            <div class="col ">
                <h1 class="divider_title">Reports</h1>
            </div>
        </div>
    </div>    
  </section>
   



<!-- 

<div class = "container bg-warning">
    <div class = "row bg-info">
        <div class = "col-6 card">
            <img class = "img-fluid" src = "<?php echo get_theme_file_uri('/images/girlonhorse.jpg'); ?>" alt = "girl on horse">
            <p class = "latest-post-category mt-2">category</p>
            <h1 class = "latest-post-title">Title</h1>
            <p class = "post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nisi vero amet fuga laborum dignissimos adipisci? In voluptatum nulla dolorum aperiam, modi sint voluptas ducimus porro sed natus dolore quod.</p>
        </div>
        <div class = "col-3 card">
        <img class = "img-fluid" src = "<?php echo get_theme_file_uri('/images/girlonhorse.jpg'); ?>" alt = "girl on horse">
            <p class = "latest-post-category mt-2">category</p>
            <h1 class = "latest-post-title">Title</h1>
            <p class = "post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nisi vero amet fuga laborum dignissimos adipisci? In voluptatum nulla dolorum aperiam, modi sint voluptas ducimus porro sed natus dolore quod.</p>
        </div>
        <div class = "col-3 card">
        <img class = "img-fluid" src = "<?php echo get_theme_file_uri('/images/girlonhorse.jpg'); ?>" alt = "girl on horse">
            <p class = "latest-post-category mt-2">category</p>
            <h1 class = "latest-post-title">Title</h1>
            <p class = "post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam nisi vero amet fuga laborum dignissimos adipisci? In voluptatum nulla dolorum aperiam, modi sint voluptas ducimus porro sed natus dolore quod.</p>
            <div class = "row ">
                
            </div>
        </div>
    </div>
</div>
<-->

  <!-- test area -->
  <?php 
$args = array(

          'post_type' => 'post',
          'posts_per_page' => 5,
          
);

$_posts = new WP_Query($args);
?>

<?php if($_posts->have_posts()):?>
  <?php while ($_posts->have_posts()): $_posts->the_post(); ?>
  <?php $category = get_the_category(); ?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-6 card"> 
        
        <?php if(has_post_thumbnail()): ?>
          <a class = "latest-post-excerpt" href= "<?php the_permalink(); ?>"> 
            <img class="img-fluid blog_image shrink ms-2" src="<?php the_post_thumbnail_url(); ?>" alt=""> 
            <p class = "latest-post-category mt-2"><?php echo $category[0]->name ?></p>
            <h1 class="latest-post-title"><?php the_title();?> </h1>
            <p class="latest-post-excerpt"> <?php the_excerpt(); ?> </p>
          </a>
        </div>
        
          <div class = "col-3 card">
          <?php if(has_post_thumbnail()): ?>
          <a class = "latest-post-excerpt" href= "<?php the_permalink(); ?>"> 
            <img class="img-fluid blog_image shrink ms-2" src="<?php the_post_thumbnail_url(); ?>" alt=""> 
            <p class = "latest-post-category mt-2"><?php echo $category[0]->name ?></p>
            <h1 class="latest-post-title"><?php the_title();?> </h1>
            <p class="latest-post-excerpt"> <?php the_excerpt(); ?> </p>
          </a>
        </div>
        <div class = "col-3 card">
        <?php if(has_post_thumbnail()): ?>
          <a class = "latest-post-excerpt" href= "<?php the_permalink(); ?>"> 
            <img class="img-fluid blog_image shrink ms-2" src="<?php the_post_thumbnail_url(); ?>" alt=""> 
            <p class = "latest-post-category mt-2"><?php echo $category[0]->name ?></p>
            <h1 class="latest-post-title"><?php the_title();?> </h1>
            <p class="latest-post-excerpt"> <?php the_excerpt(); ?> </p>
          </a>
        </div>
        <?php endif;?>
        <?php endif;?>
        <?php endif;?>
        
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  
  
  
  
  
  
  
    <section class="divider">
      <div class="container mt-5 ">
          <div class="row ">
              <div class="col ms-5">
                  <h1 class="divider_title_previous"><a href="<?php the_permalink(6);?>">Previous Reports</a></h1>
                  <p><a href="<?php the_permalink(6);?>">Read past content from the website here.</a></p>
              </div>
          </div>
      </div>    
    </section>


	<div class="container reports-carousel mt-5">
  <h1 class = "front-page-carousel-text">Voices From America</h1>
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
					<?
						$carouselPosts = new WP_Query(array(
							'post_type' => 'post'
						));
						$postNumber = 1;
						while($carouselPosts->have_posts())
						{
              $category = get_the_category();
							$carouselPosts->the_post();
							?>
							<div class="col-4 genPost">
								<a href="<? the_permalink();?>">
									
                  <?php the_post_thumbnail('full' , array('class' => 'img-fluid'));
										if (is_singular()) :
                    ?>
                      <p class = "latest-post-category mt-2"><?php echo $category[0]->name ?></p>
                      <?php
											the_title( '<h1 class="latest-post-title">', '</h1>' );
										else :
											?> <h1><? the_title();?></h1><?
										endif;?>
								
									<div class="latest-post-excerpt">
										<? the_excerpt();?>
									</div> 
								</a>
							</div>
							<?
							if($postNumber === 3)
							{
								break;
							}
							$postNumber++;
						}
					?>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
					<?
						$postNumber = 1;
						while($carouselPosts->have_posts())
						{
							$carouselPosts->the_post();
							?>
							<div class="col-4 genPost">
								<a href="<? the_permalink();?>">
									<?php the_post_thumbnail('full' , array('class' => 'img-fluid'));
										if (is_singular()) :
                      ?>
                      <p class = "latest-post-category mt-2"><?php echo $category[0]->name ?></p>
                      <?php
											the_title( '<h1 class="latest-post-title">', '</h1>' );
										else :
											?> <h1><? the_title();?></h1><?
										endif;?>
									<div class="latest-post-excerpt">
										<? the_excerpt();?>
									</div> 
								</a>
							</div>
							<?
							if($postNumber === 3)
							{
								break;
							}
							$postNumber++;
						}
					?>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<!-- <a class="carousel-control-prev" href="#mycarousel" id="prevcontrol" role="button" data-slide="prev">
            <span class="" aria-hidden="true"><img class=" " id="prev" src="https://www.ourtownsfoundation.org/wp-content/themes/our-towns/images/carousel-icons/prev.png" alt=""></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mycarousel" id="nextcontrol" role="button" data-slide="next">
            <span class="" aria-hidden="true"><img class=" " id="next" src="https://www.ourtownsfoundation.org/wp-content/themes/our-towns/images/carousel-icons/next.png" alt=""></span>
            <span class="sr-only">Next</span>
        </a> -->
		</div>
	</div>




















<?php get_footer();?>