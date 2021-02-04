<?php
/**
* Template name: Контакты
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package dipri
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




         <div class="contact_block">
            <div class="contact_block_head">
               <div class="contact_block_head_col_w">
                  <?php if( have_rows('kolonka_contact_1') ): ?>
                  <?php while( have_rows('kolonka_contact_1') ): the_row(); 
							// Get sub field values.
							$title = get_sub_field('title');
						?>
                  <div class="contact_block_head_col">
                     <div class="contact_block_head_col_in">
                        <h3 class="section_title h5_mod offset_3_mod"><?php echo $title; ?></h3>
                        <ul class="contact_block_list">
                           <?php if( have_rows('kontakty') ): ?>
                           <?php while( have_rows('kontakty') ): the_row(); 
									$kontakt = get_sub_field('kontakt');
										?>
                           <li class="contact_block_list_item"><?php echo $kontakt; ?></li>
                           <?php endwhile; ?>
                           <?php endif; ?>
                        </ul>
                     </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
						<?php if( have_rows('kolonka_contact_2') ): ?>
                  <?php while( have_rows('kolonka_contact_2') ): the_row(); 
							// Get sub field values.
							$title = get_sub_field('title');
						?>
                  <div class="contact_block_head_col">
                     <div class="contact_block_head_col_in">
                        <h3 class="section_title h5_mod offset_3_mod"><?php echo $title; ?></h3>
                        <ul class="contact_block_list">
                           <?php if( have_rows('kontakty') ): ?>
                           <?php while( have_rows('kontakty') ): the_row(); 
									$kontakt = get_sub_field('kontakt');
										?>
                           <li class="contact_block_list_item"><?php echo $kontakt; ?></li>
                           <?php endwhile; ?>
                           <?php endif; ?>
                        </ul>
                     </div>
                  </div>
                  <?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('kolonka_contact_3') ): ?>
                  <?php while( have_rows('kolonka_contact_3') ): the_row(); 
							// Get sub field values.
							$title = get_sub_field('title');
						?>
                  <div class="contact_block_head_col">
                     <div class="contact_block_head_col_in">
                        <h3 class="section_title h5_mod offset_3_mod"><?php echo $title; ?></h3>
                        <ul class="contact_block_list">
                           <?php if( have_rows('kontakty') ): ?>
                           <?php while( have_rows('kontakty') ): the_row(); 
									$kontakt = get_sub_field('kontakt');
										?>
                           <li class="contact_block_list_item"><?php echo $kontakt; ?></li>
                           <?php endwhile; ?>
                           <?php endif; ?>
                        </ul>
                     </div>
                  </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>


         <div class="contact_form_w">

            <h2 class="section_title contact_mod offset_mod"><?php the_field('title_form_contact') ?></h2>
            <?php the_field('code_form_contact') ?>
         </div>
      </div>
   </section>
</div>



<?php
		get_footer();