<!-- Camping Section -->
<section class="about2">
    <div class="container">
        <div class="row">
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'page',            
                'page_id' => 84
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>                    
                    
                    <div class="col col-1" data-aos="fade-right">
                        <?php the_post_thumbnail(''); ?>                        
                    </div>
                    <div class="col col-2" data-aos="fade-left">                    
                        <?php the_content(); ?>                            
                        <a href="<?php echo the_field('button_link'); ?>" class="btn"><?php echo the_field('button_text'); ?></a>                        
                    </div>                                         

                <?php endwhile;
                endif;
                wp_reset_postdata();
            ?> 
        </div>
    </div>
</section> 