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
    <link rel="stylesheet" href="{{ asset('css/rooms.css') }}">
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
                    <h1>Dashboard</h1>
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

        <section class="mb-4">
            <div class="row g-3">
                <div class="col-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon">⌂</div>
                        <div class="stat-label">Total Kamar</div>
                        <div class="stat-value">24</div>
                        <div class="stat-description">Kamar tersedia di kos</div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon">✓</div>
                        <div class="stat-label">Fasilitas</div>
                        <div class="stat-value">08</div>
                        <div class="stat-description">Fasilitas utama</div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon">✧</div>
                        <div class="stat-label">Layanan AI</div>
                        <div class="stat-value">24/7</div>
                        <div class="stat-description">Asisten informasi digital</div>
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <div class="stat-card">
                        <div class="stat-icon">♡</div>
                        <div class="stat-label">Kenyamanan</div>
                        <div class="stat-value">Prioritas</div>
                        <div class="stat-description">Hunian nyaman dan praktis</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row g-3">
            
            <div class="col-lg-6">
                <section class="content-card room-summary-card">
                    <h2 class="section-title">Ringkasan Status Kamar</h2>

                    <div class="room-summary-content">

                        <!-- Lingkaran Total Kamar -->
                        <div class="room-total-wrapper">
                            <div class="room-total-circle">
                                <div class="room-total-inner">
                                    <span class="room-total-number">24</span>
                                    <span class="room-total-label">Total Kamar</span>
                                </div>
                            </div>
                        </div>

                        <!-- Daftar Status Kamar -->
                        <div class="room-status-list">

                            <!-- Kamar Terisi -->
                            <div class="room-status-item">
                                <div class="room-status-icon occupied-icon">
                                    <i class="bi bi-house-check-fill"></i>
                                </div>

                                <div class="room-status-info">
                                    <div class="room-status-heading">
                                        <span>Terisi</span>
                                        <strong>16 <small>kamar</small></strong>
                                    </div>

                                    <div class="room-progress">
                                        <div class="room-progress-bar occupied-bar"
                                            style="width: 66.7%;">
                                        </div>
                                    </div>

                                    <span class="room-status-percentage">66,7%</span>
                                </div>
                            </div>

                            <!-- Kamar Tersedia -->
                            <div class="room-status-item">
                                <div class="room-status-icon available-icon">
                                    <i class="bi bi-door-open-fill"></i>
                                </div>

                                <div class="room-status-info">
                                    <div class="room-status-heading">
                                        <span>Tersedia</span>
                                        <strong>6 <small>kamar</small></strong>
                                    </div>

                                    <div class="room-progress">
                                        <div class="room-progress-bar available-bar"
                                            style="width: 25%;">
                                        </div>
                                    </div>

                                    <span class="room-status-percentage">25%</span>
                                </div>
                            </div>

                            <!-- Kamar Perbaikan -->
                            <div class="room-status-item">
                                <div class="room-status-icon repair-icon">
                                    <i class="bi bi-tools"></i>
                                </div>

                                <div class="room-status-info">
                                    <div class="room-status-heading">
                                        <span>Perbaikan</span>
                                        <strong>2 <small>kamar</small></strong>
                                    </div>

                                    <div class="room-progress">
                                        <div class="room-progress-bar repair-bar"
                                            style="width: 8.3%;">
                                        </div>
                                    </div>

                                    <span class="room-status-percentage">8,3%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>


            <div class="col-lg-6">
                
