<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Es Brasil - Es Krim & Es Puter</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset & Variabel */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-red: #e60012;
            --dark-bg: #1c1c1c;
            --text-dark: #333333;
            --text-light: #ffffff;
            --gray-light: #f9f9f9;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            color: var(--text-dark);
            background-color: var(--text-light);
            overflow-x: hidden;
        }

        /* Helper untuk Layout "table-like" yang sudah ada */
        .flex-container {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        .flex-col {
            display: table-cell;
            vertical-align: middle;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* ==========================================
   HEADER & NAVBAR
========================================== */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;

            padding: 20px 5%;

            background: rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            box-shadow: 0 8px 25px rgba(0, 0, 0, .10);

            z-index: 1000;

            transition: all .3s ease;
        }

        /* efek saat scroll */
        header.scrolled {
            background: rgba(0, 0, 0, .75);
            padding: 15px 5%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
        }

        /* layout */
        .nav-table {
            display: table;
            width: 100%;
        }

        .nav-logo-cell {
            display: table-cell;
            vertical-align: middle;
            width: 20%;
        }

        .nav-menu-cell {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
            width: 80%;
        }

        /* ==========================================
   LOGO
========================================== */
        .nav-logo {
            position: relative;

            color: var(--text-light);

            font-size: 42px;
            font-weight: 800;
            font-style: italic;

            text-decoration: none;
            letter-spacing: .5px;

            transition: all .3s ease;
        }

        .nav-logo span {
            color: var(--primary-red);
        }

        .nav-logo:hover {
            transform: scale(1.05);
        }

        /* ==========================================
   MENU
========================================== */
        .nav-menu a {
            position: relative;

            color: var(--text-light);

            text-decoration: none;

            margin-left: 35px;

            font-size: 17px;
            font-weight: 600;

            opacity: .85;

            transition: all .3s ease;
        }

        /* garis animasi */
        .nav-menu a::after {
            content: "";

            position: absolute;
            left: 50%;
            bottom: -10px;

            width: 0;
            height: 3px;

            background: var(--primary-red);

            border-radius: 20px;

            transform: translateX(-50%);
            transition: .3s ease;
        }

        /* hover */
        .nav-menu a:hover {
            color: var(--primary-red);
            opacity: 1;

            transform: translateY(-2px);
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        /* active */
        .nav-menu a.active {
            color: var(--primary-red);
            opacity: 1;
        }

        .nav-menu a.active::after {
            width: 100%;
        }

        /* Hero */
        .hero {
            height: calc(100vh - 80px);
            background-image: url("{{ asset('assets/logo4.png') }}");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            margin-top: 80px;
        }

        .hero-cell {
            height: calc(100vh - 80px);
        }

        .hero-content {
            max-width: 550px;
            padding-top: 80px;
        }

        .hero h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .hero h1 span {
            color: var(--primary-red);
            font-style: italic;
        }

        .hero p {
            font-size: 18px;
            font-style: italic;
            line-height: 1.6;
            opacity: 0.9;
        }

        /* Badge Brand */
        .brand-badge-container {
            text-align: center;
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }

        .brand-badge {
            display: inline-block;
            background-color: var(--primary-red);
            color: var(--text-light);
            padding: 20px 60px;
            font-size: 32px;
            font-weight: 700;
            font-style: italic;
            border-radius: 25px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Section umum */
        section {
            padding: 80px 8%;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 40px;
            color: var(--text-dark);
        }

        /* Tentang Kami */
        .about {
            background-color: var(--text-light);
            padding: 80px 0;
            overflow: hidden;
        }

        .about-layout {
  display: grid;
  /* Membuat kolom otomatis: minimal 300px, dan akan memenuhi sisa layar (1fr) */
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 60px;
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
  align-items: center;
}

        .about-text {
            flex: 1.2;
            min-width: 300px;
            font-size: 1.1rem;
            line-height: 1.9;
            color: #444;
            text-align: justify;
        }

        .about-text h2 {
            font-size: 2rem;
            color: var(--primary-red);
            margin-bottom: 20px;
        }

        .highlight {
            color: var(--primary-red);
            font-weight: 700;
        }

        /* Container Slider Gambar */
        /* Container Slider Gambar */
        .about-img-box {
            flex: 1;
            min-width: 300px;
            position: relative;
            /* Penting untuk menumpuk gambar */
            height: 300px;
            /* Sesuaikan dengan tinggi fotomu */
        }

        .slider-container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            /* Durasi total 3 detik, tiap foto muncul 1 detik */
            animation: snapEffect 3s infinite;
        }

        /* Animasi Instan: 0% sampai 33% aktif, langsung hilang setelahnya */
        @keyframes snapEffect {

            0%,
            33% {
                opacity: 1;
            }

            33.1%,
            100% {
                opacity: 0;
            }
        }

        /* Delay tiap slide untuk perpindahan yang sangat cepat */
        .slide:nth-child(1) {
            animation-delay: 0s;
        }

        .slide:nth-child(2) {
            animation-delay: 1s;
        }

        .slide:nth-child(3) {
            animation-delay: 2s;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Menjaga foto tidak gepeng */
            display: block;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        /* Varian Rasa - Banner Merah + Slider */
        .variants {
            background-color: var(--primary-red);
            color: var(--text-light);

            /* 1. Margin atas-bawah tetap, samping 0 agar full-width */
            margin: 40px 0;

            /* 2. Menggunakan nilai yang sama untuk semua sudut agar simetris */
            border-radius: 40px;

            /* 3. Padding tetap agar konten tidak mepet ke tepi */
            padding: 60px 5%;

            /* 4. Pastikan lebar full 100% */
            width: 100%;

            /* Opsional: Jika ingin memberi ruang sedikit agar tidak menempel ke pinggir layar browser */
            box-sizing: border-box;
        }

        .variants .section-title {
            color: var(--text-light);
        }

        .slider-wrap {
            width: 100%;
            overflow: hidden;
        }

        .slider-track {
            display: flex;
            gap: 30px;
            animation: scrollOtomatis 20s linear infinite;
            will-change: transform;
        }

        .slider-wrap:hover .slider-track {
            animation-play-state: paused;
        }

        .grid-card {
            width: 240px;
            flex: 0 0 auto;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(5px);
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .grid-card:hover {
            transform: translateY(-5px);
        }

        .card-img {
            width: 100%;
            height: 180px;
            border-radius: 12px;
            margin-bottom: 15px;
            background-position: center;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .grid-card h3 {
            font-size: 18px;
            font-weight: 600;
            margin-top: 10px;
        }

        /* Tagline */
        /* Wrapper untuk memastikan posisi center */
        .tagline-wrapper {
            display: flex;
            justify-content: center;
            width: 100%;
            margin: 30px 0;
            /* Memberi jarak dengan elemen lain */
        }

        /* Container Tagline */
        .tagline-container {
            background: #ffffff;
            padding: 15px 40px;
            border-radius: 50px;
            /* Lengkungan halus */
            border: 1px solid #eee;
            /* Garis tipis supaya lebih elegan */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            /* Bayangan lembut */
            font-size: 24px;
            color: #555;
            text-align: center;
            width: fit-content;
            /* Ukuran menyesuaikan teks */
        }

        .tagline-container .highlight {
            color: var(--primary-red);
            font-weight: 800;
            text-transform: uppercase;
        }

        /* Tersedia di Toko - Grid jadi Slider */
        .stores {
            background-color: var(--gray-light);
        }

        .store-card {
            width: 220px;
            flex: 0 0 auto;
            background: var(--text-light);
            border-radius: 16px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .store-img {
            width: 100%;
            height: 160px;
            background-color: #ddd;
            border-radius: 10px;
            margin-bottom: 12px;
            background-position: center;
            background-size: cover;
        }

        .store-card p {
            font-weight: 600;
            color: var(--primary-red);
            font-size: 15px;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            color: #444;
            /* Abu-abu tua yang lebih lembut dari hitam */
            letter-spacing: 2px;
            /* Memberi kesan modern dan lega */
            text-transform: uppercase;
            /* Membuat judul terlihat lebih tegas/kokoh */
            margin-bottom: 30px;
            font-weight: 300;
            /* Font yang lebih tipis memberi kesan elegan */
        }

        /* ==========================================
  /* ==========================================
   MITRA KAMI (Partners Section)
========================================== */
        /* ==========================================
   PERBAIKAN TOTAL MITRA KAMI (ANTI-BENTROK)
========================================== */
/* --- SECTION MITRA KAMI (DIPERBARUI) --- */
.partners-section {
    background-color: var(--primary-red);
    padding: 80px 0;
    margin: 60px 0;
    border-radius: 60px; /* Efek melengkung */
    overflow: hidden;
    position: relative;
    width: 100%;
}

.partners-section .section-title {
    color: var(--text-light);
    margin-bottom: 50px;
    text-align: center;
    font-size: 36px;
    font-weight: 700;
}

.partners-slider {
    width: 100%;
    overflow: hidden;
    display: flex;
    align-items: center;
}

.partners-track {
    display: flex;
    gap: 40px; /* Jarak antar kartu */
    animation: scrollOtomatis 25s linear infinite;
    width: max-content; /* Mencegah elemen menumpuk */
}

/* Kartu Mitra - Dibuat lebih besar & melengkung */
.mitra-card {
    width: 260px;
    height: 180px;
    background-color: #ffffff;
    border-radius: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    flex-shrink: 0;
}

.mitra-kotak-foto {
    width: 100%;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 10px;
}

.mitra-kotak-foto img {
    max-width: 80%;
    max-height: 100%;
    object-fit: contain;
}

.mitra-card p {
    font-size: 15px;
    font-weight: 700;
    color: #333333;
    margin-top: 10px;
}

/* Animasi Seamless */
@keyframes scrollOtomatis {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); } /* Sempurna jika track berisi 2x jumlah item */
}
        /*
   LOWONGAN KERJA PREMIUM
 */

        .job-vacancy-section {
            position: relative;
            overflow: hidden;
            padding: 100px 0;
            background: linear-gradient(135deg,
                    #ffffff 0%,
                    #f8f8f8 100%);
        }

        /* dekorasi background */
        .job-vacancy-section::before {
            content: "";
            position: absolute;
            top: -100px;
            left: -100px;

            width: 300px;
            height: 300px;

            border-radius: 50%;
            background: rgba(230, 0, 18, .06);

            filter: blur(40px);
        }

        .job-vacancy-section::after {
            content: "";
            position: absolute;
            right: -100px;
            bottom: -100px;

            width: 350px;
            height: 350px;

            border-radius: 50%;
            background: rgba(40, 167, 69, .06);

            filter: blur(50px);
        }

        .job-vacancy-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 70px;

            max-width: 1200px;
            margin: auto;
            padding: 0 40px;

            position: relative;
            z-index: 2;
        }

        /* ====================
   Gambar
==================== */

        .job-vacancy-graphic {
            position: relative;
        }

        .job-vacancy-graphic::before {
            content: "";
            position: absolute;

            width: 260px;
            height: 260px;

            background: rgba(230, 0, 18, .08);
            border-radius: 50%;

            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);
        }

        .peeking-character {
            width: 280px;
            position: relative;
            z-index: 2;

            animation: float 3s ease-in-out infinite;
            transition: .3s;
        }

        .peeking-character:hover {
            transform: scale(1.05);
        }

        /* ====================
   Konten
==================== */

        .job-vacancy-content {
            max-width: 550px;
        }

        .job-vacancy-title {
            font-size: 48px;
            font-weight: 800;
            line-height: 1.2;

            color: var(--primary-red);

            margin-bottom: 20px;

            animation: fadeUp 1s ease;
        }

        .job-vacancy-text {
            font-size: 18px;
            line-height: 1.8;
            color: #666;

            margin-bottom: 35px;
        }

        /* ====================
   Tombol
==================== */

        .job-vacancy-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;

            background: linear-gradient(135deg,
                    #28a745,
                    #34ce57);

            color: #fff;
            text-decoration: none;

            padding: 18px 35px;

            border-radius: 50px;

            font-size: 18px;
            font-weight: 700;

            box-shadow:
                0 10px 30px rgba(40, 167, 69, .25);

            transition: .3s;
        }

        .job-vacancy-btn:hover {
            transform:
                translateY(-5px) scale(1.03);

            box-shadow:
                0 18px 40px rgba(40, 167, 69, .35);
        }

        .job-vacancy-btn i {
            transition: .3s;
        }

        .job-vacancy-btn:hover i {
            transform: translateX(8px);
        }

        /* ====================
   Animasi
==================== */

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-18px);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Kontak & Jam Operasional */
        /* ==========================================
   CONTACT INFO SECTION
========================================== */
        .contact-info-section {
            background-color: var(--gray-light);
            border-top: 1px solid #eee;
        }

        .info-layout {
            table-layout: fixed;
        }

        /* ==========================================
   CONTACT COLUMN
========================================== */
        .contact-col {
            width: 50%;
            padding-right: 4%;
        }

        .contact-col h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-red);
            margin-bottom: 25px;
        }

        .contact-btn {
            display: flex;
            align-items: center;
            justify-content: space-between;

            width: 100%;
            max-width: 460px;

            padding: 16px 28px;
            margin-bottom: 18px;

            border-radius: 50px;
            text-decoration: none;
            color: var(--text-light);

            font-size: 15px;
            font-weight: 600;

            transition: all 0.3s ease;
        }

        .contact-btn:hover {
            transform: translateY(-4px);
        }

        .contact-btn i {
            margin-right: 12px;
            font-size: 20px;
        }

        .contact-btn .arrow-icon {
            margin-right: 0;
            font-size: 14px;
            opacity: .8;
        }

        .btn-wa {
            background: #25d366;
            box-shadow: 0 8px 20px rgba(37, 211, 102, .2);
        }

        .btn-wa:hover {
            background: #20ba5a;
        }

        .btn-email {
            background: #ff4d4d;
            box-shadow: 0 8px 20px rgba(255, 77, 77, .2);
        }

        .btn-email:hover {
            background: #e63939;
        }

        /* ==========================================
   MAP
========================================== */
        .map-box {
            margin-top: 25px;
            max-width: 620px;

            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #ddd;

            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        /* ==========================================
   HOURS SECTION
========================================== */
        .hours-col {
            width: 50%;
            padding-left: 4%;
            text-align: center;
        }

        .hours-col h2 {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-red);
            margin-bottom: 20px;
        }

        .hours-box {
            position: relative;
            overflow: hidden;

            background: linear-gradient(145deg, #ffffff, #f8f8f8);

            max-width: 500px;
            margin: 0 auto 30px;

            padding: 30px 25px;

            border-radius: 25px;

            box-shadow:
                0 12px 25px rgba(0, 0, 0, .06),
                inset 0 2px 4px rgba(255, 255, 255, .8);

            transition: all .3s ease;
        }

        .hours-box:hover {
            transform: translateY(-5px);
            box-shadow:
                0 18px 35px rgba(0, 0, 0, .10);
        }

        /* dekorasi */
        .hours-box::before {
            content: "";

            position: absolute;
            top: -40px;
            right: -40px;

            width: 120px;
            height: 120px;

            border-radius: 50%;
            background: rgba(230, 0, 18, .05);
        }

        .hours-box::after {
            content: "🕒";

            position: absolute;
            top: 30px;
            right: 30px;

            font-size: 28px;
            opacity: .12;
        }

        .hours-box p {
            margin: 10px 0;
        }

        /* hari */
        .hours-box .day {
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }

        /* status buka */
        .hours-box .open {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            margin: 10px 0;

            color: #2e7d32;
            font-size: 14px;
            font-weight: 600;
        }

        .hours-box .open::before {
            content: "";

            width: 8px;
            height: 8px;

            background: #2e7d32;
            border-radius: 50%;

            animation: pulse 1.5s infinite;
        }

        /* jam */
        .hours-box .time {
            font-size: 38px;
            font-weight: 800;
            color: #222;

            letter-spacing: 1px;

            margin: 15px 0;
        }

        /* minggu libur */
        .hours-box .status {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            color: var(--primary-red);

            font-size: 18px;
            font-style: italic;
            font-weight: 700;
        }

        .hours-box .status::before {
            content: "●";
        }

        /* animasi */
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .4;
                transform: scale(1.3);
            }
        }

        /* ==========================================
   SOCIAL MEDIA
========================================== */
        /* ==========================================
   SOCIAL MEDIA
========================================== */
        .social-container {
            background: var(--primary-red);

            max-width: 650px;
            margin: 0 auto;

            padding: 40px 35px;

            border-radius: 35px;

            color: #fff;

            box-shadow:
                0 15px 35px rgba(230, 0, 18, .15);
        }

        .social-container h3 {
            margin-bottom: 35px;

            font-size: 32px;
            font-weight: 700;

            text-align: center;
        }

        /* container tombol */
        .social-links {
            display: flex;
            flex-direction: column;
            /* tombol vertikal */
            align-items: center;
            gap: 25px;
            /* jarak antar tombol */
        }

        /* tombol */
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;

            width: 100%;
            max-width: 520px;

            padding: 18px 30px;

            background: #fff;
            color: #333;

            border-radius: 50px;

            text-decoration: none;

            font-size: 16px;
            font-weight: 600;

            box-shadow:
                0 5px 15px rgba(0, 0, 0, .08);

            transition: all .3s ease;
        }

        /* hover */
        .social-btn:hover {
            transform: translateY(-4px) scale(1.02);

            box-shadow:
                0 12px 25px rgba(0, 0, 0, .15);
        }

        /* icon */
        .social-btn i {
            font-size: 22px;
        }

        /* warna icon */
        .social-btn.fb i {
            color: #1877f2;
        }

        .social-btn.ig i {
            color: #e1306c;
        }

        /* ==========================================
   ANIMATION
========================================== */
        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.4);
                opacity: .4;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Footer */
        footer {
            background-color: var(--dark-bg);
            color: #888;
            text-align: center;
            padding: 20px;
            font-size: 13px;
            border-top: 1px solid #222;
        }

        /* Animations */
        @keyframes scrollOtomatis {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }

            /* gunakan duplikasi konten agar loop mulus */
        }

        @keyframes dotsBerjalan {
            0% {
                left: 0%;
            }

            50% {
                left: 90%;
            }

            100% {
                left: 0%;
            }
        }

        @keyframes pulseSoft {

            0%,
            100% {
                transform: scale(1);
                filter: drop-shadow(0 0 0 rgba(230, 0, 18, 0));
            }

            50% {
                transform: scale(1.06);
                filter: drop-shadow(0 0 14px rgba(230, 0, 18, 0.35));
            }
        }

        /* Responsive */
        @media (max-width:992px) {
            .about-layout {
                flex-direction: column;
            }

            .about-text,
            .about-img-box {
                flex: none;
                width: 100%;
            }

            .cta-graphic,
            .cta-content {
                display: block;
                width: 100%;
                text-align: center;
                padding: 20px 0;
            }

            .cta-content {
                padding-left: 0;
            }

            .contact-col,
            .hours-col {
                display: block;
                width: 100%;
                padding: 20px 0;
                text-align: center;
            }

            .contact-col {
                padding-right: 0;
            }

            .hours-col {
                padding-left: 0;
            }

            .map-box {
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (max-width:768px) {
            .hero h1 {
                font-size: 28px;
            }

            .nav-menu-cell {
                display: none;
            }

            .section-title {
                font-size: 24px;
            }

            .brand-badge {
                font-size: 24px;
                padding: 15px 40px;
            }

            .loker-icon {
                font-size: 120px;
            }
        }
    </style>
</head>

<body>

    <!-- Header / Navbar -->
    <header>
        <div class="nav-table">
            <div class="nav-logo-cell">
                <a href="#" class="nav-logo">Brasil<span>.</span></a>
            </div>
            <div class="nav-menu-cell">
                <nav class="nav-menu">
                    <a href="#home" class="active">Tentang Kami</a>
                    <a href="#produk">Produk</a>
                    <a href="#toko">Toko</a>
                    <a href="#lowongan">Lowongan Kerja</a>
                    <a href="#kontak">Hubungi Kami</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section id="home" class="hero flex-container">
        <div class="hero-cell flex-col">
            <div class="hero-content">

            </div>
        </div>
    </section>

    <!-- Brand Badge -->
    <div class="brand-badge-container">
        <div class="brand-badge">Brasil</div>
    </div>

    <!-- Tentang Kami -->
    <section class="about">
        <div class="about-layout">
            <div class="about-text">
                <h2>Tentang Kami</h2>
                <p>
                    Produk rumahan yang merupakan usaha keluarga dan berasal dari Purwokerto.
                    Produk ini awalnya yakni <span class="highlight">Es Mambo</span> atau sejenis Es Lilin
                    yang dijajakan keliling. Rasa pertama yang dibuat adalah Kacang Hijau.
                    Hingga saat ini sudah ada <span class="highlight">9 Varian Rasa</span> yang siap menyegarkan harimu.
                </p>
            </div>

            <div class="about-img-box">
                <div class="slider-container">
                    <div class="slide"><img src="/assets/logo1.png" alt="Es Brasil 1" /></div>
                    <div class="slide"><img src="/assets/logo2.png" alt="Es Brasil 2" /></div>
                    <div class="slide"><img src="/assets/logo3.png" alt="Es Brasil 3" /></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Varian Rasa - Slider -->
    <section id="produk" class="variants">
        <h2 class="section-title">Varian Rasa</h2>

        <!-- Slider bungkus -->
        <div class="slider-wrap" aria-label="Slider Varian Rasa">
            <!-- Track: gandakan set item untuk loop mulus -->
            <div class="slider-track">
                <!-- Set Asli -->
                <div class="grid-card">
                    <div class="card-img" style="background-image: url('{{ asset('assets/duren.png') }}');"></div>
                    <h3>Duren</h3>
                </div>
                <div class="grid-card">
                    <div class="card-img" style="background-image: url('{{ asset('assets/coklat.png') }}');"></div>
                    <h3>Coklat</h3>
                </div>
                <div class="grid-card">
                    <div class="card-img" style="background-image: url('{{ asset('assets/kopi.png') }}');"></div>
                    <h3>Kopi</h3>
                </div>
                <div class="grid-card">
                    <div class="card-img" style="background-image: url('{{ asset('assets/sirsak.png') }}');"></div>
                    <h3>Sirsak</h3>
                </div>
                <div class="grid-card">
                    <div class="card-img" style="background-image: url('{{ asset('assets/duren.png') }}');"></div>
                    <h3>Duren</h3>
                </div>


                <!-- Duplikat -->
                <div class="grid-card">
                    <div class="card-img"
                        style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1528825871115-3581a5387919?q=80&w=600&auto=format&fit=crop)');">
                    </div>
                    <h3>Kelapa</h3>
                </div>
                <div class="grid-card">
                    <div class="card-img"
                        style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1534790566855-4cb788d389ec?q=80&w=600&auto=format&fit=crop)');">
                    </div>
                    <h3>Ketan</h3>
                </div>
                <div class="grid-card">
                    <div class="card-img"
                        style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=600&auto=format&fit=crop)');">
                    </div>
                    <h3>Kopi</h3>
                </div>
                <div class="grid-card">
                    <div class="card-img"
                        style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1553118211-167455d4081c?q=80&w=600&auto=format&fit=crop)');">
                    </div>
                    <h3>Rujak</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Tagline -->
    <div class="tagline-wrapper">
        <div class="tagline-container">
            <span class="highlight">ES SEHAT</span>, Tanpa Bahan Pengawet 100% Gula Asli
        </div>
    </div>

    <!-- Tersedia di Toko - Slider -->
    <section id="toko" class="stores">
        <h2 class="section-title">Tersedia di Toko</h2>

        <div class="slider-wrap" aria-label="Slider Toko">
            <div class="slider-track">
                <!-- Set Asli -->
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>

                <!-- Duplikat -->
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>
                <div class="store-card">
                    <div class="store-img" style="background-image: url('{{ asset('assets/tempat.png') }}');">
                    </div>
                    <p>Duta Buah</p>
                </div>
            </div>
        </div>
    </section>

   <section id="mitra" class="partners-section">
    <h2 class="section-title">MITRA KAMI</h2>

    <div class="partners-slider">
        <div class="partners-track">
            
            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/logo1.png" alt="Mitra 1" /></div>
                <p>LuLu</p>
            </div>
            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/logo2.png" alt="Mitra 2" /></div>
                <p>Mang Engking</p>
            </div>
            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/poto.png" alt="Mitra 3" /></div>
                <p>NAGA Swalayan</p>
            </div>
            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/logo1.png" alt="Mitra 4" /></div>
                <p>Sindang Reret</p>
            </div>

            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/logo1.png" alt="Mitra 1" /></div>
                <p>LuLu</p>
            </div>
            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/logo2.png" alt="Mitra 2" /></div>
                <p>Mang Engking</p>
            </div>
            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/poto.png" alt="Mitra 3" /></div>
                <p>NAGA Swalayan</p>
            </div>
            <div class="mitra-card">
                <div class="mitra-kotak-foto"><img src="assets/logo1.png" alt="Mitra 4" /></div>
                <p>Sindang Reret</p>
            </div>

        </div>
    </div>
