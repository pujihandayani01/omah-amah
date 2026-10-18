<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Omah Amah</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/room.css') }}">
    <link rel="stylesheet" href="{{ asset('css/information.css') }}">
</head>
<body>
    @include('partials.sidebar')

    <main class="main-content">
        <header class="topbar">
            <div class="topbar-left">
                <button
                    type="button"
                    class="sidebar-toggle"
                    id="sidebarToggle"
                    aria-label="Buka atau ciutkan sidebar"
                    aria-controls="sidebar"
                    aria-expanded="true"
                >
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div>
                    <h1>Informasi Kost</h1>
                    <p>Selamat datang di layanan penghuni Omah Amah.</p>
                </div>
            </div>

            <div class="profile">
                <div class="avatar">P</div>
                <div class="profile-details">
                    <div class="profile-name">Penghuni</div>
                    <div class="profile-role">Member Omah Amah</div>
                </div>
            </div>
        </header>

        <div class="row g-3">
            
            
<div class="col-lg-8">
     <section class="content-card kos-profile-card">

        <!-- Foto utama bangunan kos -->
        <div class="kos-profile-cover">
            <img
                src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?w=1600&h=650&fit=crop"
                alt="Foto bangunan Omah Amah"
                class="kos-profile-image"
            >
            <div class="kos-cover-label">
                <i class="bi bi-house-door"></i>
                Informasi Hunian
            </div>
        </div>

        <!-- Informasi utama kos -->
        <div class="kos-profile-content">

            <div class="kos-profile-heading">
                <span class="kos-profile-category">
                    <i class="bi bi-building"></i>
                    Hunian Kos
                </span>

                <h2>Omah Amah Residence</h2>

                <p class="kos-profile-description">
                    Hunian nyaman dengan lingkungan yang mendukung
                    aktivitas belajar, bekerja, dan beristirahat.
                    Dirancang untuk memberikan pengalaman tinggal
                    yang praktis, aman, dan menyenangkan.
                </p>
            </div>

            <!-- Alamat -->
            <div class="kos-profile-address">
                <div class="kos-profile-info-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>

                <div>
                    <h3>Alamat Kos</h3>
                    <p>
                        Alamat lengkap kos akan ditampilkan di sini.
                        Silakan sesuaikan dengan alamat sebenarnya.
                    </p>
                </div>
            </div>

            <!-- Harga -->
            <div class="kos-profile-price">
                <div class="kos-price-icon">
                    <i class="bi bi-wallet2"></i>
                </div>

                <div class="kos-price-content">
                    <span class="kos-price-label">
                        Harga Mulai dari
                    </span>

                    <div class="kos-price-value">
                        Rp800.000
                        <span>/ bulan</span>
                    </div>

                    <p>
                        Harga dapat berbeda sesuai tipe dan fasilitas kamar.
                    </p>
                </div>
            </div>

        </div>

    </section>
</div>


            


            

<div class="col-lg-4">
    <section class="content-card visit-rules-card">

        <!-- Header -->
        <div class="visit-rules-header">
            <h2 class="section-title">Peraturan &amp; Jam Kunjung</h2>
            <p>
                Informasi tata tertib dan waktu kunjungan bagi penghuni
                Omah Amah.
            </p>
        </div>

        <!-- Peraturan Kos -->
        <div class="visit-rules-content">
            <div class="visit-rules-title">
                <div class="visit-rules-icon">
                    <i class="bi bi-journal-text"></i>
                </div>

                <div>
                    <h3>Peraturan Kos</h3>
                    <span>Contoh peraturan penghuni</span>
                </div>
            </div>

            <div class="visit-rules-description">
                <ul>
                    <li>Jaga kebersihan area bersama.</li>
                    <li>Hindari kebisingan yang mengganggu penghuni.</li>
                    <li>Tamu wajib melapor kepada pengelola.</li>
                </ul>
            </div>
        </div>

        <!-- Jam Kunjung -->
        <div class="visit-time-group">
            <label for="jamKunjung">
                <i class="bi bi-clock"></i>
                Jam Kunjung
            </label>

            <input
                type="text"
                id="jamKunjung"
                name="jam_kunjung"
                class="visit-time-input"
                value="08.00 - 21.00"
                placeholder="Contoh: 08.00 - 21.00"
                readonly
            >
        </div>

        <!-- Jam Tenang -->
        <div class="visit-time-group">
            <label for="jamTenang">
                <i class="bi bi-moon-stars"></i>
                Jam Tenang
            </label>

            <input
                type="text"
                id="jamTenang"
                name="jam_tenang"
                class="visit-time-input"
                value="22.00 - 06.00"
                placeholder="Contoh: 22.00 - 06.00"
                readonly
            >
        </div>

        <!-- Catatan -->
        <p class="visit-rules-note">
            <i class="bi bi-info-circle"></i>
            Aturan khusus, kontak pengelola, dan kebijakan tamu
            perlu dilengkapi oleh admin.
        </p>

        <!-- Tombol Edit -->
        <div class="visit-rules-actions">
            <button
                type="button"
                class="visit-rules-edit-btn"
                id="editVisitRules"
            >
                <i class="bi bi-pencil-square"></i>
                Edit Informasi
            </button>
        </div>

    </section>
</div>



        <footer class="dashboard-footer">
            © 2026 Omah Amah · Smart Boarding House
        </footer>
    </main>

    <script src="{{ asset('js/dashboard.js') }}" defer></script>
</body>
</html>
