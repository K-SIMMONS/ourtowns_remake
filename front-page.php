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


<?php 
$args = array(

          'post_type' => 'post',
          'posts_per_page' => 5,
          
);

$_posts = new WP_Query($args);
?>

<?php if($_posts->have_posts()):?>
  <?php $category = get_the_category(); ?>
  <?php while ($_posts->have_posts()): $_posts->the_post(); ?>

  <div class="container">
    <div class="row">
      <div class="col"> 
        
        <?php if(has_post_thumbnail()): ?>
          <a href= "<?php the_permalink(); ?>"> 
            <img class="img-fluid blog_image shrink ms-2" src="<?php the_post_thumbnail_url(); ?>" alt=""> 
          </a>  
        <?php endif;?>

        </div>

      <div class="col-7">
        <a href= "<?php the_permalink(); ?>"> 
          <p class = "latest-post-category mt-2"><?php echo $category[0]->name ?></p>
          <h1 class="latest-post-title"><?php the_title();?> </h1>
        </a>

        <p class="my_p nomobile"> <?php the_excerpt(); ?> </p>
      </div>
    </div>
  </div>

  <?php endwhile; ?>

  <?php endif; ?>



  <section class="divider">
    <div class="container mt-5 ">
        <div class="row ">
            <div class="col">
                <h1 class="divider_title_previous"><a href="page-latest.php">Previous Reports</a></h1>
                <p><a href="#">Read past content from the website here.</a></p>
            </div>
        </div>
    </div>    
  </section>







































<?php get_footer();?>