<section class="content-card activity-card">
    <h2 class="section-title">Aktivitas Terbaru</h2>

    <div class="activity-list">

        <!-- Aktivitas 1 -->
        <div class="activity-item">
            <div class="activity-icon activity-blue">
                <i class="bi bi-tags-fill"></i>
            </div>

            <div class="activity-content">
                <h3>Informasi harga kamar diperbarui</h3>
                <p>Hari ini, 09.30</p>
            </div>
        </div>

        <!-- Aktivitas 2 -->
        <div class="activity-item">
            <div class="activity-icon activity-green">
                <i class="bi bi-door-open-fill"></i>
            </div>

            <div class="activity-content">
                <h3>Status ketersediaan kamar diperbarui</h3>
                <p>Hari ini, 08.45</p>
            </div>
        </div>

        <!-- Aktivitas 3 -->
        <div class="activity-item">
            <div class="activity-icon activity-orange">
                <i class="bi bi-megaphone-fill"></i>
            </div>

            <div class="activity-content">
                <h3>Informasi fasilitas kos ditambahkan</h3>
                <p>Kemarin, 15.20</p>
            </div>
        </div>

        <!-- Aktivitas 4 -->
        <div class="activity-item">
            <div class="activity-icon activity-purple">
                <i class="bi bi-person-check-fill"></i>
            </div>

            <div class="activity-content">
                <h3>Data profil penghuni diperbarui</h3>
                <p>Kemarin, 10.15</p>
            </div>
        </div>

    </div>
</section>

            </div>
        </div>

        
<!-- Manajemen Kamar -->
<section class="content-card room-management-card">

    <div class="room-management-header">
        <div class="room-management-heading">
            <h2 class="section-title">Manajemen Kamar</h2>
            <p>Contoh data kamar independen</p>
        </div>

        <button type="button" class="btn-add-room">
            <i class="bi bi-plus-lg"></i>
            <span>Tambah Kamar</span>
        </button>
    </div>

    <!-- Tabel Kamar -->
    <div class="room-table-wrapper">
        <table class="room-table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nomor Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Harga</th>
                    <th>Fasilitas Utama</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <!-- Kamar 1 -->
                <tr>
                    <td>
                        <img
                            src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=120&h=90&fit=crop"
                            alt="Foto kamar 101"
                            class="room-photo"
                        >
                    </td>
                    <td><strong>101</strong></td>
                    <td>
                        <span class="room-type">Standard</span>
                    </td>
                    <td class="room-price">Rp800.000<span>/bulan</span></td>
                    <td>
                        <div class="room-facilities">
                            <span>Kasur</span>
                            <span>Lemari</span>
                            <span>Wi-Fi</span>
                        </div>
                    </td>
                    <td>
                        <span class="room-status status-occupied">
                            <span></span> Terisi
                        </span>
                    </td>
                    <td>
                        <div class="room-actions">
                            <button type="button" class="room-action-btn action-detail"
                                title="Detail" aria-label="Detail kamar 101">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="room-action-btn action-edit"
                                title="Edit" aria-label="Edit kamar 101">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="room-action-btn action-delete"
                                title="Hapus" aria-label="Hapus kamar 101">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Kamar 2 -->
                <tr>
                    <td>
                        <img
                            src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=120&h=90&fit=crop"
                            alt="Foto kamar 102"
                            class="room-photo"
                        >
                    </td>
                    <td><strong>102</strong></td>
                    <td>
                        <span class="room-type">Deluxe</span>
                    </td>
                    <td class="room-price">Rp1.200.000<span>/bulan</span></td>
                    <td>
                        <div class="room-facilities">
                            <span>Kasur</span>
                            <span>AC</span>
                            <span>Kamar mandi dalam</span>
                        </div>
                    </td>
                    <td>
                        <span class="room-status status-available">
                            <span></span> Tersedia
                        </span>
                    </td>
                    <td>
                        <div class="room-actions">
                            <button type="button" class="room-action-btn action-detail"
                                title="Detail" aria-label="Detail kamar 102">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="room-action-btn action-edit"
                                title="Edit" aria-label="Edit kamar 102">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="room-action-btn action-delete"
                                title="Hapus" aria-label="Hapus kamar 102">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Kamar 3 -->
                <tr>
                    <td>
                        <img
                            src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=120&h=90&fit=crop"
                            alt="Foto kamar 103"
                            class="room-photo"
                        >
                    </td>
                    <td><strong>103</strong></td>
                    <td>
                        <span class="room-type">Standard</span>
                    </td>
                    <td class="room-price">Rp800.000<span>/bulan</span></td>
                    <td>
                        <div class="room-facilities">
                            <span>Kasur</span>
                            <span>Lemari</span>
                            <span>Meja</span>
                        </div>
                    </td>
                    <td>
                        <span class="room-status status-repair">
                            <span></span> Perbaikan
                        </span>
                    </td>
                    <td>
                        <div class="room-actions">
                            <button type="button" class="room-action-btn action-detail"
                                title="Detail" aria-label="Detail kamar 103">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button type="button" class="room-action-btn action-edit"
                                title="Edit" aria-label="Edit kamar 103">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button type="button" class="room-action-btn action-delete"
                                title="Hapus" aria-label="Hapus kamar 103">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="room-table-footer">
        <span>Menampilkan 3 contoh data kamar</span>
    </div>

