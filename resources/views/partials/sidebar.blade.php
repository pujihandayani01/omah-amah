<div class="sidebar-overlay" id="sidebarOverlay"></div>

    <aside class="sidebar" id="sidebar" aria-label="Navigasi utama">
        <div class="brand">
            <span class="brand-icon">⌂</span>
            <span class="brand-text">Omah Amah</span>
        </div>

        <div class="menu-label">MENU UTAMA</div>

        <nav class="sidebar-nav">
            
            <a href="{{ url('/dashboard') }}"
            class="menu-link sidebar-link {{ request()->is('dashboard') ? 'active' : '' }}"
            title="Dashboard">
                <i class="bi bi-grid menu-icon"></i>
                <span class="menu-text">Dashboard</span>
            </a>

            <a href="{{ url('/rooms') }}"
            class="menu-link sidebar-link {{ request()->is('rooms') ? 'active' : '' }}"
            title="Manajemen Kamar">
                <i class="bi bi-door-open menu-icon"></i>
                <span class="menu-text">Manajemen Kamar</span>
            </a>

            
            <a href="{{ url('/facilities') }}"
            class="menu-link {{ request()->is('facilities') ? 'active' : '' }}"
            title="Fasilitas Kos">
                <span class="menu-icon">▤</span>
                <span class="menu-text">Fasilitas Kos</span>
            </a>

            <a href="{{ url('/information') }}"
            class="menu-link {{ request()->is('information') ? 'active' : '' }}"
            title="Informasi Kos">
                <span class="menu-icon">ⓘ</span>
                <span class="menu-text">Informasi Kos</span>
            </a>

            <a href="{{ url('/laundry') }}"
            class="menu-link {{ request()->is('laundry') ? 'active' : '' }}"
            title="Layanan Laundry">
                <span class="menu-icon">
                    <i class="bi bi-basket2"></i>
                </span>
                <span class="menu-text">Layanan Laundry</span>
            </a>

            <a href="{{ url('/chatbot') }}"
            class="menu-link {{ request()->is('chatbot') ? 'active' : '' }}"
            title="Chatbot AI">
                <span class="menu-icon">
                    <i class="bi bi-robot"></i>
                </span>
                <span class="menu-text">Chatbot AI</span>
            </a>

            
            <a href="{{ url('/questions') }}"
            class="menu-link {{ request()->is('questions') ? 'active' : '' }}"
            title="Pesan dan Pertanyaan">
                <span class="menu-icon">
                    <i class="bi bi-envelope"></i>
                </span>
                <span class="menu-text">Pesan &amp; Pertanyaan</span>
            </a>

            <a href="{{ route('settings') }}" class="menu-link" title="Pengaturan">
                <span class="menu-icon">⚙</span>
                <span class="menu-text">Pengaturan</span>
            </a>

            <a href="#" class="menu-link" title="Keluar" id="logoutBtn">
            <span class="menu-icon">↪</span>
            <span class="menu-text">Keluar</span>
        </a>
        </nav>
    </aside>
