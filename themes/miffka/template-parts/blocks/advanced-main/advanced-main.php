<section class="section">
   <div class="section_in">
      <ul class="advantages_list">
         <?php 
               if (have_rows('advanced_main')) :
                  while (have_rows('advanced_main')) : the_row();
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