<?php get_header(); ?>

<section class="section-padding bg-light">
    <div class="container">
        <header class="archive-header" style="text-align: center; margin-bottom: 60px;">
            <h1 class="section-title">Nuestro Portafolio</h1>
            <p>Conoce los proyectos y soluciones digitales que hemos desarrollado para nuestros clientes.</p>
        </header>

        <div class="proyectos-grid">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    // Usamos el componente reutilizable que creamos en la Fase 4
                    get_template_part('template-parts/content', 'proyecto');
                endwhile;
                
                // Paginación en caso de tener muchos proyectos
                echo '<div class="pagination" style="grid-column: 1/-1; text-align: center; margin-top: 40px;">';
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '« Anterior',
                    'next_text' => 'Siguiente »',
                ));
                echo '</div>';
                
            else :
                echo '<div style="text-align:center; grid-column: 1/-1;"><p>Aún no hay proyectos cargados en el portafolio.</p></div>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>