<!DOCTYPE html>
<html>
<head>
    <title>Kontak - LaraPress</title>
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

    /* Contact Header */
    .contact-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .contact-header .icon {
        font-size: 60px;
        margin-bottom: 15px;
    }

    .contact-header h1 {
        color: #312e81;
        font-size: 40px;
        margin-bottom: 15px;
    }

    .contact-header p {
        color: #6b7280;
        font-size: 18px;
    }

    /* Contact Cards */
    .contact-wrapper {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    .contact-card {
        background: white;
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
        text-align: center;
        transition: 0.3s;
    }

    .contact-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(79, 70, 229, 0.12);
    }

    .contact-icon {
        width: 70px;
        height: 70px;
        margin: 0 auto 20px;
        border-radius: 50%;
        background: #eef2ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
    }

    .contact-card h2 {
        color: #312e81;
        font-size: 22px;
        margin-bottom: 12px;
    }

    .contact-card p {
        color: #6b7280;
        margin-bottom: 8px;
    }

    .contact-card a {
        color: #4f46e5;
        text-decoration: none;
        font-weight: bold;
        word-break: break-word;
    }

    .contact-card a:hover {
        color: #3730a3;
    }

    /* Navigation Buttons */
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

        .contact-header h1 {
            font-size: 32px;
        }

        .contact-header p {
            font-size: 16px;
        }

        .contact-wrapper {
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

    <section class="contact-header">
        <div class="icon">📞</div>

        <h1>Kontak LaraPress</h1>

        <p>
            Silakan hubungi kami melalui informasi kontak
            yang tersedia di bawah ini.
        </p>
    </section>

    <!-- Contact Information -->
    <section class="contact-wrapper">

        <div class="contact-card">
            <div class="contact-icon">📧</div>

            <h2>Email</h2>

            <p>Hubungi kami melalui email:</p>

            <a href="mailto:relevan.aii@gmail.com">
                relevan.aii@gmail.com
            </a>
        </div>

        <div class="contact-card">
            <div class="contact-icon">📱</div>

            <h2>Nomor Telepon</h2>

            <p>Hubungi kami melalui telepon:</p>

            <a href="tel:+6282123089670">
                +6282123089670
            </a>
        </div>

    </section>

    <!-- Navigation -->
    <div class="buttons">

        <a href="/tentang-kami" class="btn btn-secondary">
            ← Tentang Kami
        </a>

        <a href="/" class="btn btn-primary">
            Kembali ke Beranda →
        </a>

    </div>

</main>

<!-- Footer -->
<footer>
    &copy; 2026 <strong>LaraPress</strong>. Semua hak dilindungi.
</footer>
</body>
</html>