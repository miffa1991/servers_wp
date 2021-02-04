<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package miffka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('news_item'); ?>>
   <div class="news_item_in">
      <div class="news_item_top">
				<?php miffka_post_thumbnail(); ?>
				</div>
      <div class="news_item_bottom">
         <div class="news_item_bottom_in">
            <h3 class="section_title h4_mod offset_2_mod">
					<a class="news_title_link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
				</h3>
						
            <div class="section_descr size_2_mod offset_2_mod">
               <p><?php the_excerpt(); ?></p>
            </div><a class="news_link" href="<?php the_permalink(); ?>">читать подробнее</a>
         </div>
      </div>
   </div>
  


  



</article><!-- #post-<?php the_ID(); ?> -->