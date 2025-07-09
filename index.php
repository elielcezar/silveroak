<?php get_header(); ?>

    <main class="main-content">
        <div class="container">
            <h1>Bem-vindo ao Silver Oaks RV Park</h1>
            <p>Esta é a página padrão. Para visualizar o conteúdo completo, acesse a página inicial.</p>
            
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Nenhum conteúdo encontrado.</p>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?> 