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
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
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
                    <h1>Pesan dan Pertanyaan</h1>
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

    
<!-- Pesan & Pertanyaan -->
<section class="content-card question-management-card">

    <!-- Tab Utama -->
    <div class="question-tabs">
        <button type="button" class="question-tab active" data-tab="semua">
            Semua Pesan
            <span class="question-tab-count">8</span>
        </button>

        <button type="button" class="question-tab" data-tab="pengguna">
            Pesan Pengguna
            <span class="question-tab-count">5</span>
        </button>

        <button type="button" class="question-tab" data-tab="chatbot">
            Pertanyaan Chatbot AI
            <span class="question-tab-count">3</span>
        </button>
    </div>

    <div class="question-divider"></div>

    <!-- Filter Pencarian -->
    <div class="question-filter-row">

        <div class="question-search">
            <i class="bi bi-search"></i>
            <input
                type="search"
                id="questionSearch"
                placeholder="Cari pengirim atau pertanyaan..."
                aria-label="Cari pesan"
            >
        </div>

        <select id="questionStatusFilter" class="question-select"
                aria-label="Filter status">
            <option value="">Semua Status</option>
            <option value="baru">Baru</option>
            <option value="diproses">Diproses</option>
            <option value="selesai">Selesai</option>
        </select>

        <select id="questionCategoryFilter" class="question-select"
                aria-label="Filter kategori">
            <option value="">Semua Kategori</option>
            <option value="kamar">Kamar</option>
            <option value="harga">Harga</option>
            <option value="fasilitas">Fasilitas</option>
            <option value="peraturan kos">Peraturan Kos</option>
            <option value="laundry">Laundry</option>
            <option value="lainnya">Lainnya</option>
        </select>

        <input
            type="date"
            id="questionDateFilter"
            class="question-select question-date"
            aria-label="Filter tanggal"
        >

        <button type="button" class="question-reset-btn" id="resetQuestionFilter">
            <i class="bi bi-arrow-counterclockwise"></i>
            Reset Filter
        </button>

    </div>

    <!-- Filter Kategori -->
    <div class="question-category-section">
        <span class="question-category-label">Kategori:</span>

        <div class="question-category-list">
            <button type="button" class="question-category-btn active"
                    data-category="semua">Semua</button>

            <button type="button" class="question-category-btn"
                    data-category="kamar">Kamar</button>

            <button type="button" class="question-category-btn"
                    data-category="harga">Harga</button>

            <button type="button" class="question-category-btn"
                    data-category="fasilitas">Fasilitas</button>

            <button type="button" class="question-category-btn"
                    data-category="peraturan kos">Peraturan Kos</button>

            <button type="button" class="question-category-btn"
                    data-category="laundry">Laundry</button>

            <button type="button" class="question-category-btn"
                    data-category="lainnya">Lainnya</button>
        </div>
    </div>

    <!-- Tabel Pesan -->
    <div class="question-table-wrapper">
        <table class="question-table">
            <thead>
                <tr>
                    <th>Pengirim</th>
                    <th>Subjek atau Pertanyaan</th>
                    <th>Kategori</th>
                    <th>Sumber</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody id="questionTableBody">

                <!-- Pesan 1 -->
                <tr data-category="laundry"
                    data-source="pengguna"
                    data-status="baru"
                    data-date="2026-10-16">
                    <td>
                        <div class="question-sender">
                            <div class="question-avatar">AR</div>
                            <div>
                                <strong>Andi Rahman</strong>
                                <small>Pengguna</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="question-subject">
                            Berapa lama proses laundry selesai?
                        </div>
                        <small class="question-subject-desc">
                            Mohon informasi estimasi waktu laundry.
                        </small>
                    </td>
                    <td><span class="question-category-tag category-laundry">Laundry</span></td>
                    <td>
                        <span class="question-source">
                            <i class="bi bi-person"></i> Pengguna
                        </span>
                    </td>
                    <td>16 Okt 2026</td>
                    <td><span class="question-status status-baru">Baru</span></td>
                    <td>
                        <button type="button" class="question-more-btn"
                                title="Lihat detail" aria-label="Lihat detail pesan Andi">
                            <i class="bi bi-eye"></i>
                        </button>
                    </td>
                </tr>

                <!-- Pesan 2 -->
                <tr data-category="kamar"
                    data-source="chatbot"
                    data-status="diproses"
                    data-date="2026-10-15">
                    <td>
                        <div class="question-sender">
                            <div class="question-avatar avatar-purple">SA</div>
                            <div>
                                <strong>Siti Amelia</strong>
                                <small>Pengguna</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="question-subject">
                            Apakah tersedia kamar dengan AC?
                        </div>
                        <small class="question-subject-desc">
                            Menanyakan ketersediaan kamar ber-AC.
                        </small>
                    </td>
                    <td><span class="question-category-tag category-kamar">Kamar</span></td>
                    <td>
                        <span class="question-source source-ai">
                            <i class="bi bi-robot"></i> Chatbot AI
                        </span>
                    </td>
                    <td>15 Okt 2026</td>
                    <td><span class="question-status status-diproses">Diproses</span></td>
                    <td>
                        <button type="button" class="question-more-btn"
                                title="Lihat detail" aria-label="Lihat detail pesan Siti">
                            <i class="bi bi-eye"></i>
                        </button>
                    </td>
                </tr>

                <!-- Pesan 3 -->
                <tr data-category="harga"
                    data-source="pengguna"
                    data-status="selesai"
                    data-date="2026-10-14">
                    <td>
                        <div class="question-sender">
                            <div class="question-avatar avatar-orange">DP</div>
                            <div>
                                <strong>Dimas Pratama</strong>
                                <small>Pengguna</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="question-subject">
                            Berapa harga kamar per bulan?
                        </div>
                        <small class="question-subject-desc">
                            Menanyakan biaya sewa kamar.
                        </small>
                    </td>
                    <td><span class="question-category-tag category-harga">Harga</span></td>
                    <td>
                        <span class="question-source">
                            <i class="bi bi-person"></i> Pengguna
                        </span>
                    </td>
                    <td>14 Okt 2026</td>
                    <td><span class="question-status status-selesai">Selesai</span></td>
                    <td>
                        <button type="button" class="question-more-btn"
                                title="Lihat detail" aria-label="Lihat detail pesan Dimas">
                            <i class="bi bi-eye"></i>
                        </button>
                    </td>
                </tr>

                <!-- Pesan 4 -->
                <tr data-category="fasilitas"
                    data-source="chatbot"
                    data-status="baru"
                    data-date="2026-10-13">
                    <td>
                        <div class="question-sender">
                            <div class="question-avatar avatar-green">RW</div>
                            <div>
                                <strong>Rina Wulandari</strong>
                                <small>Pengguna</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="question-subject">
                            Apakah Wi-Fi tersedia untuk semua penghuni?
                        </div>
                        <small class="question-subject-desc">
                            Menanyakan fasilitas internet kos.
                        </small>
                    </td>
                    <td><span class="question-category-tag category-fasilitas">Fasilitas</span></td>
                    <td>
                        <span class="question-source source-ai">
                            <i class="bi bi-robot"></i> Chatbot AI
                        </span>
                    </td>
                    <td>13 Okt 2026</td>
                    <td><span class="question-status status-baru">Baru</span></td>
                    <td>
                        <button type="button" class="question-more-btn"
                                title="Lihat detail" aria-label="Lihat detail pesan Rina">
                            <i class="bi bi-eye"></i>
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="question-table-footer">
        <span id="questionResultCount">Menampilkan 4 contoh pesan</span>
        <span>Data demonstrasi</span>
    </div>

