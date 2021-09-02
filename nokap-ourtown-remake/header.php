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
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <?php wp_head(); ?>
    <title>OurTowns Home</title>
	
</head>
<body>
    <header>

      <div class="container-fluid top_banner">
        <a class="navbar-brand" href="<?php echo site_url();?>">
              <img class="img-fluid ms-4" src="<?php echo get_theme_file_uri('/images/logo.png'); ?> " alt="logo">
          </a>
          <div class="top_search">
          <form role="search" action="https://www.ourtownsfoundation.org/" method="get" class="search-form">
            <label for="s">
              <span class="input-group-append screen-reader-text"></span>
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </label>
              <button type="submit" class="search-form-sumbit">
                <img class="" src="/images/search_icon.png" alt="search icon">
                </button>
              </form>
              </div>
              <button class="btn text-light donate_btn" type="submit">DONATE</button>
               </div> 
           
      
    </header>