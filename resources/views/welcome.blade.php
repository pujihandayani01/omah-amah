<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Omah Amah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #426b50;
            --primary-dark: #2f503a;
            --cream: #f7f7f1;
            --text: #24352a;
            --muted: #7b847c;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background-color:#F6FAFD;
        }

        .login-card {
            width: 100%;
            max-width: 440px;
            padding: 42px;
          
        }

        .brand {
            text-align: center;
            margin-bottom: 35px;
        }

        .brand-icon {
            width: 62px;
            height: 62px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: #fff;
            background: var(--primary);
            border-radius: 19px;
            font-size: 32px;
            box-shadow: 0 8px 18px rgba(66, 107, 80, 0.2);
        }

        .brand-name {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .brand-name span {
            color: var(--primary);
        }

        .brand-subtitle {
            margin-top: 6px;
            color: var(--muted);
            font-size: 12px;
            letter-spacing: 1.4px;
            text-transform: uppercase;
        }

        .form-heading {
            margin-bottom: 10px;
        }

        .form-heading h1 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -0.8px;
            margin-bottom: 9px;
        }

        .form-heading p {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
            margin: 0;
        }

        .form-label {
            margin-bottom: 9px;
            font-size: 13px;
            font-weight: 700;
        }

        .input-wrap {
            position: relative;
            margin-bottom: 21px;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #899489;
            font-size: 16px;
            pointer-events: none;
        }

        .form-control {
            height: 51px;
            padding: 12px 15px 12px 44px;
            border: 1px solid #e3e7df;
            border-radius: 11px;
            background: #fcfcfa;
            font-size: 13px;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(66, 107, 80, 0.10);
            background: #fff;
        }

        .password-input {
            padding-right: 75px;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 13px;
            transform: translateY(-50%);
            padding: 5px;
            border: none;
            background: transparent;
            color: var(--primary);
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin: -1px 0 25px;
            font-size: 12px;
        }

        .form-check-label {
            color: var(--muted);
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .forgot-link,
        .register-link {
            color: var(--primary);
            font-weight: 700;
            text-decoration: none;
        }

        .forgot-link:hover,
        .register-link:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            height: 51px;
            border: none;
            border-radius: 11px;
            background-color:#1B3D63;
            color: white;
            font-size: 14px;
            font-weight: 700;
            transition: 0.2s ease;
        }

        .btn-login:hover {
            background: var(--primary-dark);
            color: white;
            transform: translateY(-1px);
        }

        .register-text {
            margin: 24px 0 0;
            text-align: center;
            color: var(--muted);
            font-size: 13px;
        }

        .security-note {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #edf0e9;
            color: #899187;
            font-size: 11px;
            text-align: center;
        }

        .security-note span {
            color: var(--primary);
            font-size: 15px;
        }

        .copyright {
            margin-top: 23px;
            text-align: center;
            color: #92998f;
            font-size: 11px;
        }

        @media (max-width: 480px) {
            body {
                padding: 16px;
            }

            .login-card {
                padding: 30px 23px;
                border-radius: 20px;
            }

            .brand {
                margin-bottom: 30px;
            }

            .form-heading h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

    <main class="login-card">
        <div class="form-heading">
            <h1>Login Admin</h1>
            <p>Masukan akun administrator untuk melanjutkan</p>
        </div>

        <form id="loginForm" novalidate>
            <div>
                <label for="email" class="form-label">Email</label>

                <div class="input-wrap">
                    <span class="input-icon">✉</span>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="admin@omahamah.com"
                        autocomplete="username"
                        required
                    >
                </div>
            </div>

            <div>
                <label for="password" class="form-label">Password</label>

                <div class="input-wrap">
                    <span class="input-icon">♙</span>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control password-input"
                        placeholder="Masukan Kata Sandi"
                        autocomplete="current-password"
                        required
                    >

                    <button
                        type="button"
                        class="password-toggle"
                        id="togglePassword"
                    >
                        Lihat
                    </button>
                </div>
            </div>

            <div class="form-options">
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="remember"
                    >

                    <label class="form-check-label" for="remember">
                        Ingat saya
                    </label>
                </div>

                <a href="#" class="forgot-link"
                   onclick="return false;">
                    Lupa Kata Sandi.?
                </a>
            </div>

            <button type="submit" class="btn btn-login">
                Masuk Ke Dashboard
            </button>

        </form>

        <p class="register-text" style="font-size:10px;">
            Halaman Khusus administrator Omah Amah
            <!-- <a href="/register" class="register-link">
                Daftar sekarang
            </a> -->
        </p>

    </main>

    <script>
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function () {
        const isPassword = passwordInput.type === 'password';

        passwordInput.type = isPassword ? 'text' : 'password';
        togglePassword.textContent = isPassword ? 'Sembunyi' : 'Lihat';
    });

    // Login frontend: langsung menuju dashboard
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        event.preventDefault();
        window.location.href = '/dashboard';
    });
</script>

</body>
</html>