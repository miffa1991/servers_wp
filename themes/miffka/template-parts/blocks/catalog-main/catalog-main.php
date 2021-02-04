<section class="section bg_mod">
   <div class="section_in">
      <div class="catalog_preview_w">
         <div class="catalog_preview_decor_block">
            <div class="catalog_preview_decor_block_in">
               <div class="section_bg_w">
                  <img class="cover_image"
                     src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/catalog_preview_img.jpg" alt="" />
               </div>
               <div class="catalog_preview_decor_btn">
                  <div class="catalog_preview_decor_col">
                     <span class="catalog_preview_decor_link" href="#"><?php the_field('title_catalog') ?>
                        <span class="icon_w arrow_mod">
                           <svg class="icon icon-left_arrow size_mod">
                              <use
                                 xlink:href="<?php echo get_stylesheet_directory_uri() ?>/assets/i/sprite/sprite.svg#left_arrow">
                              </use>
                           </svg>
                        </span>
                     </span>
                  </div>
                  <div class="catalog_preview_decor_col">
                     <span class="icon_w doc_mod">
                        <img class="inner_image"
                           src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/doc_icon_img.png" alt="">
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="catalog_preview_slider_w">
            <div class="catalog_preview_slider catalogPreview">
               <?php
if (have_rows('katalog_rep')) :
   while (have_rows('katalog_rep')) : the_row();
   $id_post = get_sub_field('page');
   // $post_img = get_the_post_thumbnail($id_post, 'medium');
   $post_title = get_the_title( $id_post );

   if ($id_post) :
      setup_postdata($id_post);
      ?>
   


               <div class="catalog_item slider_mod">
                  <div class="catalog_item_in">
                     <div class="catalog_item_img">
                        <img class="inner_image" src="<?php the_sub_field('img') ?>" alt="" />
                     </div>
                     <div class="catalog_item_info">
                        <div class="catalog_item_title_w">
                           <h4 class="section_title h5_mod">
                              <a class="catalog_item_title_link" href="<?php the_permalink( $id_post ); ?>"><?php echo $post_title; ?></a>
                           </h4>
                        </div>
                        <div class="section_descr size_3_mod offset_2_mod">
                           <p><?php the_sub_field('desc') ?></p>
                        </div><a class="btn_base" href="<?php the_permalink( $id_post ); ?>">подробнее</a>
                     </div>
                  </div>
               </div>


               <?php endif; 
   endwhile;
   else :
      // no rows found
   endif;
   wp_reset_query();
   
   
   ?>




            </div>
            <div class="catalog_preview_dots"></div>
         </div>
      </div>
   </div>
</section>