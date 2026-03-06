<?php get_header(); ?>

<main class="bg-light section-padding">
    <div class="container">
        <header style="text-align: center; margin-bottom: 60px;">
            <span class="tech-tag">Insights</span>
            <h1 class="section-title">Blog y Actualidad Tech</h1>
            <p>Compartimos nuestro conocimiento sobre desarrollo, marketing y tendencias.</p>
        </header>

        <div class="proyectos-grid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="proyecto-card">
                    <div class="proyecto-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="proyecto-info">
                        <span style="font-size: 0.8rem; color: var(--text-muted);"><?php echo get_the_date(); ?></span>
                        <h3 style="margin: 10px 0;"><a href="<?php the_permalink(); ?>" style="color: var(--dark);"><?php the_title(); ?></a></h3>
                        <div class="proyecto-excerpt" style="font-size: 0.9rem;">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="leer-mas" style="font-size: 0.9rem;">Leer artículo &rarr;</a>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <p>No hay artículos publicados aún.</p>
            <?php endif; ?>
        </div>

        <div class="pagination" style="margin-top: 50px; text-align: center;">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>