</section>


        <footer class="dashboard-footer">
            © 2026 Omah Amah · Smart Boarding House
        </footer>
    </main>

    
<!-- Modal Konfirmasi Logout -->
<div class="logout-overlay" id="logoutModal">
    <div class="logout-modal">
        <div class="logout-icon">↪</div>

        <h3>Keluar dari Akun?</h3>

        <p>
            Apakah Anda yakin ingin keluar dari akun Omah Amah?
        </p>

        <div class="logout-actions">
            <button type="button" id="cancelLogout"
                    class="btn-cancel">
                Batal
            </button>

            <button type="button" id="confirmLogout"
                    class="btn-logout">
                Keluar dari Akun
            </button>
        </div>
    </div>
</div>

<style>
.logout-overlay {
    position: fixed;
    inset: 0;
    background: rgba(10, 25, 49, 0.55);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    z-index: 9999;
    backdrop-filter: blur(4px);
}

.logout-overlay.show {
    display: flex;
}

.logout-modal {
    background: #fff;
    width: 100%;
    max-width: 390px;
    padding: 30px 25px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.18);
    animation: logoutFadeIn 0.2s ease;
}

.logout-icon {
    width: 58px;
    height: 58px;
    margin: 0 auto 18px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf4ee;
    color: #426b50;
    font-size: 30px;
}

.logout-modal h3 {
    color: #1d2939;
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 10px;
}

.logout-modal p {
    color: #667085;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 25px;
}

.logout-actions {
    display: flex;
    gap: 12px;
}

.logout-actions button {
    flex: 1;
    padding: 12px 10px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.2s;
}

.btn-cancel {
    background: #fff;
    color: #344054;
    border: 1px solid #d0d5dd;
}

.btn-cancel:hover {
    background: #f2f4f7;
}

.btn-logout {
    background: #426b50;
    color: #fff;
    border: 1px solid #426b50;
}

.btn-logout:hover {
    background: #34563f;
}

@keyframes logoutFadeIn {
    from {
        opacity: 0;
        transform: translateY(10px) scale(0.98);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const logoutBtn = document.getElementById('logoutBtn');
    const logoutModal = document.getElementById('logoutModal');
    const cancelLogout = document.getElementById('cancelLogout');
    const confirmLogout = document.getElementById('confirmLogout');

    // Tampilkan pop-up
    logoutBtn.addEventListener('click', function (e) {
        e.preventDefault();
        logoutModal.classList.add('show');
    });

    // Tutup pop-up saat Batal diklik
    cancelLogout.addEventListener('click', function () {
        logoutModal.classList.remove('show');
    });

    // Tutup pop-up jika area luar modal diklik
    logoutModal.addEventListener('click', function (e) {
        if (e.target === logoutModal) {
            logoutModal.classList.remove('show');
        }
    });

    // Konfirmasi keluar
    confirmLogout.addEventListener('click', function () {
        window.location.href = '/';
    });
});
</script>


    <script src="{{ asset('js/dashboard.js') }}" defer></script>
</body>
</html>
