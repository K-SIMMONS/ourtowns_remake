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
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <div class = "desktop_search">
          <div class="desktop_search-form">
          <form role="search" action="https://www.ourtownsfoundation.org/" method="get" class="search-form">
            <label for="s">
              <span class="screen-reader-text"></span>
              <input type="search" name = "s" placeholder="Search" class="search-form hidden" value>
            </label>
              <button type="submit" class="search-form__submit">
              <img id = "searchIcon" class = "" src="https://www.ourtownsfoundation.org/wp-content/themes/our-towns/images/search-black.png" alt="Search Submit Icon">
                </button>
              </form>
              </div>
              <button class = "desktop-search__open-search">
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

