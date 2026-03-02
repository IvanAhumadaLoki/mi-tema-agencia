<?php get_header(); ?>

<main>
    <section class="hero-banner">
        <div class="container">
            <h1>Expertos en Desarrollo Custom</h1>
            <p>Transformamos ideas en productos digitales de alto rendimiento.</p>
        </div>
    </section>

    <section class="proyectos-recientes container">
        <h2 class="section-title">Nuestros Proyectos</h2>
        
        <div class="proyectos-grid">
            <?php
            $args = array(
                'post_type'      => 'proyecto',
                'posts_per_page' => 3, // Solo mostramos los últimos 3
            );

            $proyectos_query = new WP_Query($args);

            if ($proyectos_query->have_posts()) :
                while ($proyectos_query->have_posts()) : $proyectos_query->the_post();
                    // AQUÍ LLAMAMOS AL COMPONENTE REUTILIZABLE
                    get_template_part('template-parts/content', 'proyecto');
                endwhile;
                wp_reset_postdata(); // OBLIGATORIO al usar WP_Query
            else :
                echo '<p>Aún no hay proyectos cargados.</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>