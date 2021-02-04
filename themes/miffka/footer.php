<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miffka
 */

?>

<footer class="footer">
   <div class="section_in">
      <nav class="footer_nav">
         <?php	wp_nav_menu( array(	'theme_location' => 'menu-foot-1'	) ); ?>
      </nav>
      <div class="contacts_list_w">
         <ul class="contacts_list center_content_mod">
            <li class="contacts_item">
               <a class="contacts_link phone_mod white_mod" href="tel:<?php the_field('phone_head_foot', 'option') ?>"><?php the_field('phone_head_foot', 'option') ?></a>
            </li>
            <li class="contacts_item">
               <a class="contacts_link accent_mod" href="mailto:<?php the_field('mail_head_foot', 'option') ?>"><?php the_field('mail_head_foot', 'option') ?></a>
            </li>
         </ul>
      </div>
   </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>