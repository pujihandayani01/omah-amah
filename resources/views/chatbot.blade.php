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
    <link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">
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
                    <h1>Chatbot AI</h1>
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
            
            

<div class="col-lg-7">
    <section class="content-card question-history-card">

        <!-- Header -->
        <div class="question-history-header">
            <div>
                <h2 class="section-title">Riwayat Pertanyaan Terbaru</h2>
                <p>Daftar pertanyaan yang masuk melalui Chatbot AI.</p>
            </div>

            <span class="question-total">3 Pertanyaan</span>
        </div>

        <!-- Filter -->
        <div class="question-filter-tabs">
            <button type="button"
                    class="question-filter active"
                    data-filter="semua">
                Semua
            </button>

            <button type="button"
                    class="question-filter"
                    data-filter="belum">
                Belum Terjawab
            </button>

            <button type="button"
                    class="question-filter"
                    data-filter="tinjau">
                Perlu Ditinjau
            </button>
        </div>

        <!-- Daftar Pertanyaan -->
        <div class="question-history-list" id="questionHistoryList">

            <!-- Pertanyaan 1 -->
            <article class="question-history-item" data-status="belum">
                <div class="question-item-main">
                    <div class="question-item-icon">
                        <i class="bi bi-chat-left-text"></i>
                    </div>

                    <div class="question-item-content">
                        <h3>Berapa lama proses laundry selesai?</h3>
                        <p>Pertanyaan dari penghuni kos</p>
                        <span class="question-item-time">
                            <i class="bi bi-clock"></i>
                            Baru saja
                        </span>
                    </div>
                </div>

                <span class="question-status status-unanswered">
                    Belum terjawab
                </span>
            </article>

            <!-- Pertanyaan 2 -->
            <article class="question-history-item" data-status="tinjau">
                <div class="question-item-main">
                    <div class="question-item-icon">
                        <i class="bi bi-chat-left-text"></i>
                    </div>

                    <div class="question-item-content">
                        <h3>Apakah tersedia kamar dengan AC?</h3>
                        <p>Pertanyaan dari calon penghuni</p>
                        <span class="question-item-time">
                            <i class="bi bi-clock"></i>
                            15 menit lalu
                        </span>
                    </div>
                </div>

                <span class="question-status status-review">
                    Perlu ditinjau
                </span>
            </article>

            <!-- Pertanyaan 3 -->
            <article class="question-history-item" data-status="selesai">
                <div class="question-item-main">
                    <div class="question-item-icon">
                        <i class="bi bi-chat-left-text"></i>
                    </div>

                    <div class="question-item-content">
                        <h3>Bagaimana cara menghubungi pengelola kos?</h3>
                        <p>Pertanyaan dari penghuni kos</p>
                        <span class="question-item-time">
                            <i class="bi bi-clock"></i>
                            1 jam lalu
                        </span>
                    </div>
                </div>

                <span class="question-status status-answered">
                    Terjawab
                </span>
            </article>

            <!-- Pesan jika hasil filter kosong -->
            <div class="question-empty-state" id="questionEmptyState" hidden>
                <i class="bi bi-chat-square-dots"></i>
                <p>Tidak ada pertanyaan pada kategori ini.</p>
            </div>

        </div>

    </section>
</div>



            


<div class="col-lg-5">
    <section class="content-card question-detail-card">

        <!-- Header -->
        <div class="question-detail-header">
            <h2 class="section-title">Detail Pertanyaan</h2>

            <span class="question-detail-status">
                <span></span>
                Belum terjawab
            </span>
        </div>

        <!-- Pertanyaan -->
        <div class="question-detail-question">
            <div class="question-detail-icon">
                <i class="bi bi-chat-left-text"></i>
            </div>

            <div>
                <span class="question-detail-label">Pertanyaan Pengguna</span>
                <h3>"Berapa lama proses laundry selesai?"</h3>
            </div>
        </div>

        <!-- Jawaban AI -->
        <div class="question-ai-answer">
            <div class="question-ai-heading">
                <i class="bi bi-stars"></i>
                <h3>Jawaban AI</h3>
                <span>Perlu diperiksa</span>
            </div>

            <div class="question-ai-content">
                <p>
                    Proses laundry biasanya membutuhkan waktu sekitar
                    2–3 hari, tergantung jumlah pakaian dan antrean
                    layanan. Untuk estimasi yang lebih pasti, silakan
                    konfirmasi kepada pengelola Omah Amah.
                </p>
            </div>

            <p class="question-ai-note">
                <i class="bi bi-info-circle"></i>
                Periksa jawaban sebelum ditindaklanjuti.
            </p>
        </div>

        <!-- Tombol Tindak Lanjut -->
        <div class="question-detail-actions">
            <button
                type="button"
                class="question-followup-btn"
                id="markQuestionFollowup"
            >
                <i class="bi bi-flag"></i>
                Tandai untuk Ditindaklanjuti
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
