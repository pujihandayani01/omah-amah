document.addEventListener('DOMContentLoaded', function () {
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const sidebarLinks = document.querySelectorAll('.sidebar .menu-link');
    const mobileQuery = window.matchMedia('(max-width: 650px)');

    if (!sidebarToggle || !sidebarOverlay) {
        return;
    }

    function updateSidebarButton() {
        const isMobile = mobileQuery.matches;
        const isOpen = isMobile
            ? document.body.classList.contains('mobile-sidebar-open')
            : !document.body.classList.contains('sidebar-collapsed');

        sidebarToggle.setAttribute('aria-expanded', String(isOpen));
        sidebarToggle.setAttribute(
            'aria-label',
            isMobile
                ? (isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi')
                : (isOpen ? 'Ciutkan sidebar' : 'Perluas sidebar')
        );
    }

    function toggleSidebar() {
        if (mobileQuery.matches) {
            document.body.classList.toggle('mobile-sidebar-open');
        } else {
            document.body.classList.toggle('sidebar-collapsed');
        }

        updateSidebarButton();
    }

    function closeMobileSidebar() {
        document.body.classList.remove('mobile-sidebar-open');
        updateSidebarButton();
    }

    sidebarToggle.addEventListener('click', toggleSidebar);
    sidebarOverlay.addEventListener('click', closeMobileSidebar);

    sidebarLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            if (mobileQuery.matches) {
                closeMobileSidebar();
            }
        });
    });

    mobileQuery.addEventListener('change', function () {
        document.body.classList.remove(
            'mobile-sidebar-open',
            'sidebar-collapsed'
        );
        updateSidebarButton();
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeMobileSidebar();
        }
    });

    updateSidebarButton();
});
