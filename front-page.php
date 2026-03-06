<?php
/**
 * Plantilla para la página de inicio (Front Page)
 * Agencia Custom Pro
 */

get_header(); ?>

<main id="main-content">

    <section class="hero-banner">
        <div class="container">
            <h1>Construimos el futuro digital</h1>
            <p>Especialistas en desarrollo a medida, estrategias de marketing de alto impacto y experiencias de usuario excepcionales.</p>
            
            <div class="hero-btns">
                <a href="#especialidades" class="btn-small">Ver Portafolio</a>
                <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn-small secondary">Contactar</a>
            </div>
        </div>
    </section>

    <section id="especialidades" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">Nuestras Especialidades</h2>
            
            <div class="especialidades-grid">
                <div class="especialidad-card">
                    <i class="fas fa-code"></i>
                    <h3>Desarrollo Web</h3>
                    <p>Creamos sitios web y aplicaciones robustas, escalables y optimizadas para buscadores (SEO) utilizando las últimas tecnologías.</p>
                </div>

                <div class="especialidad-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Marketing Digital</h3>
                    <p>Potenciamos tu marca con estrategias de pauta digital, gestión de contenidos y análisis de datos para maximizar el retorno de inversión.</p>
                </div>

                <div class="especialidad-card">
                    <i class="fas fa-paint-brush"></i>
                    <h3>Diseño UI/UX</h3>
                    <p>Diseñamos interfaces intuitivas y atractivas que garantizan una experiencia de usuario fluida, centrada en la conversión y fidelización.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="text-align: center;">
        <div class="container">
            <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 20px; color: #1a1f2c;">¿Tienes un proyecto en mente?</h2>
            <p style="margin-bottom: 30px; color: #475569; font-size: 1.1rem;">Hablemos sobre cómo podemos llevar tu negocio al siguiente nivel.</p>
            <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn-small" style="padding: 16px 40px;">Empezar ahora</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>