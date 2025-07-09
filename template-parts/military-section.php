<div class="attractions-preview">
        <div class="container">
            <div class="row">
            <?php
                $loop = new WP_Query(array(
                'post_type' => 'page',            
                'page_id' => 92
                ));
                if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>                    
                    
                    <div class="col col-1">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>                
                    </div>
                    <div class="col col-2">
                        <a href="<?php echo the_field('button_link'); ?>" class="btn"><?php echo the_field('button_text'); ?></a>
                    </div>                   

                <?php endwhile;
                endif;
                wp_reset_postdata();
            ?>       

                
            </div>                
        </div>
    </div>