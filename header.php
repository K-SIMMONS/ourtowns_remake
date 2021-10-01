<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nokap_ourtown_remake
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&amp;family=PT+Serif&amp;display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <?php wp_head(); ?>
    <title>OurTowns Home</title>
	
</head>
<body>
    <header>

      <div class="container-fluid top_banner ">
        <div class = "site_branding">
        <a class="navbar-brand" href="<?php echo site_url();?>">
              <img class="img-fluid ms-4" src="<?php echo get_theme_file_uri('/images/logo.png'); ?> " alt="logo">
          </a>
        </div>

        <div class="box-container">
        <?php get_template_part( 'searchbar-sidebar' ); ?>
          <!-- <form role="search" class="box hotdogs">
            <input class="searchbar" placeholder="Search" type="search">
            <button type="submit" class="searchbar-button">
              <img class="icon" src= "https://www.ourtownsfoundation.org/wp-content/themes/our-towns/images/search-black.png" alt = "magnifying glass">
          </button>
          </form> -->
          <button class="searchbutton">
            <img src= "https://www.ourtownsfoundation.org/wp-content/themes/our-towns/images/search-white.png" alt = "magnifying glass">
          </button>
          <a href="https://www.ourtownsfoundation.org/donations" class="nav-donation-btn nomobile">DONATE</a>
        </div>
          </div> 
           <?php wp_nav_menu( array(
             'theme_location' => 'menu-1'
             
           )
          );
      ?>
    </header>

