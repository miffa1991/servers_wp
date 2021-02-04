<?php
/**
 * Template name: О Компании
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miffka
 */

get_header();
?>



<div class="base decor_1_mod">
   <section class="section no_offset_mod">
      <div class="section_in">
         <div class="section_head">
            <div class="section_head_col">
               <div class="breadcrumbs_list_w">
                  <?php
                     if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<ul id="breadcrumbs" class="breadcrumbs_list">','</ul>' );
                     }
			         ?>
               </div>
               <h1 class="section_title h1_mod"><?php the_title(); ?></h1>
            </div>
            <div class="section_head_col">
               <div class="section_head_col_img_black">
                  <div class="section_head_col_img">
                     <div class="section_bg_w">
                        <img class="cover_image" src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/section_head_img.jpg" alt="" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section_content">
            <article class="article_block">
              <?php the_content(); ?>
            </article>
         </div>
         <div class="btn_w">
            <a class="btn_base size_mod" href="<?php the_field('link_button_about') ?>">
               <span class="btn_title"><?php the_field('name_button_about') ?></span>
               <div class="icon_w arrow_2_mod">
                  <svg class="icon icon-right_arrow size_mod">
                     <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/assets/i/sprite/sprite.svg#right_arrow"></use>
                  </svg>
               </div>
            </a>
         </div>
         <div class="section_content">
            <article class="article_block">
               <h2><?php the_field('title_about_advance_text') ?></h2>
               <?php the_field('descr_about_advance_text') ?>
            </article>
         </div>
      </div>
   </section>
   <section class="section">
   <div class="section_in">
      <ul class="advantages_list">
         <?php 
               if (have_rows('advanced_about_rep')) :
                  while (have_rows('advanced_about_rep')) : the_row();
                     ?>


         <li class="advantages_item">
            <div class="advantages_item_in">
               <div class="advantages_item_img">
                  <img class="inner_image" src="<?php the_sub_field('icon') ?>" alt="" />
               </div>
               <h3 class="section_title h3_mod offset_3_mod"><?php the_sub_field('name') ?></h3>
               <div class="section_descr size_2_mod">
                  <p><?php the_sub_field('descr') ?></p>
               </div>
            </div>
         </li>
         <?php  
                  endwhile;
               else :
               // no rows found
               endif;
               wp_reset_query();
   
               ?>


      </ul>
   </div>
</section>
   <section class="section">
      <div class="section_in">
         <h2 class="section_title h2_mod offset_mod"><?php the_field('title_about_advance_text_mission') ?></h2>
         <article class="article_block">
            
         <?php the_field('descr_about_advance_mission') ?>
         </article>
      </div>
   </section>
</div>



<?php
	get_footer();