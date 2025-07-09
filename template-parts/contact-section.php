<!-- Contact Section -->
<section class="contact" id="contact">
    <h2>CONTACT AND RESERVATIONS</h2>
    <div class="map">          
        <div id="map" style="width: 100%; height: 450px;"></div>
    </div>
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'page',            
                'page_id' => 169
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>                    
                    
                    <h3><?php echo the_field('deck'); ?></h3>
                    <?php the_content(); ?>                   
                    <a href="<?php echo the_field('button_link'); ?>" class="btn"><?php echo the_field('button_text'); ?></a>                                   

                <?php endwhile;
                endif;
                wp_reset_postdata();
            ?>        
                
            </div>
        </div>
    </div>
</section> 