<?php get_header(); ?>

<main class="container">
    <section class="hero">
        <h2>Bienvenido a nuestra Agencia de Portafolio</h2>
        <p>Creamos experiencias digitales personalizadas.</p>
    </section>

    <section class="latest-posts">
        <h3>Últimas entradas</h3>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile;
        else :
            echo '<p>No hay contenido publicado todavía.</p>';
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>