
document.addEventListener('DOMContentLoaded', function () {
    // ===== PINDAH ANTAR PANEL =====
    const menuItems = document.querySelectorAll('[data-settings]');
    const panels = document.querySelectorAll('[data-settings-panel]');

    function showSettingsPanel(name) {
        panels.forEach(function (panel) {
            panel.hidden = panel.dataset.settingsPanel !== name;
        });

        menuItems.forEach(function (item) {
            const active = item.dataset.settings === name;
            item.classList.toggle('active', active);
            item.setAttribute('aria-pressed', String(active));
        });
    }

    menuItems.forEach(function (item) {
        item.addEventListener('click', function () {
            showSettingsPanel(item.dataset.settings);
        });
    });

    showSettingsPanel('profil');


    // ===== PESAN FORM =====
    function showMessage(id, message, isError = false) {
        const element = document.getElementById(id);
        if (!element) return;

        element.textContent = message;
        element.hidden = false;
        element.classList.toggle('error', isError);
    }


    // ===== PREVIEW FOTO PROFIL =====
    const photoInput = document.getElementById('adminProfilePhoto');
    const photoPreview = document.getElementById('adminProfilePreview');

    if (photoInput && photoPreview) {
        photoInput.addEventListener('change', function () {
            const file = photoInput.files[0];
            if (!file) return;

            const validTypes = ['image/jpeg', 'image/png'];

            if (!validTypes.includes(file.type)) {
                showMessage(
                    'adminProfileMessage',
                    'Pilih foto dengan format JPG atau PNG.',
                    true
                );
                photoInput.value = '';
                return;
            }

            if (file.size > 5 * 1024 * 1024) {
                showMessage(
                    'adminProfileMessage',
                    'Ukuran foto maksimal 5 MB.',
                    true
                );
                photoInput.value = '';
                return;
            }

            photoPreview.src = URL.createObjectURL(file);

            const message = document.getElementById('adminProfileMessage');
            if (message) message.hidden = true;
        });
    }


    // ===== TAMPILKAN / SEMBUNYIKAN PASSWORD =====
    document.querySelectorAll('.toggle-password').forEach(function (button) {
        button.addEventListener('click', function () {
            const input = document.getElementById(button.dataset.target);
            if (!input) return;

            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';

            button.innerHTML = isPassword
                ? '<i class="bi bi-eye-slash"></i>'
                : '<i class="bi bi-eye"></i>';

            button.setAttribute(
                'aria-label',
                isPassword ? 'Sembunyikan kata sandi' : 'Tampilkan kata sandi'
            );
        });
    });


    // ===== PROFIL ADMIN =====
    const profileForm = document.getElementById('adminProfileForm');

    if (profileForm) {
        profileForm.addEventListener('submit', function (event) {
            event.preventDefault();

            if (!profileForm.reportValidity()) return;

            showMessage(
                'adminProfileMessage',
                'Validasi berhasil. Penyimpanan permanen memerlukan koneksi ke backend Laravel.'
            );
        });
    }


    // ===== KEAMANAN AKUN =====
    const securityForm = document.getElementById('securityForm');

    if (securityForm) {
        const currentPassword = document.getElementById('currentPassword');
        const newPassword = document.getElementById('newPassword');
        const confirmPassword = document.getElementById('confirmPassword');
        const strengthBar = document.getElementById('passwordStrengthBar');
        const strengthText = document.getElementById('passwordStrengthText');
        const matchText = document.getElementById('passwordMatchText');

        function updateStrength() {
            const value = newPassword.value;

            if (!value) {
                strengthBar.style.width = '0%';
                strengthText.textContent = 'Kekuatan kata sandi';
                strengthText.style.color = '';
                return;
            }

            let score = 0;
            if (value.length >= 8) score++;
            if (/[a-z]/.test(value) && /[A-Z]/.test(value)) score++;
            if (/\d/.test(value)) score++;
            if (/[^a-zA-Z0-9]/.test(value)) score++;

            const levels = [
                { width: '25%', text: 'Lemah', color: '#e05252' },
                { width: '50%', text: 'Cukup', color: '#e6a23c' },
                { width: '75%', text: 'Baik', color: '#4c9ad4' },
                { width: '100%', text: 'Kuat', color: '#269c68' }
            ];

            const level = levels[score - 1] || levels[0];

            strengthBar.style.width = level.width;
            strengthBar.style.background = level.color;
            strengthText.textContent = level.text;
            strengthText.style.color = level.color;
        }

        function updateMatch() {
            if (!confirmPassword.value) {
                matchText.textContent = '';
                return;
            }

            const matches = newPassword.value === confirmPassword.value;
            matchText.textContent = matches
                ? '✓ Kata sandi cocok.'
                : 'Kata sandi belum cocok.';
            matchText.style.color = matches ? '#218653' : '#c33b3b';
        }

        newPassword.addEventListener('input', function () {
            updateStrength();
            updateMatch();
        });

        confirmPassword.addEventListener('input', updateMatch);

        securityForm.addEventListener('submit', function (event) {
            event.preventDefault();

            if (!securityForm.reportValidity()) return;

            if (newPassword.value === currentPassword.value) {
                showMessage(
                    'securityMessage',
                    'Kata sandi baru harus berbeda dari kata sandi saat ini.',
                    true
                );
                return;
            }

            if (newPassword.value !== confirmPassword.value) {
                showMessage(
                    'securityMessage',
                    'Konfirmasi kata sandi baru tidak cocok.',
                    true
                );
                confirmPassword.focus();
                return;
            }

            showMessage(
                'securityMessage',
                'Validasi berhasil. Hubungkan ke autentikasi Laravel untuk benar-benar mengubah kata sandi.'
            );
        });

        securityForm.addEventListener('reset', function () {
            setTimeout(function () {
                strengthBar.style.width = '0%';
                strengthText.textContent = 'Kekuatan kata sandi';
                strengthText.style.color = '';
                matchText.textContent = '';

                const message = document.getElementById('securityMessage');
                message.hidden = true;
                message.classList.remove('error');
            }, 0);
        });
    }


    // ===== NOTIFIKASI =====
    const notificationForm = document.getElementById('notificationForm');

    if (notificationForm) {
        notificationForm.addEventListener('submit', function (event) {
            event.preventDefault();

            showMessage(
                'notificationMessage',
                'Preferensi berhasil divalidasi. Hubungkan ke backend agar pilihan tersimpan permanen.'
            );
        });
    }


    // ===== INFORMASI KOST =====
    const kostForm = document.getElementById('kostForm');

    if (kostForm) {
        kostForm.addEventListener('submit', function (event) {
            event.preventDefault();

            if (!kostForm.reportValidity()) return;

            showMessage(
                'kostMessage',
                'Informasi berhasil divalidasi. Hubungkan ke backend Laravel agar data kost tersimpan permanen.'
            );
        });
    }
});
