<section class="gallery" id="gallery">
    <div class="container">
        <h2>PHOTO GALLERY</h2>  
        
        <?php            
            $images = acf_photo_gallery('gallery', 49);                
        ?>

        
        <div class="swiper gallery-swiper">
            <div class="swiper-wrapper">
                    <?php 
                    if (count($images)) :
                        foreach ($images as $image) :                              
                      ?>
                          <div class="swiper-slide">
                            <img src="<?php echo acf_photo_gallery_resize_image($image['full_image_url'], 1200, 600); ?>" alt="<?php echo $image['title']; ?>">
                          </div>
                      <?php endforeach;
                      endif; ?>                            
            </div>                
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
          <div thumbsSlider="" class="swiper thumbs-swiper">
            <div class="swiper-wrapper">
                <?php 
                    if (count($images)) :
                        foreach ($images as $image) :                              
                      ?>
                          <div class="swiper-slide">
                            <img src="<?php echo acf_photo_gallery_resize_image($image['full_image_url'], 200, 200); ?>" alt="<?php echo $image['title']; ?>">
                          </div>
                <?php endforeach;
                endif; ?>    
        
            </div>
          </div>              
    </div>
</section> 