<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package miffka
*/

get_header();
?>

   <div class="base">
      <section class="section no_offset_top">
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
                  <?php the_title( '<h1 class="section_title h1_mod">', '</h1>' ); ?>
               </div>
               <div class="section_head_col">
                  <div class="section_head_col_img_black">
                     <div class="section_head_col_img">
                        <div class="section_bg_w">
                           <img class="cover_image"
                              src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/section_head_img.jpg" alt="" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="article_head">

               <?php the_title( '<h2 class="section_title article_mod">', '</h2>' ); ?>
            </div>
            <article class="article_block">
               <?php
while ( have_posts() ) :
	the_post();
	
	the_content();
	
	
	
endwhile; // End of the loop.
?>
            </article>
         </div>
      </section>

   <?php
get_footer();