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
    <link rel="stylesheet" href="{{ asset('css/facilities.css') }}">
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
                    <h1>Fasilitas Kos</h1>
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

       
<section class="content-card room-management-card facility-management-card">

    <!-- Header -->
    <div class="room-management-header">
        <div class="room-management-heading">
            <h2 class="section-title">Daftar Fasilitas</h2>
            <p>Kelola fasilitas yang tersedia untuk penghuni Omah Amah.</p>
        </div>

        <button type="button" class="btn-add-room">
            <i class="bi bi-plus-lg"></i>
            <span>Tambah Fasilitas</span>
        </button>
    </div>

    <!-- Tabel Fasilitas -->
    <div class="room-table-wrapper">
        <table class="room-table facility-table">
            <thead>
                <tr>
                    <th>Fasilitas</th>
                    <th>Deskripsi &amp; Detail</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <!-- Wi-Fi -->
                <tr>
                    <td>
                        <div class="facility-name">
                            <div class="facility-icon facility-icon-wifi">
                                <i class="bi bi-wifi"></i>
                            </div>
                            <strong>Wi-Fi</strong>
                        </div>
                    </td>

                    <td>
                        <div class="facility-description">
                            <span>Akses internet bersama</span>
                            <small>
                                Tersedia untuk menunjang aktivitas belajar
                                dan kebutuhan digital penghuni.
                            </small>
                        </div>
                    </td>

                    <td>
                        <span class="room-status status-available">
                            <span></span> Aktif
                        </span>
                    </td>

                    <td>
                        <div class="room-actions">
                            <button
                                type="button"
                                class="room-action-btn action-edit"
                                title="Edit fasilitas Wi-Fi"
                                aria-label="Edit fasilitas Wi-Fi">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Parkir -->
                <tr>
                    <td>
                        <div class="facility-name">
                            <div class="facility-icon facility-icon-parking">
                                <i class="bi bi-p-circle"></i>
                            </div>
                            <strong>Area Parkir</strong>
                        </div>
                    </td>

                    <td>
                        <div class="facility-description">
                            <span>Area parkir penghuni</span>
                            <small>
                                Area untuk menyimpan kendaraan penghuni
                                selama tinggal di kos.
                            </small>
                        </div>
                    </td>

                    <td>
                        <span class="room-status status-available">
                            <span></span> Aktif
                        </span>
                    </td>

                    <td>
                        <div class="room-actions">
                            <button
                                type="button"
                                class="room-action-btn action-edit"
                                title="Edit fasilitas Area Parkir"
                                aria-label="Edit fasilitas Area Parkir">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Dapur -->
                <tr>
                    <td>
                        <div class="facility-name">
                            <div class="facility-icon facility-icon-kitchen">
                                <i class="bi bi-cup-hot"></i>
                            </div>
                            <strong>Dapur Bersama</strong>
                        </div>
                    </td>

                    <td>
                        <div class="facility-description">
                            <span>Area memasak bersama</span>
                            <small>
                                Area yang dapat digunakan penghuni
                                untuk menyiapkan makanan.
                            </small>
                        </div>
                    </td>

                    <td>
                        <span class="room-status status-repair">
                            <span></span> Nonaktif
                        </span>
                    </td>

                    <td>
                        <div class="room-actions">
                            <button
                                type="button"
                                class="room-action-btn action-edit"
                                title="Edit fasilitas Dapur Bersama"
                                aria-label="Edit fasilitas Dapur Bersama">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <div class="room-table-footer">
        <span>Menampilkan 3 contoh data fasilitas</span>
    </div>

</section>

            
            



            





        <footer class="dashboard-footer">
            © 2026 Omah Amah · Smart Boarding House
        </footer>
    </main>

    <script src="{{ asset('js/dashboard.js') }}" defer></script>
</body>
</html>
