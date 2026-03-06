<footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <h4 class="footer-title">Agencia</h4>
                <p>Soluciones informáticas y marketing digital de vanguardia.</p>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Navegación</h4>
                <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container' => false)); ?>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Legal</h4>
                <ul class="footer-links">
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Términos</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
        </div>
    </footer>

    <?php $wa = get_theme_mod('wa_number', ''); if($wa): ?>
        <a href="https://wa.me/<?php echo esc_attr($wa); ?>" class="whatsapp-float" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>
</html>