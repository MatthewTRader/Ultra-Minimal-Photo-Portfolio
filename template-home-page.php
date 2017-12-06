                                <?php  /* Template Name: Template Home Page */  get_header(); ?> 
    <div class="home-images">
    <?php
    $myposts = get_posts('numberposts=15&category_name=Featured');
    foreach($myposts as $post) : ?>
      
           <?php
        
            if ( wp_is_mobile() ) { ?>
              
               <div class="home-image" >
               
                <amp-img  src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'homepage-slider-mobile' ); echo $thumb['0'];?>" height="11.1" width="16" alt="<?php $thumb_id = get_post_thumbnail_id(get_the_ID()); $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); if( $alt ): echo $alt; endif; ?>" layout="responsive" ></amp-img>
                
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>
              </div>
                
         <?php   } else { ?>
            
             <div class="home-image" > 
             
              <amp-img class="home-image" src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'homepage-slider' ); echo $thumb['0'];?>" height="11.1" width="16" alt="<?php $thumb_id = get_post_thumbnail_id(get_the_ID()); $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); if( $alt ): echo $alt; endif; ?>" layout="responsive" ></amp-img>
                
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>
              </div>
                
                
         <?php } ?>

<?php endforeach; ?>
    </div>
<?php get_footer(); ?>