<!-- Rates Section -->
<?php
    $loop = new WP_Query(array(
    'post_type' => 'page',            
    'page_id' => 87
    ));
    if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); 
?>          
                    
<section class="rates" id="rates">
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <div class="wrapper">
            <h3><?php the_field('deck'); ?></h3>            
            <div class="rates">
                <div class="item" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon daily">
                        <img src="<?php echo the_field('image_rate_1'); ?>" alt="Daily">
                    </div>
                    <h4><?php the_field('title_rate_1'); ?></h4>
                    <p><?php the_field('text_rate_1'); ?></p>
                </div>
                <div class="item" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon weekly">
                        <img src="<?php echo the_field('image_rate_2'); ?>" alt="Daily">
                    </div>
                    <h4><?php the_field('title_rate_2'); ?></h4>
                    <p><?php the_field('text_rate_2'); ?></p>
                    <p>                        
                        <span><?php the_field('extra_rate_2'); ?></span>
                    </p>
                </div>
                <div class="item" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon monthly">
                        <img src="<?php echo the_field('image_rate_3'); ?>" alt="Daily">
                    </div>
                    <h4><?php the_field('title_rate_3'); ?></h4>
                    <p><?php the_field('text_rate_3'); ?></p>
                    <p>                        
                        <span><?php the_field('extra_rate_3'); ?></span>
                    </p>
                </div>
            </div>
            <p class="note">
                <?php the_content(); ?>
            </p>
            

        </div>            
    </div>
</section> 

<?php endwhile;
    endif;
    wp_reset_postdata();
?> 