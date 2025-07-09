<!-- Benefits Section -->
<?php
    $loop = new WP_Query(array(
    'post_type' => 'page',            
    'page_id' => 79
    ));
    if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); 
?>   
<section class="booknow" id="booknow">
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <h3><?php the_field('deck'); ?></h3>

        <div class="row">
        
            <div class="col col-1" data-aos="fade-right">
                <div class="item">
                    <img src="<?php echo the_field('book1_image'); ?>" alt="Book Now">
                    <div class="item-content">
                        <h4><?php echo the_field('book1_title'); ?></h4>
                        <p><?php echo the_field('book1_description'); ?></p>
                    </div> 
                </div> 
            </div>
            <div class="col col-2" data-aos="fade-left">
                <div class="item">
                <img src="<?php echo the_field('book2_image'); ?>" alt="Book Now">
                    <div class="item-content">
                        <h4><?php echo the_field('book2_title'); ?></h4>
                        <p><?php echo the_field('book2_description'); ?></p>
                    </div> 
                </div> 
            </div>              
        </div>        
    </div>
</section> 

<?php endwhile;
    endif;
    wp_reset_postdata();
?>     