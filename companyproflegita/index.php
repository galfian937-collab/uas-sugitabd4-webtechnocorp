<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoCorp | Solusi Digital Masa Depan</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; color: #333; }
        .hero { 
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1350&q=80'); 
            height: 80vh; 
            background-size: cover; 
            background-position: center;
            display: flex; 
            align-items: center; 
            color: white; 
        }
        .section-padding { padding: 100px 0; }
        .card { transition: all 0.3s ease; border: none; border-radius: 15px; }
        .card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }
        .modal-content { border-radius: 20px; border: none; overflow: hidden; }
        .btn-primary { padding: 12px 30px; border-radius: 8px; font-weight: 600; }
        .text-primary { color: #0d6efd !important; }
    </style>
</head>
<body>

    <?php 
    if(file_exists('navbar.php')) {
        include 'navbar.php'; 
    }
    ?>

    <header id="home" class="hero text-center">
        <div class="container">
            <h1 class="display-2 fw-bold mb-3">Inovasi Tanpa Batas</h1>
            <p class="lead mb-5 opacity-75">Membantu bisnis Anda bertransformasi ke era digital dengan solusi teknologi kelas dunia.</p>
            <button class="btn btn-primary btn-lg shadow-lg" data-bs-toggle="modal" data-bs-target="#modalKonsultasi">Mulai Konsultasi Gratis</button>
        </div>
    </header>

    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-4 shadow-lg" alt="Tentang Kami">
                </div>
                <div class="col-md-6 ps-md-5">
                    <h6 class="text-primary fw-bold text-uppercase mb-2">Siapa Kami</h6>
                    <h2 class="fw-bold display-6 mb-4">Membangun Masa Depan Teknologi Sejak 2015</h2>
                    <p class="text-muted mb-4 lead">TechnoCorp adalah mitra strategis untuk pengembangan software, infrastruktur cloud, dan keamanan siber yang telah dipercaya oleh ratusan perusahaan global.</p>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalAbout">Selengkapnya Tentang Kami</button>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section-padding bg-light">
        <div class="container text-center">
            <h6 class="text-primary fw-bold text-uppercase mb-2">Layanan Terbaik</h6>
            <h2 class="fw-bold mb-5 display-6">Solusi Digital Untuk Anda</h2>
            <div class="row">
                <?php
                $services = [
                    [
                        'id' => 'web',
                        'title' => 'Web Development', 
                        'desc' => 'Website responsif, cepat, dan SEO-friendly.', 
                        'icon' => '🌐',
                        'detail' => 'Kami menggunakan teknologi termutakhir seperti React, Laravel, dan Node.js untuk memastikan website Anda memiliki performa maksimal dan keamanan tinggi.'
                    ],
                    [
                        'id' => 'mobile',
                        'title' => 'Mobile Apps', 
                        'desc' => 'Aplikasi Android & iOS kustom sesuai kebutuhan.', 
                        'icon' => '📱',
                        'detail' => 'Tim kami ahli dalam Flutter dan Native development, menciptakan pengalaman pengguna yang halus dan desain yang intuitif.'
                    ],
                    [
                        'id' => 'cloud',
                        'title' => 'Cloud Hosting', 
                        'desc' => 'Infrastruktur server aman dengan uptime 99%.', 
                        'icon' => '☁️',
                        'detail' => 'Layanan cloud hosting kami dirancang untuk skala besar, mendukung trafik tinggi tanpa gangguan dengan enkripsi data tercanggih.'
                    ]
                ];

                foreach($services as $s): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm p-5">
                        <div class="display-4 mb-3"><?php echo $s['icon']; ?></div>
                        <h4 class="fw-bold mb-3"><?php echo $s['title']; ?></h4>
                        <p class="text-muted mb-4"><?php echo $s['desc']; ?></p>
                        <button class="btn btn-link text-decoration-none fw-bold" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $s['id']; ?>">Lihat Detail <i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>

                <div class="modal fade" id="modal-<?php echo $s['id']; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content shadow-lg">
                            <div class="modal-body p-5 text-center">
                                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                                <div class="display-1 mb-4"><?php echo $s['icon']; ?></div>
                                <h3 class="fw-bold mb-3"><?php echo $s['title']; ?></h3>
                                <p class="text-muted mb-4 lead"><?php echo $s['detail']; ?></p>
                                <hr class="my-4">
                                <p class="small text-secondary mb-4">Tertarik dengan layanan ini? Diskusikan dengan tim ahli kami sekarang.</p>
                                <button class="btn btn-dark w-100 py-3 fw-bold" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalKonsultasi">Tanya Penawaran Harga</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-5">
        <div class="container text-center">
            <h5 class="fw-bold mb-3">TECHNO<span class="text-primary">CORP</span></h5>
            <p class="opacity-50 mb-4">Inovasi Digital Masa Depan.</p>
            <p class="mb-0 small opacity-50">&copy; <?php echo date("Y"); ?> TechnoCorp. All Rights Reserved. Sugita Ferdianti.</p>
        </div>
    </footer>

    <div class="modal fade" id="modalKonsultasi" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg">
                <div class="modal-header bg-primary text-white p-4">
                    <h5 class="modal-title fw-bold"><i class="bi bi-chat-left-dots-fill me-2"></i> Konsultasi Gratis</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="https://formspree.io/f/mlggrzgl" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="fName" placeholder="Nama" required>
                            <label for="fName">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="fEmail" placeholder="Email" required>
                            <label for="fEmail">Alamat Email</label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea name="message" class="form-control" id="fMsg" style="height: 120px" placeholder="Pesan" required></textarea>
                            <label for="fMsg">Bagaimana kami bisa membantu Anda?</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-3 shadow">Kirim Permintaan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAbout" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content shadow-lg">
                <div class="modal-body p-0">
                    <div class="row g-0">
                        <div class="col-lg-5 d-none d-lg-block" style="background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80') center/cover;">
                        </div>
                        <div class="col-lg-7 p-5">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <h3 class="fw-bold">Visi & Misi Kami</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <h6 class="text-primary fw-bold mb-2">VISI</h6>
                            <p class="text-muted mb-4 small">Menjadi pemimpin global dalam transformasi digital yang memberdayakan bisnis dari berbagai sektor melalui teknologi yang cerdas dan inovatif.</p>
                            <h6 class="text-primary fw-bold mb-3">MISI UTAMA</h6>
                            <ul class="list-unstyled">
                                <li class="mb-3 text-muted small d-flex align-items-start">
                                    <i class="bi bi-patch-check-fill text-success me-2 mt-1"></i>
                                    Menyediakan solusi teknologi yang tepat sasaran dan efisien bagi mitra.
                                </li>
                                <li class="mb-3 text-muted small d-flex align-items-start">
                                    <i class="bi bi-patch-check-fill text-success me-2 mt-1"></i>
                                    Membangun infrastruktur digital yang aman dan skalabel.
                                </li>
                                <li class="mb-3 text-muted small d-flex align-items-start">
                                    <i class="bi bi-patch-check-fill text-success me-2 mt-1"></i>
                                    Mendorong inovasi berkelanjutan di bidang AI dan Cloud Computing.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>