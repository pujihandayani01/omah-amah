
document.addEventListener("DOMContentLoaded", function () {
    const drawer = document.getElementById("questionDetailDrawer");
    const overlay = document.getElementById("questionDetailOverlay");
    const closeButton = document.getElementById("closeQuestionDetail");
    const notice = document.getElementById("questionUpdateNotice");
    const noticeText = document.getElementById("questionUpdateNoticeText");
    const handlingStatus = document.getElementById("detailHandlingStatus");
    const processButton = document.getElementById("markQuestionInProgress");
    const completeButton = document.getElementById("markQuestionComplete");

    if (!drawer || !overlay) return;

    let selectedRow = null;

    const statusLabels = {
        baru: "Baru",
        diproses: "Dalam Proses",
        selesai: "Selesai"
    };

    function openDrawer(row) {
        selectedRow = row;

        const senderName =
            row.querySelector(".question-sender strong")?.textContent.trim() || "Pengguna";

        const avatar =
            row.querySelector(".question-avatar")?.textContent.trim() || "U";

        const question =
            row.querySelector(".question-subject")?.textContent.trim() || "Pertanyaan pengguna";

        const category = row.dataset.category || "lainnya";
        const source = row.dataset.source || "pengguna";
        const date = row.dataset.date || "";
        const status = row.dataset.status || "baru";

        const formattedCategory =
            category.charAt(0).toUpperCase() + category.slice(1);

        const formattedDate = date
            ? new Date(date + "T12:00:00").toLocaleDateString("id-ID", {
                day: "numeric",
                month: "short",
                year: "numeric"
            })
            : "-";

        document.getElementById("detailSenderName").textContent = senderName;
        document.getElementById("detailSenderAvatar").textContent = avatar;
        document.getElementById("detailConversationAvatar").textContent = avatar;
        document.getElementById("detailConversationName").textContent = senderName;
        document.getElementById("detailReceivedDate").textContent = formattedDate;
        document.getElementById("detailSource").textContent =
            source === "chatbot" ? "Chatbot AI" : "Pengguna";
        document.getElementById("detailCategory").textContent = formattedCategory;
        document.getElementById("detailQuestionText").textContent = question;

        // Contoh percakapan dan jawaban berdasarkan pertanyaan yang dipilih.
        const conversationText = category === "kamar"
            ? "Saya berencana masuk bulan November. " + question
            : question;

        document.getElementById("detailConversationText").textContent =
            conversationText;

        document.getElementById("detailAIAnswer").textContent =
            category === "kamar"
                ? "Ketersediaan kamar standar untuk November belum dapat dipastikan dari informasi yang tersedia. Silakan konfirmasi kepada pengelola Omah Amah."
                : category === "laundry"
                    ? "Proses laundry bergantung pada jumlah pakaian dan antrean layanan. Silakan konfirmasi estimasi waktu kepada pengelola Omah Amah."
                    : "Informasi ini perlu diperiksa berdasarkan data layanan Omah Amah. Silakan konfirmasi kepada pengelola sebelum memberikan jawaban pasti.";

        updateDrawerStatus(status);
        notice.hidden = true;

        drawer.classList.add("is-open");
        overlay.classList.add("is-visible");
        drawer.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
        closeButton?.focus();
    }

    function closeDrawer() {
        drawer.classList.remove("is-open");
        overlay.classList.remove("is-visible");
        drawer.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }

    function updateDrawerStatus(status) {
        handlingStatus.textContent = statusLabels[status] || "Baru";
        handlingStatus.className = "question-status";

        if (status === "baru") {
            handlingStatus.classList.add("status-baru");
        } else if (status === "diproses") {
            handlingStatus.classList.add("status-diproses");
        } else {
            handlingStatus.classList.add("status-selesai");
        }
    }

    function updateSelectedStatus(status) {
        if (!selectedRow) return;

        selectedRow.dataset.status = status;
        updateDrawerStatus(status);

        const statusCell = selectedRow.querySelector(".question-status");

        if (statusCell) {
            statusCell.textContent = statusLabels[status];
            statusCell.className = "question-status";

            if (status === "baru") {
                statusCell.classList.add("status-baru");
            } else if (status === "diproses") {
                statusCell.classList.add("status-diproses");
            } else {
                statusCell.classList.add("status-selesai");
            }
        }

        noticeText.textContent =
            "Status berhasil diperbarui menjadi " + statusLabels[status] + ".";

        notice.hidden = false;
    }

    // Klik ikon mata pada tabel.
    document.querySelectorAll(".question-more-btn").forEach(function (button) {
        button.addEventListener("click", function () {
            const row = this.closest("tr");

            if (row) {
                openDrawer(row);
            }
        });
    });

    closeButton?.addEventListener("click", closeDrawer);
    overlay.addEventListener("click", closeDrawer);

    document.addEventListener("keydown", function (event) {
        if (event.key === "Escape" && drawer.classList.contains("is-open")) {
            closeDrawer();
        }
    });

    processButton?.addEventListener("click", function () {
        updateSelectedStatus("diproses");
    });

    completeButton?.addEventListener("click", function () {
        updateSelectedStatus("selesai");
    });
});