</section>


<!-- Overlay Detail Pertanyaan -->
<div class="question-detail-overlay" id="questionDetailOverlay"></div>

<!-- Sidebar Detail Pertanyaan -->
<aside class="question-detail-drawer" id="questionDetailDrawer"
       aria-hidden="true" aria-labelledby="questionDetailTitle">

    <div class="question-drawer-header">
        <div>
            <h2 id="questionDetailTitle">Detail Pertanyaan</h2>
            <p>Informasi dan penanganan pertanyaan</p>
        </div>

        <button type="button" class="question-drawer-close"
                id="closeQuestionDetail" aria-label="Tutup detail">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <div class="question-drawer-body">

        <!-- Notifikasi -->
        <div class="question-update-notice" id="questionUpdateNotice" hidden>
            <i class="bi bi-check-circle-fill"></i>
            <span id="questionUpdateNoticeText">Status berhasil diperbarui.</span>
        </div>

        <!-- Pengirim -->
        <div class="question-detail-sender">
            <div class="question-avatar" id="detailSenderAvatar">SA</div>
            <div>
                <h3 id="detailSenderName">Siti Amelia</h3>
                <p>Pengirim pertanyaan</p>
            </div>
        </div>

        <!-- Informasi pesan -->
        <div class="question-detail-meta">
            <div>
                <span>Diterima</span>
                <strong id="detailReceivedDate">15 Okt 2026</strong>
            </div>
            <div>
                <span>Sumber</span>
                <strong id="detailSource">Chatbot AI</strong>
            </div>
            <div>
                <span>Kategori</span>
                <strong id="detailCategory">Kamar</strong>
            </div>
        </div>

        <!-- Pertanyaan utama -->
        <section class="question-detail-section">
            <span class="question-detail-eyebrow">Pertanyaan</span>
            <h3 id="detailQuestionText">Apakah kamar masih tersedia?</h3>
        </section>

        <!-- Percakapan terkait -->
        <section class="question-detail-section">
            <h3 class="question-detail-section-title">
                <i class="bi bi-chat-square-text"></i>
                Percakapan Terkait
            </h3>

            <div class="question-conversation">
                <div class="question-conversation-avatar" id="detailConversationAvatar">SA</div>
                <div class="question-conversation-content">
                    <strong id="detailConversationName">Siti Amelia</strong>
                    <p id="detailConversationText">
                        Saya berencana masuk bulan November. Apakah kamar standar masih tersedia?
                    </p>
                </div>
            </div>
        </section>

        <!-- Jawaban AI -->
        <section class="question-ai-review">
            <div class="question-ai-review-header">
                <div class="question-ai-review-icon">
                    <i class="bi bi-robot"></i>
                </div>
                <div>
                    <h3>Jawaban AI</h3>
                    <span>
                        <i class="bi bi-exclamation-circle"></i>
                        Perlu ditinjau ulang
                    </span>
                </div>
            </div>

            <p id="detailAIAnswer">
                Ketersediaan kamar standar untuk November belum dapat dipastikan
                dari informasi yang tersedia. Silakan konfirmasi kepada pengelola
                Omah Amah.
            </p>
        </section>

        <!-- Status penanganan -->
        <section class="question-detail-section">
            <div class="question-handling-heading">
                <h3 class="question-detail-section-title">Status Penanganan</h3>
                <span class="question-status status-diproses" id="detailHandlingStatus">
                    Dalam Proses
                </span>
            </div>
            <p class="question-handling-description">
                Perbarui status setelah pertanyaan ditinjau.
            </p>
        </section>

        <!-- Catatan admin -->
        <section class="question-detail-section">
            <label for="questionAdminNote" class="question-detail-section-title">
                Catatan dari Admin
            </label>
            <textarea
                id="questionAdminNote"
                class="question-admin-note"
                rows="4"
                placeholder="Tulis catatan atau tindak lanjut..."
            ></textarea>
        </section>
    </div>

    <!-- Tombol aksi -->
    <div class="question-drawer-footer">
        <button type="button" class="question-process-btn" id="markQuestionInProgress">
            <i class="bi bi-arrow-repeat"></i>
            Tandai Dalam Proses
        </button>

        <button type="button" class="question-complete-btn" id="markQuestionComplete">
            <i class="bi bi-check2-circle"></i>
            Tandai Selesai
        </button>
    </div>
</aside>


        <footer class="dashboard-footer">
            © 2026 Omah Amah · Smart Boarding House
        </footer>
    </main>

    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <script src="{{ asset('js/questions.js') }}" defer></script>
</body>
</html>
