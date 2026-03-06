<?php get_header(); ?>

<main class="container">
    <section class="error-404 section-padding">
        <h1>404</h1>
        <h2>¡Vaya! Página no encontrada</h2>
        <p>Parece que lo que estás buscando ha sido movido o ya no existe.</p>
        <div style="margin-top: 40px;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-small">Volver al Inicio</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>