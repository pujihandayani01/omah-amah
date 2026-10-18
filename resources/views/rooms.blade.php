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
                    <h1>Tambah Kamar</h1>
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
    <section class="content-card room-detail-card">

        <!-- Header -->
        <div class="room-detail-header">
            <h2 class="section-title">Detail Kamar</h2>
            <p>Lengkapi informasi kamar</p>
        </div>

        <form class="room-detail-form">

            <!-- Nomor dan Nama Kamar -->
            <div class="room-form-grid">

                <div class="room-form-group">
                    <label for="nomor_kamar">
                        Nomor Kamar
                    </label>
                    <input
                        type="text"
                        id="nomor_kamar"
                        name="nomor_kamar"
                        class="room-form-control"
                        placeholder="Contoh: 101"
                    >
                </div>

                <div class="room-form-group">
                    <label for="nama_kamar">
                        Nama Kamar
                    </label>
                    <input
                        type="text"
                        id="nama_kamar"
                        name="nama_kamar"
                        class="room-form-control"
                        placeholder="Contoh: Kamar Mawar"
                    >
                </div>

                <!-- Tipe Kamar dan Harga -->
                <div class="room-form-group">
                    <label for="tipe_kamar">
                        Tipe Kamar
                    </label>
                    <select
                        id="tipe_kamar"
                        name="tipe_kamar"
                        class="room-form-control"
                    >
                        <option value="">Pilih tipe kamar</option>
                        <option value="standar">Standar</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>

                <div class="room-form-group">
                    <label for="harga_bulanan">
                        Harga Bulanan
                    </label>
                    <div class="room-price-input">
                        <span>Rp</span>
                        <input
                            type="number"
                            id="harga_bulanan"
                            name="harga_bulanan"
                            class="room-form-control"
                            placeholder="Contoh: 800000"
                            min="0"
                        >
                    </div>
                </div>

            </div>

            <p class="room-form-note">
                Pilihan tipe: Standar / Premium. Harga merupakan sampel,
                bukan tarif resmi.
            </p>

            <!-- Fasilitas Kamar -->
            <div class="room-form-section">
                <h3>Fasilitas Kamar</h3>

                <div class="room-facility-options">

                    <label class="room-checkbox">
                        <input
                            type="checkbox"
                            name="fasilitas[]"
                            value="wifi"
                        >
                        <span>Wi-Fi</span>
                    </label>

                    <label class="room-checkbox">
                        <input
                            type="checkbox"
                            name="fasilitas[]"
                            value="lemari"
                        >
                        <span>Lemari</span>
                    </label>

                    <label class="room-checkbox">
                        <input
                            type="checkbox"
                            name="fasilitas[]"
                            value="ac"
                        >
                        <span>AC</span>
                    </label>

                    <label class="room-checkbox">
                        <input
                            type="checkbox"
                            name="fasilitas[]"
                            value="kamar_mandi_dalam"
                        >
                        <span>Kamar mandi dalam</span>
                    </label>

                </div>
            </div>

            <!-- Status Kamar -->
            <div class="room-form-group room-status-field">
                <label for="status_kamar">
                    Status Kamar
                </label>

                <select
                    id="status_kamar"
                    name="status_kamar"
                    class="room-form-control"
                >
                    <option value="">Pilih status kamar</option>
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak_tersedia">Tidak tersedia</option>
                </select>
            </div>

            <!-- Tombol -->
            <div class="room-form-actions">
                <button type="reset" class="room-btn-reset">
                    Reset
                </button>

                <button type="button" class="room-btn-save">
                    <i class="bi bi-check2-circle"></i>
                    Simpan Kamar
                </button>
            </div>

        </form>

    </section>
</div>


            


            
<div class="col-lg-4">
    <section class="content-card room-photo-card">

        <!-- Judul -->
        <div class="room-photo-header">
            <h2 class="section-title">Foto Kamar</h2>
            <p>Tampilkan foto kamar sebagai ilustrasi hunian.</p>
        </div>

        <!-- Preview Foto -->
        <div class="room-photo-preview">
            <img
                id="roomPhotoPreview"
                src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=800&h=500&fit=crop"
                alt="Foto ilustrasi kamar"
            >
        </div>

        <!-- Upload Foto -->
        <div class="room-upload-area">
            <div class="room-upload-icon">
                <i class="bi bi-cloud-arrow-up"></i>
            </div>

            <div class="room-upload-content">
                <label for="roomPhotoInput" class="room-upload-button">
                    <i class="bi bi-image"></i>
                    Pilih Foto
                </label>

                <input
                    type="file"
                    id="roomPhotoInput"
                    accept="image/jpeg,image/png"
                    hidden
                >

                <p>JPG/PNG maks. 5 MB (contoh unggahan)</p>
            </div>
        </div>

        <!-- Referensi Kamar -->
        <div class="room-reference-section">
            <div class="room-reference-header">
                <h3>Referensi Kamar (Contoh)</h3>
                <p>Contoh tipe kamar, harga, fasilitas, dan status.</p>
            </div>

            <div class="room-reference-grid">

                <!-- Kamar A01 -->
                <article class="room-reference-item">
                    <div class="room-reference-top">
                        <span class="room-reference-number">A01</span>
                        <span class="room-reference-status">
                            <span></span> Tersedia
                        </span>
                    </div>

                    <h4>Standard</h4>
                    <p class="room-reference-price">
                        Rp800.000<span>/bulan</span>
                    </p>

                    <p class="room-reference-facilities">
                        Wi-Fi, Lemari
                    </p>

                    <button
                        type="button"
                        class="room-reference-edit"
                        data-room="A01"
                    >
                        <i class="bi bi-pencil-square"></i>
                        Edit
                    </button>
                </article>

                <!-- Kamar A02 -->
                <article class="room-reference-item">
                    <div class="room-reference-top">
                        <span class="room-reference-number">A02</span>
                        <span class="room-reference-status">
                            <span></span> Tersedia
                        </span>
                    </div>

                    <h4>Premium</h4>
                    <p class="room-reference-price">
                        Rp1.200.000<span>/bulan</span>
                    </p>

                    <p class="room-reference-facilities">
                        Wi-Fi, AC
                    </p>

                    <button
                        type="button"
                        class="room-reference-edit"
                        data-room="A02"
                    >
                        <i class="bi bi-pencil-square"></i>
                        Edit
                    </button>
                </article>

                <!-- Kamar A03 -->
                <article class="room-reference-item">
                    <div class="room-reference-top">
                        <span class="room-reference-number">A03</span>
                        <span class="room-reference-status room-reference-unavailable">
                            <span></span> Tidak tersedia
                        </span>
                    </div>

                    <h4>Standard</h4>
                    <p class="room-reference-price">
                        Rp800.000<span>/bulan</span>
                    </p>

                    <p class="room-reference-facilities">
                        Wi-Fi, Lemari
                    </p>

                    <button
                        type="button"
                        class="room-reference-edit"
                        data-room="A03"
                    >
                        <i class="bi bi-pencil-square"></i>
                        Edit
                    </button>
                </article>

            </div>
        </div>

    </section>
</div>


</section>


        <footer class="dashboard-footer">
            © 2026 Omah Amah · Smart Boarding House
        </footer>
    </main>

    <script src="{{ asset('js/dashboard.js') }}" defer></script>
</body>
</html>