</section>
</section>
    <!-- CTA / Lowongan Kerja -->
    <section id="lowongan" class="job-vacancy-section">

        <div class="job-vacancy-container">

            <div class="job-vacancy-graphic">
                <img src="{{ asset('assets/gambar1.png') }}" alt="Ilustrasi Lowongan" class="peeking-character">
            </div>

            <div class="job-vacancy-content">

                <h2 class="job-vacancy-title">
                    Tertarik Untuk
                    <br>
                    Bekerja dengan Kami?
                </h2>


                <a href="#" class="job-vacancy-btn">
                    Selengkapnya
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>

    <section id="kontak" class="contact-info-section flex-container info-layout">

        <div class="flex-col contact-col">
            <h2>Hubungi <span style="color:#333;">Kami</span></h2>

            <a href="https://wa.me/6281234567890" target="_blank" class="contact-btn btn-wa" rel="noopener">
                <span><i class="fa-brands fa-whatsapp"></i> Whatsapp Marketing</span>
                <i class="fa-solid fa-arrow-right arrow-icon"></i>
            </a>

            <a href="https://wa.me/6289876543210" target="_blank" class="contact-btn btn-wa" rel="noopener">
                <span><i class="fa-brands fa-whatsapp"></i> Whatsapp Admin</span>
                <i class="fa-solid fa-arrow-right arrow-icon"></i>
            </a>

            <a href="https://mail.google.com/mail/u/0/?fs=1&to=esbrasilbgr@gmail.com&tf=cm" class="contact-btn btn-email">
                <span><i class="fa-regular fa-envelope"></i> esbrasilbgr@gmail.com</span>
                <i class="fa-solid fa-arrow-right arrow-icon"></i>
            </a>



            <div class="map-box" aria-label="Lokasi Es Brasil">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0476371728395!2d106.79724!3d-6.64099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzgnMjcuNiJTIDEwNocksDQ3JzUwLjEiRQ!5e0!3m2!1sid!2sid!4v1650000000000"
                    width="100%" height="300" style="border:0; display:block;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <div class="flex-col hours-col">
            <h2>Jam Operasional</h2>

            <div class="hours-box">
                <p class="day">Senin - Sabtu</p>

                <p class="open">Sedang Buka</p>

                <p class="time">08:00 - 18:00</p>

                <p class="status">Minggu Libur</p>
            </div>


            <div class="social-container">
                <h3>Ikuti kami di Sosmed</h3>

                <div class="social-links">

                    <a href="https://www.facebook.com/Esbrasilbgr" class="social-btn fb">
                        <i class="fa-brands fa-facebook-f"></i>
                        <span>Es Brasil</span>
                    </a>

                    <a href="https://www.instagram.com/esbrasil_bogor/" class="social-btn ig">
                        <i class="fa-brands fa-instagram"></i>
                        <span>esbrasil_bogor</span>
                    </a>

                </div>
            </div>

    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Es Brasil. All Rights Reserved.</p>
    </footer>
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');

            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
