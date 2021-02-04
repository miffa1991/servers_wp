<section class="section">
   <div class="section_in">
      <div class="sponsors_list_w">
      <?php 
    $about_gellery = get_field('partners_main');
    if( $about_gellery ): 
      ?>
   <ul class="sponsors_list">
 
      <?php
    
      foreach( $about_gellery as $image ):
        ?>
      <li class="sponsors_item">
               <div class="sponsors_item_in"><img class="inner_image" src="<?php echo esc_url($image['sizes']['large']); ?>" alt=""></div>
            </li>
      <?php
      
      endforeach; ?>

   </ul><!-- PHOTOS -->
<?php endif; ?>
      
      </div>
      <div class="sponsors_bottom">
         <div class="sponsors_botom_descr">
            <div class="section_descr">
               <p><?php the_field('descr_partners_1') ?></p>
            </div>
         </div>
         <div class="sponsors_bottom_subdescr">
            <div class="section_descr bold_mod">
               <p><?php the_field('descr_partners_2') ?></p>
            </div>
         </div>
      </div>
   </div>
</section>