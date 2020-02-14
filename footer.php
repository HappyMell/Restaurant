<?php
/**
 * The template for displaying the footer
 *
 *
 */

?>

  <!--
    You will likely add here:
      - <footer>
  -->

  <?php wp_footer(); ?>
</main>
<footer class="page-footer container">
      <div class="page-footer__container container-w">
        <div class="page-footer__wrapper">
          <img class="page-footer__img" src="<?php echo get_field('footer_logo', 'options')?>" />
        </div>
        <div class="page-footer__footer">
          <div class="page-footer__links">
            <p class="mini-title">Links</p>
            <?php wp_nav_menu( array( 
        'menu' => 'footer-menu',
        'container'   => '',
        ) ); ?>  
          </div>
          <div class="page-footer__social">
            <p class="mini-title">Social</p>
            <?php wp_nav_menu( array( 
        'menu' => 'social-menu',
        'container'   => '',
        ) ); ?>  
          </div>
        </div>

        <div class="page-footer__contact">
          <div class="page-footer__contact-details">
            <p class="mini-title"><?php echo get_field('address_title', 'options')?></p>
            <p class="footer-details">
            <?php echo get_field('address_content', 'options')?>
            </p>
          </div>
          <div class="page-footer__contact-details">
            <p class="mini-title"><?php echo get_field('phone_title', 'options')?></p>
            <p class="footer-details"><?php echo get_field('link', 'options')['url']?></p>
          </div>
          <div class="page-footer__contact-details">
            <p class="mini-title"><?php echo get_field('hours_title', 'options')?></p>
            <p class="footer-details"><?php echo get_field('hours_week', 'options')?></p>
            <p class="footer-details"><?php echo get_field('hours_weekend', 'options')?></p>

            
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
