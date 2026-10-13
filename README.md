<?php
// biodata.php
function statusKeaktifan(int $semester): string {
    if ($semester >= 5) return 'Aktif - Tingkat Akhir / Lanjutan';
    return 'Aktif - Tingkat Dasar';
}

$mahasiswa = [
    'nim' => '4524210083',
    'nama' => 'Reevan Azepha Islamy Iskandar',
    'prodi' => 'Pemrograman Berbasis Web (Installasi Pengenalan PHP Dasar dan OOP PHP)',
    'semester' => 5,
    'status_projek' => 'Laravel 12 & Tailwind CSS',
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pengembang - SMP Mentari Ceria</title>
    <!-- Mengadopsi style modern Tailwind-like -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #ffffff;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        h1 {
            font-size: 1.5rem;
            color: #0f172a;
            margin-bottom: 1rem;
            border-bottom: 2px solid #38b2ac;
            padding-bottom: 0.5rem;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
        }
        li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.95rem;
        }
        li:last-child {
            border-bottom: none;
        }
        .badge {
            display: inline-block;
            background-color: #38b2ac;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Profil Pengembang Website</h1>
        <ul>
            <?php foreach ($mahasiswa as $kunci => $nilai): ?>
                <li><strong><?= ucwords(str_replace('_', ' ', $kunci)) ?>:</strong> <?= htmlspecialchars((string)$nilai) ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Status Akademik: <span class="badge"><?= statusKeaktifan($mahasiswa['semester']) ?></span></p>
    </div>
</body>
</html>
