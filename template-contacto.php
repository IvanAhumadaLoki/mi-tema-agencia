<?php
/* Template Name: Plantilla Contacto */
get_header(); ?>

<main class="section-padding bg-light">
    <div class="container">
        <div class="contact-wrapper" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 50px; background: white; padding: 40px; border-radius: 15px; box-shadow: var(--shadow);">
            
            <div class="contact-details">
                <span class="tech-tag">Hablemos</span>
                <h1 style="margin-top: 20px;">¿Tienes un proyecto en mente?</h1>
                <p>Estamos listos para convertir tus ideas en software de alto impacto o estrategias de marketing que conviertan.</p>
                
                <div class="contact-info-list" style="margin-top: 40px;">
                    <div style="margin-bottom: 25px;">
                        <strong><i class="fas fa-envelope" style="color: var(--primary);"></i> Email:</strong>
                        <p>proyectos@tuagencia.com</p>
                    </div>
                    <div style="margin-bottom: 25px;">
                        <strong><i class="fas fa-map-marker-alt" style="color: var(--primary);"></i> Ubicación:</strong>
                        <p>Santiago, Chile / Remoto</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-side">
                <form action="#" method="POST" class="custom-form">
                    <div style="margin-bottom: 20px;">
                        <label>Nombre Completo</label>
                        <input type="text" name="nombre" placeholder="Ej: John Doe" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; margin-top: 8px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>Email Corporativo</label>
                        <input type="email" name="email" placeholder="john@empresa.com" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; margin-top: 8px;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>Servicio de Interés</label>
                        <select name="servicio" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; margin-top: 8px;">
                            <option>Desarrollo Web Custom</option>
                            <option>Marketing Digital / SEO</option>
                            <option>Diseño UI/UX</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label>Mensaje</label>
                        <textarea name="mensaje" rows="4" placeholder="Cuéntanos un poco sobre tu proyecto..." style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; margin-top: 8px;"></textarea>
                    </div>
                    <button type="submit" class="btn-small" style="width: 100%; border: none; cursor: pointer; font-size: 1rem;">Enviar Solicitud</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>