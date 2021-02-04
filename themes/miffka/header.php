<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miffka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="https://gmpg.org/xfn/11">

      <?php wp_head(); ?>
   </head>

   <body <?php body_class(); ?>>
      <?php wp_body_open(); ?>
      <div id="page" class="site">
       
         <header class="header">
            <div class="header_in section_in">
               <a class="header_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <?php
 						//получаем прямую ссылку на картинку логотипа
							$logo_img = '';
							if( $custom_logo_id = get_theme_mod('custom_logo') ){
								$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
								'class'    => 'image',
								'itemprop' => 'image',
								));
							}
 echo $logo_img; //выводим изображение логотипа без ссылки
?>
               </a>
               <div class="header_nav_w">
                  <nav class="header_nav">
							<?php	wp_nav_menu( array(	'theme_location' => 'menu-1'	) ); ?>
                  </nav>
                  <div class="contacts_list_w">
                     <ul class="contacts_list right_content_mod">
                        <li class="contacts_item">
                           <a class="contacts_link phone_mod" href="tel:<?php the_field('phone_head_foot', 'option') ?>"><?php the_field('phone_head_foot', 'option') ?></a>
                           </li>
                        <li class="contacts_item">
                           <a class="contacts_link accent_mod" href="mailto:<?php the_field('mail_head_foot', 'option') ?>"><?php the_field('mail_head_foot', 'option') ?></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="menu_trigger menuTrigger"><span class="menu_trigger_decor"></span></div>
            </div>
         </header>

         <div class="wrapper decor_1_mod">