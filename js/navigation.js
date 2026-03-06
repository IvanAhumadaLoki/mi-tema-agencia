document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('openMobileMenu');
    const closeBtn = document.getElementById('closeMobileMenu');
    const mobileMenu = document.getElementById('mobileMenu');
    const overlay = document.getElementById('menuOverlay');

    function toggleMenu() {
        mobileMenu.classList.toggle('active');
        overlay.classList.toggle('active');
        // Bloquear scroll del body al abrir el menú
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : 'initial';
    }

    if (openBtn) openBtn.addEventListener('click', toggleMenu);
    if (closeBtn) closeBtn.addEventListener('click', toggleMenu);
    if (overlay) overlay.addEventListener('click', toggleMenu);

    // Cerrar menú al hacer clic en un enlace (ideal para One Page)
    const links = document.querySelectorAll('.mobile-nav-list a');
    links.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'initial';
        });
    });
});