<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang di LaraPress</title>
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

    .hero {
        max-width: 1100px;
        margin: 80px auto;
        padding: 60px 40px;
        text-align: center;
        background: white;
        border-radius: 24px;
        box-shadow: 0 15px 40px rgba(79, 70, 229, 0.12);
    }

    .hero .icon {
        font-size: 60px;
        margin-bottom: 20px;
    }

    .hero h1 {
        font-size: 42px;
        color: #312e81;
        margin-bottom: 18px;
    }

    .hero p {
        font-size: 18px;
        color: #6b7280;
        line-height: 1.7;
        max-width: 650px;
        margin: 0 auto 35px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
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

    .features {
        max-width: 1100px;
        margin: 0 auto 70px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        padding: 0 20px;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 18px;
        text-align: center;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-icon {
        font-size: 35px;
        margin-bottom: 15px;
    }

    .card h3 {
        margin-bottom: 10px;
        color: #312e81;
    }

    .card p {
        color: #6b7280;
        line-height: 1.6;
    }

    footer {
        text-align: center;
        background: #111827;
        color: #9ca3af;
        padding: 25px;
    }

    footer strong {
        color: white;
    }

    @media (max-width: 768px) {
        .navbar {
            padding: 18px 5%;
        }

        .nav-links {
            gap: 12px;
        }

        .hero {
            margin: 40px 20px;
            padding: 45px 25px;
        }

        .hero h1 {
            font-size: 32px;
        }

        .features {
            grid-template-columns: 1fr;
        }
    }
</style>
</head>
<body>
    <nav class="navbar">
    <div class="logo">✨ LaraPress</div>

    <div class="nav-links">
        <a href="/">Beranda</a>
        <a href="/tentang-kami">Tentang</a>
        <a href="/kontak">Kontak</a>
    </div>
</nav>

<section class="hero">
    <div class="icon">📝</div>

    <h1>Selamat Datang di LaraPress</h1>

    <p>
        Tempat berbagi cerita, informasi, dan inspirasi.
        Jelajahi berbagai artikel menarik yang kami sajikan
        untuk menemani perjalanan Anda.
    </p>

    <div class="buttons">
        <a href="/tentang-kami" class="btn btn-primary">
            Tentang Kami
        </a>

        <a href="/kontak" class="btn btn-secondary">
            Hubungi Kami
        </a>
    </div>
</section>

<section class="features">

    <div class="card">
        <div class="card-icon">📚</div>
        <h3>Artikel Menarik</h3>
        <p>
            Temukan berbagai artikel informatif dan menarik
            di LaraPress.
        </p>
    </div>

    <div class="card">
        <div class="card-icon">💡</div>
        <h3>Inspirasi</h3>
        <p>
            Dapatkan ide dan inspirasi baru dari berbagai
            tulisan yang kami bagikan.
        </p>
    </div>

    <div class="card">
        <div class="card-icon">💬</div>
        <h3>Hubungi Kami</h3>
        <p>
            Punya pertanyaan atau saran? Jangan ragu untuk
            menghubungi tim LaraPress.
        </p>
    </div>

</section>

<footer>
    &copy; 2026 <strong>LaraPress</strong>. Semua hak dilindungi.
</footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\LaraPress\resources\views/welcome.blade.php ENDPATH**/ ?>