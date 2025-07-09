<!-- Attractions Section -->
<section class="attractions" id="attractions">
    
    <h2>ATTRACTIONS</h2>    
    
    <div class="swiper attractions-swiper">
        <div class="swiper-wrapper">

            <?php
                $loop = new WP_Query(array(
                'post_type' => 'attraction'        
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); 
            ?>     
                
                <div class="swiper-slide">
                    <div class="col col-1">
                        <a href="<?php the_field('link'); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="col col-2">                        
                        <h3>
                            <a href="<?php the_field('link'); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p>
                            <a href="<?php the_field('link'); ?>">
                                <?php the_content(); ?>
                            </a>
                        </p>
                    </div>   
                </div>

            <?php endwhile;
                endif;
                wp_reset_postdata();?>
                         
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'attraction'        
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); 
            ?>     
                
                <div class="swiper-slide">
                    <div class="col col-1">
                        <a href="<?php the_field('link'); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="col col-2">                        
                        <h3>
                            <a href="<?php the_field('link'); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p>
                            <a href="<?php the_field('link'); ?>">
                                <?php the_content(); ?>
                            </a>
                        </p>
                    </div>   
                </div>

            <?php endwhile;
                endif;
                wp_reset_postdata();?>
                         
        </div>  
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>                       
    </div>
    
    <?php get_template_part('template-parts/military', 'section'); ?>
    
</section> 