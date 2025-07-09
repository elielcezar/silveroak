<div class="hero">
    <div class="swiper hero-swiper">                
        <div class="swiper-wrapper"> 

        <?php
            $loop = new WP_Query(array(
            'post_type' => 'banner',            
            'orderby' => 'date',
            'order' => 'DESC'
            ));

            if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); 
            
                $image_desktop = get_field('image_desktop');
                $image_mobile = get_field('image_mobile');
                $banner_top_desktop = $image_desktop['sizes']['banner-top-desktop'];
                $banner_top_mobile = $image_desktop['sizes']['banner-top-mobile'];                
                
                $link = get_field('link');
                $button_text = get_field('button_text');
            ?>                
            
                <div class="swiper-slide">                    
                    <?php if ($banner_top_desktop): ?>
                        <img src="<?php echo esc_url($banner_top_desktop); ?>" alt="Silver Oaks RV Park" class="desk">
                    <?php endif; ?>
                    
                    <?php if ($banner_top_mobile): ?>
                        <img src="<?php echo esc_url($banner_top_mobile); ?>" alt="Silver Oaks RV Park" class="mob">
                    <?php endif; ?>
                    
                    <div class="content">
                        <div class="container">
                            <h3><?php the_field('title'); ?></h3>                            
                            <a href="<?php echo esc_url($link); ?>" class="btn"><?php echo esc_html($button_text); ?></a>                            
                        </div>
                    </div>                    
                </div>

            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>           
            
                        
        </div>                
        <div class="swiper-pagination"></div>                            
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>        
</div> 