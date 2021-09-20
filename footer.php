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

<footer>

        <div class="stay-connected">

            <div class="stay-connected-content">

                <div class="sc-text-container">
                    <h3 class="sc-h3">Stay Connected</h3>
                    <p class="sc-p">Receive news and updates</p>
                </div>

                <div class="sc-signup">
                    <div class="sc-signup-container">
                        <input type="email" placeholder="Please enter your email" id="email">
                        <input type="submit" value="SIGN UP" id="button">
                    </div>
                </div>

            </div> <!--Child 1-->

        </div> <!--Main-->

        <div class="footer-content">
            <div class="footer-content-display">
                <p class="footer-font">This is the site of the Our Towns Civic Foundation, dedicated to connecting innovators, reformers, civic-patriots, and dreamers across America. The reports here are based on travels and interviews over the past decade by Deborah and James Fallows. The ongoing accounts will emphasize local voices on how communities are adjusting to the economic, environmental, and technological opportunities and challenges of the era.</p>
                <div>
                <?php theme_prefix_the_custom_logo(); ?>
                </div> <!--Image-->
            </div> <!--Footer Content Display-->
        </div> <!--Footer content-->

        <div class="footer-bottom">
            <div class="footer-bottom-content-display">
                <div class="bottom-footer-text-container">
                    <p class="bottom-footer-font">Copyright © 2021 Our Towns - All Rights Reserved</p>
                    <span class="span"><a class ="privacy-policy" href="#" target="_blank">Privacy Policy</a></span>
                </div>
            </div> <!--Footer Bottom -->
        </div> <!--Footer Bottom-->

    </footer>

<?php wp_footer(); ?>

</body>
</html>
