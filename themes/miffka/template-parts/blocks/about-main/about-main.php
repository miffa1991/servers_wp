<section class="section no_offset_mod">
   <div class="section_in">
      <div class="hero_section_in">
         <div class="hero_section_text_w">
            <div class="section_text">
               <h1 class="section_title h1_mod offset_mod"><?php the_field('title_about_main') ?></h1>
               <div class="section_descr offset_mod decor_mod">
                  <?php the_field('desc_about_main') ?>
               </div>
               <a class="btn_base_2" href="<?php the_field('link_about_main') ?>">
                  <?php the_field('link_text_about_main') ?>
               </a>
            </div>
         </div>
         <div class="hero_section_slider_w">
            <div class="hero_section_slider heroSlider">
               <?php 
               if (have_rows('slider_about_main')) :
                  while (have_rows('slider_about_main')) : the_row();
                     ?>
               <div class="hero_section_slider_item">
                  <div class="hero_section_slider_item_in">
                     <div class="section_bg_w">
                        <img class="cover_image" src="<?php the_sub_field('img') ?>" alt="" />
                     </div>
                     <div class="hero_slider_content">
                        <h3 class="section_title white_mod offset_mod slider_mod"><?php the_sub_field('title') ?></h3>
                        <div class="section_descr white_mod size_4_mod offset_mod">
                           <p><?php the_sub_field('desc') ?></p>
                        </div><a class="btn_base" href="<?php the_sub_field('link') ?>"><?php the_sub_field('link_text') ?></a>
                     </div>
                  </div>
               </div>
               <?php  
                  endwhile;
               else :
               // no rows found
               endif;
               wp_reset_query();
   
               ?>


            </div>
            <div class="hero_section_slider_dots"></div>
         </div>
      </div>
   </div>
</section>