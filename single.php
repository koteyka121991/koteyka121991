<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package technotorg
 */

get_header();
?>
<div class="container">                 
    <section class="section__text-box">
        <div class="tehnika-gallery">
			<div class="img-wrap">
                
					<?php the_post_thumbnail(  ); ?>
              
			</div>
                <?php $images = carbon_get_the_post_meta('tehnika_media_gallery'); ?>
				<?php if($images): 
               
                    ?>
                <div class="tehnika-gallery_images">
                <div class="tehnika-gallery_images-box">
              
                <?php foreach($images as $img): ?>
					<span>
					<?php $image_url = wp_get_attachment_image_src($img, 'full'); ?>
                    <img src="<?php echo $image_url[0]; ?>" alt="">
					</span>
                    <?php endforeach; ?>
                   
                   </div>
                   <div class="btn-next"></div>  
	            </div>
                <?php endif; ?>
                    <?php the_content(); ?>
    </section>
</div>
<?php

get_footer();