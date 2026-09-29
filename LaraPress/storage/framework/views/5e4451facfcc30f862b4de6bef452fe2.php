<!DOCTYPE html>
<html>
<head>
    <title>Tentang Kami - LaraPress</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(135deg, #f5f7ff, #eef2ff);
        color: #1f2937;
        min-height: 100vh;
    }

    /* Navbar */
    .navbar {
        background: #4f46e5;
        color: white;
        padding: 18px 8%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    .nav-links {
        display: flex;
        gap: 25px;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 15px;
        transition: 0.3s;
    }

    .nav-links a:hover {
        color: #c7d2fe;
    }

    /* Container */
    .container {
        max-width: 1000px;
        margin: 70px auto;
        padding: 0 20px;
    }

    /* About Card */
    .about-card {
        background: white;
        border-radius: 24px;
        padding: 55px;
        box-shadow: 0 15px 40px rgba(79, 70, 229, 0.12);
        text-align: center;
    }

    .about-icon {
        font-size: 65px;
        margin-bottom: 20px;
    }

    .about-card h1 {
        color: #312e81;
        font-size: 40px;
        margin-bottom: 20px;
    }

    .about-card .description {
        max-width: 700px;
        margin: 0 auto;
        color: #6b7280;
        font-size: 18px;
        line-height: 1.8;
    }

    /* Feature */
    .features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 30px;
    }

    .feature-card {
        background: white;
        padding: 30px 25px;
        border-radius: 18px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-6px);
    }

    .feature-icon {
        font-size: 38px;
        margin-bottom: 15px;
    }

    .feature-card h3 {
        color: #312e81;
        margin-bottom: 10px;
    }

    .feature-card p {
        color: #6b7280;
        line-height: 1.6;
        font-size: 15px;
    }

    /* Buttons */
    .buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 35px;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-block;
        padding: 14px 25px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-primary {
        background: #4f46e5;
        color: white;
    }

    .btn-primary:hover {
        background: #3730a3;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background: #eef2ff;
        color: #4f46e5;
    }

    .btn-secondary:hover {
        background: #e0e7ff;
        transform: translateY(-2px);
    }

    /* Footer */
    footer {
        margin-top: 70px;
        background: #111827;
        color: #9ca3af;
        text-align: center;
        padding: 25px;
    }

    footer strong {
        color: white;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar {
            padding: 18px 5%;
        }

        .nav-links {
            gap: 12px;
        }

        .container {
            margin: 40px auto;
        }

        .about-card {
            padding: 40px 25px;
        }

        .about-card h1 {
            font-size: 32px;
        }

        .about-card .description {
            font-size: 16px;
        }

        .features {
            grid-template-columns: 1fr;
        }
    }
</style>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar">
    <div class="logo">✨ LaraPress</div>

    <div class="nav-links">
        <a href="/">Beranda</a>
        <a href="/tentang-kami">Tentang</a>
        <a href="/kontak">Kontak</a>
    </div>
</nav>

<!-- Main Content -->
<main class="container">

    <section class="about-card">

        <div class="about-icon">👋</div>

        <h1>Tentang LaraPress</h1>

        <p class="description">
            LaraPress adalah sebuah proyek blog sederhana yang dibuat
            untuk mempelajari dasar-dasar framework
            <strong>Laravel 12</strong>.
            Website ini menjadi tempat untuk bereksperimen,
            belajar, dan mengembangkan berbagai fitur web
            menggunakan Laravel.
        </p>

        <div class="buttons">
            <a href="/" class="btn btn-primary">
                ← Kembali ke Beranda
            </a>

            <a href="/kontak" class="btn btn-secondary">
                Hubungi Kami →
            </a>
        </div>

    </section>

    <!-- Features -->
    <section class="features">

        <div class="feature-card">
            <div class="feature-icon">🚀</div>
            <h3>Belajar Laravel</h3>
            <p>
                Mempelajari konsep dasar Laravel dan bagaimana
                membangun aplikasi web modern.
            </p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">💻</div>
            <h3>Pengembangan Web</h3>
            <p>
                Mengembangkan halaman web dengan struktur yang
                rapi, modern, dan responsif.
            </p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">🎯</div>
            <h3>Terus Berkembang</h3>
            <p>
                LaraPress dibuat sebagai proyek pembelajaran
                yang terus dikembangkan dengan fitur baru.
            </p>
        </div>

    </section>

</main>

<!-- Footer -->
<footer>
    &copy; 2026 <strong>LaraPress</strong>. Semua hak dilindungi.
</footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\LaraPress\resources\views/about.blade.php ENDPATH**/ ?>