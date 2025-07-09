<!-- AMENITIES -->
<section class="amenities" id="amenities">
    <div class="container">   
        <?php
            $loop = new WP_Query(array(
            'post_type' => 'page',            
            'page_id' => 76
            ));
            if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
                
                <h2><?php the_title(); ?></h2>         
                <?php the_field('deck'); ?>
                <div class="row">
                    <div class="col col-1" data-aos="fade-right">
                        <?php the_post_thumbnail(''); ?>
                    </div>
                    <div class="col col-2" data-aos="fade-left">                    
                        <?php the_content(); ?>
                        <a href="<?php echo the_field('button_link'); ?>" class="btn"><?php echo the_field('button_text'); ?></a>
                    </div>                     
                </div>   

            <?php endwhile;
            endif;
            wp_reset_postdata();
        ?>                        
    </div>
</section> 