<?php get_header(); ?>

<main class="container">
    <?php
    while (have_posts()) : the_post(); 
        // Obtener los valores de ACF
        $url_proyecto = get_field('url_del_proyecto');
        $tecnologias = get_field('tecnologias');
    ?>
        <article <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>

            <div class="proyecto-meta" style="background: #f9f9f9; padding: 15px; margin-bottom: 20px; border-radius: 8px;">
                <?php if($tecnologias): ?>
                    <p><strong>Tecnologías usadas:</strong> <?php echo esc_html($tecnologias); ?></p>
                <?php endif; ?>

                <?php if($url_proyecto): ?>
                    <p><a href="<?php echo esc_url($url_proyecto); ?>" target="_blank" class="boton-proyecto" rel="noopener noreferrer">Visitar sitio web del cliente</a></p>
                <?php endif; ?>
            </div>

            <?php if (has_post_thumbnail()) : ?>
                <div class="proyecto-imagen-principal">
                    <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                </div>
            <?php endif; ?>

            <div class="proyecto-descripcion" style="margin-top: 30px;">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>