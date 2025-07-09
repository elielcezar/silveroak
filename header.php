<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <div class="overlay"></div>

    <div class="menu-mobile">      
        <div id="logo-name-slogan">
            <a href="<?php echo home_url(); ?>" title="Início" rel="home" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
            </a>
        </div>
        <a class="menuBtn2">
            <span class="lines"></span>
        </a> 
        <nav>          
        <ul class="menu">            
            <li><a href="#booknow" class="anchor">Book Now</a></li>
            <li><a href="#gallery" class="anchor">Photo Gallery</a></li>                      
            <li><a href="#rates" class="anchor">Rates</a></li>
            <li><a href="#contact" class="anchor">Contact</a></li>
        </ul>        
        </nav> 
    </div>
    
    
    <!-- Header -->
    <header class="header">
        <div class="top-header">
            <div class="container">
                <div class="phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ico-oak.svg" alt="">
                    <span>361-717-0090</span>
                </div>                
                <span class="tagline">Your Home On The Road-</span>
                <div class="div cta">
                    <a href="#" class="btn">Book Now</a>
                    <a href="#" class="instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ico-insta.svg" alt="Instagram" class="ico-insta">
                    </a>
                </div>
                <a class="menuBtn">
                    <span class="lines"></span>
                </a> 
            </div>
        </div>
        <nav class="navbar">
            <div class="container">
                <?php if (has_nav_menu('primary')): ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'main-menu',
                        'container' => false,
                        'fallback_cb' => false
                    )); ?>
                <?php else: ?>
                    <ul>
                        <li><a href="#booknow" class="anchor">Book Now-</a></li>
                        <li><a href="#gallery" class="anchor">Photo Gallery</a></li>
                        <li>
                            <a href="<?php echo home_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Silver Oaks" class="logo">
                            </a>
                        </li>
                        <li><a href="#rates" class="anchor">Rates</a></li>
                        <li><a href="#contact" class="anchor">Contact</a></li>
                    </ul>
                <?php endif; ?>
            </div>            
        </nav>        
    </header> 