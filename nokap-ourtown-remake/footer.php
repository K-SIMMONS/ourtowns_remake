<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nokap_ourtown_remake
 */
?>

<section id="stay_connected">
    <div class="container-fluid footer_banner p-2">
      <div class="row">
        <div class="col-7 mt-4 text-center ">
          <h1 class="connected_title">Stay connected</h1>
          <p class="text-light footer_banner_p ms-3"> Receive news and updates</p>
        </div>
        <div class="col  mt-4">
            <form>
              <label class="visually-hidden" for="autoSizingInput">Email</label>
              <input type="text" class=" form-control email_form" id="autoSizingInput" placeholder="Please enter your email">
            </form>
        </div>
        <div class="col mt-4">
          <button type="submit" class="btn btn-outline-info signup-btn">Sign Up</button>
        </div>
      </div>
    </div>
  </section>
  
<footer>
  <div class="container-fluid footer_end_banner">
    <div class="row">
      <div class="col mt-5 footer_margin "><p class="text-light">This is the site of the Our Towns Civic Foundation, dedicated to connecting innovators, reformers, civic-patriots, and dreamers across America. The reports here are based on travels and interviews over the past decade by Deborah and James Fallows. The ongoing accounts will emphasize local voices on how communities are adjusting to the economic, environmental, and technological opportunities and challenges of the era.</p>
      </div>
      <div class="col text-center mt-5">
        <img class="img-fluid" src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="logo">
      </div>
    </div>
  </div>

  <div class="container-fluid bg-dark">
    <div class="row text-light ">
      <div class="col-3 mt-4 footer_margin"><p>Copyright © 2021 Our Towns - All Rights Reserved</p></div>
      <div class="col mt-4"><a class="privacy-plicy" href="#">Privacy Policy</a></div>
    </div>
  </div>
</footer>



<?php wp_footer(); ?>
</body>

</html>













<?php wp_footer(); ?>

</body>
</html>
