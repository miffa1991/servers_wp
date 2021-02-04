<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miffka
 */

get_header();
?>
<div class="wrapper decor_1_mod">
   <div class="base decor_1_mod">
      <section class="section no_offset_mod">
         <div class="section_in">
            <?php if ( have_posts() ) : ?>
          
            <div class="section_head">
               <div class="section_head_col">
                  <div class="breadcrumbs_list_w">
                     <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<ul id="breadcrumbs" class="breadcrumbs_list">','</ul>' );
			}
			?>
                  </div>
                  <?php the_archive_title( '<h1 class="section_title h1_mod">', '</h1>' ); ?>
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
            <div class="news_list_w">
               <div class="news_list">
					<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			?>
   

               </div>
            </div>
            <div class="pag_block">
					<?php wp_corenavi() ;?>
            </div>
            <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
            <?php
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
         </div>
      </section>
   </div>










   <?php

get_footer();