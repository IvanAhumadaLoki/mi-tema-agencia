<?php
/* Template Name: Plantilla Nosotros */
get_header(); ?>

<main>
    <header class="section-padding bg-light" style="text-align: center;">
        <div class="container">
            <span class="tech-tag">Nuestra Historia</span>
            <h1 style="font-size: 3rem; margin-top: 15px;">Pasión por el código y la innovación</h1>
        </div>
    </header>

    <section class="section-padding">
        <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 60px; align-items: center;">
            <div class="nosotros-texto">
                <h2>Transformando ideas en realidades digitales</h2>
                <p>Nacimos con una misión clara: cerrar la brecha entre la tecnología compleja y las necesidades reales del negocio. Somos un equipo multidisciplinario de ingenieros, creativos y estrategas.</p>
                <p>No solo escribimos líneas de código; construimos herramientas que permiten a nuestros clientes escalar, automatizar y dominar sus respectivos mercados.</p>
                
                <div style="margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <h4 style="color: var(--primary); font-size: 2rem; margin: 0;">50+</h4>
                        <p>Proyectos Finalizados</p>
                    </div>
                    <div>
                        <h4 style="color: var(--primary); font-size: 2rem; margin: 0;">100%</h4>
                        <p>Compromiso Técnico</p>
                    </div>
                </div>
            </div>
            <div class="nosotros-imagen">
                <div style="width: 100%; height: 400px; background: #ddd; border-radius: 20px; overflow: hidden; display: flex; align-items: center; justify-content: center; background: linear-gradient(45deg, #f1f5f9, #e2e8f0);">
                     <i class="fas fa-users" style="font-size: 5rem; color: #cbd5e1;"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <div class="proyectos-grid" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div style="text-align: center;">
                    <i class="fas fa-shield-alt" style="color: var(--primary); font-size: 2rem; margin-bottom: 15px;"></i>
                    <h4>Transparencia</h4>
                    <p>Comunicación clara y honesta en cada fase del desarrollo.</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-microchip" style="color: var(--primary); font-size: 2rem; margin-bottom: 15px;"></i>
                    <h4>Vanguardia</h4>
                    <p>Usamos las últimas tecnologías para asegurar escalabilidad.</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-heart" style="color: var(--primary); font-size: 2rem; margin-bottom: 15px;"></i>
                    <h4>Pasión</h4>
                    <p>Nos obsesionamos con los detalles que marcan la diferencia.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>