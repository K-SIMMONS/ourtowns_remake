<?php get_header(); ?>

<div class="container-fluid">
       <div class="row">
           <div class="col-3 text-center ms-3">
               <h1 class="all_reports">All Reports</h1>
            </div>
        </div>
    </div>

<div class = "container mt-5">

<!-- trial one -->
<?php
$query = new WP_Query(array(
    'post_status'   => 'publish',
    'orderby'       => 'title',
    'order'         => 'ASC',
    'posts_per_page'    => -1
    ));

$post_count = $query->post_count;
$posts_per_column = ceil($post_count / 6);      

$rows = array();                                            
$count = 0;
while ($query->have_posts())
{ $query->the_post();
    $category = get_the_category();
if($rows[$count] == ""){ $rows[$count] = '<div class="row">'; }
$rows[$count] = $rows[$count] . '<div class="col-6 col-sm-3">' .
'<div class = "post-thumbnail">' . 
'<img class = "img-fluid" src ="'.get_the_post_thumbnail().'</div>' . 
'<div class="latest-post-category">'. $category[0]->name  .'</div>'.
'<div class="latest-post-title">
<a href="'.get_permalink().'">'.get_the_title().'</a></div></div>';
$count++;                           
if ($count == $posts_per_column ) { $count = 0; }   
}

foreach ($rows as $row) { echo $row . '</div>'; }
?>

</div>
<!-- 
    <?php query_posts( array(
   
   'posts_per_page' => 16,
)); ?>

<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>

<div class="container mt-5">
        <div class="row">
            <div class="col col-md-3 ">
                <img class = "img-fluid" src = "<?php echo get_the_post_thumbnail();?>">
                <p class = "latest-post-category"><?php echo get_the_category();?></p>
                <h1 class = "latest-post-title"><?php the_title();?></h1>
                <?php the_excerpt(); ?>
            </div>
            <div class="col col-md-3 text-center"><h1 >CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
        </div>
    </div>

   
   <?php endwhile; ?>

<?php else : ?>

   <p><?php __('No Reports'); ?></p>

<?php endif; ?>



    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
            <div class="col col-md-3 text-center"><h1>CONTENT</h1><p>place content here</p></div>
        </div>
    </div>

    <div class="container-fluid mt-5 ">
        <div class="row text-end page-numbers">
            <div class="col-12 page_numbers ">
                <button class="btn btn-outline-danger active">1</button>
                <button class="btn btn-outline-danger ">2</button>
                <button class="btn btn-outline-danger disabled">...</button>
                <button class="btn btn-outline-danger ">32</button>
                <button class="btn btn-outline-danger ">33</button>
                <button class="btn btn-outline-danger active current">></button>

            </div>
            
            
        </div>
    </div> -->

 





    <!-- . the_post_thumbnail("full", array("class" => "img-fluid")) . -->








<?php get_footer();?>