<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Es Brasil - Es Krim & Es Puter</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght=300;400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome 6.4.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
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
    margin: 0;              
    padding: 0;
    box-sizing: border-box; 
    color: var(--text-dark);
    background-color: var(--text-light);
    overflow-x: hidden;    
    font-family: 'Poppins', sans-serif; 
}

        /* Helper untuk Layout "table-like" */
        .flex-container {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        .flex-col {
            display: table-cell;
            vertical-align: middle;
        }

        
/* ==========================================
   HEADER & NAVBAR
   ========================================== */
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 15px 8%;
    z-index: 1000;
    transition: all 0.4s ease;
    background: transparent;
    border: none !important; 
    outline: none !important;
}

header.scrolled {
    background: var(--primary-red);
    padding: 10px 8%;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* ==========================================
   NAVBAR LAYOUT
========================================== */

.nav-table{
    display:table;
    width:100%;
    border-collapse:collapse;
}

.nav-logo-cell{
    display:table-cell;
    vertical-align:middle;
    width:25%;
}

.nav-menu-cell{
    display:table-cell;
    vertical-align:middle;
    text-align:right;
    width:75%;
}


/* ==========================================
   LOGO PREMIUM
========================================== */

.nav-logo-wrapper{
    display:inline-block;
    line-height:1;
}

.nav-logo{
    display:block;

    font-family:'Great Vibes',cursive;

    color:var(--text-light);

    font-size:64px;

    font-weight:400;

    text-decoration:none;

    letter-spacing:1px;

    transition:all .3s ease;
}

.nav-logo:hover{
    transform:scale(1.03);
}

.nav-logo span{
    color:var(--primary-red);
}

.nav-logo-sub{
    display:block;

    color:rgba(255,255,255,.95);

    font-family:'Poppins',sans-serif;

    font-size:10px;

    font-weight:500;

    letter-spacing:2px;

    text-transform:uppercase;

    margin-top:-8px;

    margin-left:6px;
}


/* ketika navbar discroll */
header.scrolled .nav-logo{
    font-size:58px;
}

header.scrolled .nav-logo-sub{
    opacity:.95;
}
/* Menu Rapi */
.nav-menu a {
    display: inline-block;
    position: relative;
    color: var(--text-light);
    text-decoration: none;
    margin-left: 30px;
    font-size: 14px;
    font-weight: 500;
    opacity: 0.9;
    padding-bottom: 5px;
    transition: all 0.3s ease;
}

/* Garis Animasi Bawah (Hanya muncul di bawah teks) */
.nav-menu a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: var(--primary-red);
    transition: 0.3s ease;
}

.nav-menu a:hover, 
.nav-menu a.active {
    color: var(--primary-red);
    opacity: 1;
}

.nav-menu a:hover::after,
.nav-menu a.active::after {
    width: 100%;
}

/* ==========================================
   HERO SECTION
   ========================================== */
.hero {
    height: 100vh;
    width: 100%;
    background-image: url("{{ asset('assets/logo4.png') }}");
    background-size: cover; 
    background-position: center;
    background-repeat: no-repeat;
    display: table;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
}

.hero-cell {
    height: 100vh;
    display: table-cell;
    vertical-align: middle;
}

.hero-content {
    max-width: 550px;
    padding-top: 80px; 
    margin: 0 auto;
}

/* Badge Brand */
       /* ==========================================
   BRAND BADGE PREMIUM
========================================== */

.brand-badge-container{
    text-align:center;
    margin-top:-80px;
    position:relative;
    z-index:100;
}

.brand-badge{
    display:inline-block;

    background:
        linear-gradient(
            135deg,
            #ff0015,
            #d90012
        );

    padding:30px 80px;

    border-radius:28px;

    box-shadow:
        0 15px 35px rgba(230,0,18,.35);

    transition:.3s;
}

.brand-badge:hover{
    transform:
        translateY(-5px)
        scale(1.02);

    box-shadow:
        0 20px 40px rgba(230,0,18,.45);
}

.brand-badge-logo{
    font-family:'Great Vibes',cursive;
    color:#fff;
    font-size:72px;
    line-height:1;
}

.brand-badge-sub{
    color:#fff;
    font-size:15px;
    font-weight:500;
    letter-spacing:1px;
    margin-top:-8px;
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
        .about-img-box {
            flex: 1;
            min-width: 300px;
            position: relative;
           
            height: 300px;
            
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
            
            display: block;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

       
       /* Varian Rasa - Banner Merah (Dibuat Lebih Besar & Luas) */
/* ==========================================
   SECTION VARIAN RASA
========================================== */

.variants{
    background: var(--primary-red);
    color: var(--text-light);

    margin: 60px 0;
    padding: 70px 8% 90px;

    width: 100%;
    box-sizing: border-box;

    position: relative;
    overflow: hidden;
}

/* ==========================================
   JUDUL
========================================== */

.variants .section-title{
    color: #fff;

    font-size: 56px;
    font-weight: 800;

    letter-spacing: 8px;
    text-transform: uppercase;

    text-align: center;

    margin-bottom: 12px;   /* sebelumnya terlalu jauh */
}

/* garis putih */
.section-line{
    width: 100px;
    height: 7px;

    background: white;

    border-radius: 50px;

    margin: 0 auto 50px;   /* garis dinaikkan */
}

/* ==========================================
   SWIPER
========================================== */

.produkSwiper{
    padding: 0 40px 70px;
}

/* beri jarak antar kartu */
.produkSwiper .swiper-wrapper{
    padding: 10px 0;
}

/* ==========================================
   CARD
========================================== */

.grid-card{
    background: rgba(255,255,255,.12);

    backdrop-filter: blur(8px);

    border-radius: 28px;

    padding: 22px;

    height: 380px;

    display: flex;
    flex-direction: column;
    justify-content: center;

    transition: .3s;
}

.grid-card:hover{
    transform: translateY(-8px);

    background: rgba(255,255,255,.18);

    box-shadow:
        0 15px 35px rgba(0,0,0,.18);
}

/* gambar */
.card-img{
    width: 100%;
    height: 260px;

    border-radius: 20px;

    background-size: cover;
    background-position: center;

    margin-bottom: 22px;
}

/* nama */
.grid-card h3{
    color: white;

    font-size: 22px;
    font-weight: 700;

    text-align: center;
}

/* ==========================================
   NAVIGATION
========================================== */

.swiper-button-prev,
.swiper-button-next{
    background: white;

    width: 55px !important;
    height: 55px !important;

    border-radius: 50%;

    box-shadow:
        0 8px 20px rgba(0,0,0,.18);
}

.swiper-button-prev:after,
.swiper-button-next:after{
    font-size: 20px !important;
    color: var(--primary-red);
    font-weight: bold;
}

/* ==========================================
   DOTS
========================================== */

.swiper-pagination{
    bottom: 10px !important;
}

.swiper-pagination-bullet{
    width: 12px;
    height: 12px;

    background: white;

    opacity: .4;
}

.swiper-pagination-bullet-active{
    opacity: 1;
}


        /* Tagline */
        
        .tagline-wrapper {
            display: flex;
            justify-content: center;
            width: 100%;
            margin: 30px 0;
           
        }

        /* Container Tagline yang Clean (Tanpa Bingkai) */
.tagline-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 40px 0;
}

.tagline-container {
    background: transparent; 
    padding: 15px 40px;
    border: none;           
    box-shadow: none;       
    font-size: 28px;
    color: #333;
    text-align: center;
    font-weight: 500;
}

.tagline-container .highlight {
    color: var(--primary-red);
    font-weight: 800;
    text-transform: uppercase;
    margin-right: 5px;
}
         
        /* ==========================================
   SECTION "TERSEDIA DI TOKO"
   ========================================== */

  /* ==========================================
   SECTION TERSEDIA DI TOKO
========================================== */

.separator{
    border:0;
    border-top:1px solid #ddd;
    margin:40px auto 60px;
    width:85%;
}

.stores{
    background:#fff;
    padding:60px 6%;
    overflow:hidden;
    position:relative;
}

/* ==========================================
   JUDUL
========================================== */

.stores .section-title{
    text-align:center;
    font-size:42px;
    font-weight:800;
    color:var(--primary-red);
    text-transform:uppercase;
    letter-spacing:4px;
    margin-bottom:50px;
}

/* ==========================================
   WRAPPER SLIDER
========================================== */

.stores .slider-wrap{
    width:100%;
    overflow:hidden;
    position:relative;
}

/* WAJIB FLEX */
.stores .slider-track{
    display:flex;
    align-items:flex-start;
    gap:30px;

    width:max-content;

    animation:scrollStore 20s linear infinite;
}

.stores .slider-track:hover{
    animation-play-state:paused;
}

/* ==========================================
   CARD TOKO
========================================== */

.store-card{
    width:260px;
    flex-shrink:0;

    background:#fff;

    border-radius:25px;

    padding:20px;

    text-align:center;

    box-shadow:
        0 10px 25px rgba(0,0,0,.08);

    transition:.3s;
}

.store-card:hover{
    transform:
        translateY(-8px);

    box-shadow:
        0 18px 35px rgba(0,0,0,.12);
}

.store-img{
    width:100%;
    height:180px;

    border-radius:18px;

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    margin-bottom:18px;
}

.store-card p{
    color:var(--primary-red);

    font-size:22px;
    font-weight:700;

    margin:0;
}

/* ==========================================
   ANIMASI
========================================== */

@keyframes scrollStore{

    from{
        transform:translateX(0);
    }

    to{
        transform:translateX(-50%);
    }
}

/* ==========================================
   RESPONSIVE
========================================== */

@media(max-width:768px){

    .store-card{
        width:200px;
    }

    .store-img{
        height:150px;
    }

    .stores .section-title{
        font-size:30px;
    }
}

/* --- SECTION MITRA KAMI (DIPERBARUI) --- */
/* ==========================================
   MITRA KAMI - PREMIUM VERSION
   ========================================== */

/* ===========================
SECTION
=========================== */

.partners-section{
    position:relative;
    background:linear-gradient(
        135deg,
        #ff0015,
        #d60012
    );

    padding:70px 40px;
    border-radius:50px;
    overflow:hidden;
    margin:80px 0;
}

/* lingkaran kiri */
.partners-section::before{
    content:'';
    position:absolute;
    width:300px;
    height:300px;
    border-radius:50%;
    background:rgba(255,255,255,.06);
    top:-150px;
    left:-150px;
}

/* lingkaran kanan */
.partners-section::after{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    border-radius:50%;
    background:rgba(255,255,255,.05);
    bottom:-120px;
    right:-120px;
}

/* ===========================
HEADER
=========================== */

.partners-header{
    text-align:center;
    margin-bottom:50px;
}

.partners-icon{
    color:white;
    font-size:30px;
    margin-bottom:10px;
}

.section-title{
    color:white;
    font-size:48px;
    font-weight:800;
    letter-spacing:10px;
    margin-bottom:15px;
}

.section-line{
    width:80px;
    height:5px;
    background:white;
    border-radius:50px;
    margin:auto;
}

/* ===========================
SWIPER
=========================== */

.partnersSwiper{
    padding:20px 10px 60px;
}

/* ===========================
CARD
=========================== */

.mitra-card{
    background:white;

    height:320px;

    border-radius:35px;

    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;

    position:relative;

    overflow:hidden;

    box-shadow:
        0 15px 30px rgba(0,0,0,.12);

    transition:.4s;
}

.mitra-card:hover{
    transform:
        translateY(-12px)
        scale(1.03);

    box-shadow:
        0 25px 40px rgba(0,0,0,.2);
}

/* shine effect */

.mitra-card::before{
    content:'';

    position:absolute;

    top:0;
    left:-120%;

    width:50%;
    height:100%;

    background:
    linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,.7),
        transparent
    );

    transition:.7s;
}

.mitra-card:hover::before{
    left:150%;
}

/* ===========================
FOTO
=========================== */

.mitra-kotak-foto{
    width:120px;
    height:120px;

    border-radius:50%;

    background:#f7f7f7;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-bottom:25px;

    transition:.3s;
}

.mitra-card:hover .mitra-kotak-foto{
    transform:scale(1.08);
}

.mitra-kotak-foto img{
    width:75%;
    height:75%;
    object-fit:contain;
}

/* ===========================
TEXT
=========================== */

.mitra-card h3{
    font-size:20px;
    font-weight:700;
    color:#333;
    margin:0;
}

.card-decoration{
    margin-top:20px;
    color:red;
    font-size:26px;
    letter-spacing:5px;
}

/* ===========================
ARROW
=========================== */

.swiper-button-next,
.swiper-button-prev{
    background:white;
    width:50px !important;
    height:50px !important;
    border-radius:50%;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.swiper-button-next:after,
.swiper-button-prev:after{
    font-size:18px !important;
    color:#ff0000;
    font-weight:bold;
}

/* ===========================
DOTS
=========================== */

.swiper-pagination-bullet{
    width:12px;
    height:12px;
    background:white;
    opacity:.5;
}

.swiper-pagination-bullet-active{
    opacity:1;
}

/* ===========================
RESPONSIVE
=========================== */

@media(max-width:768px){

    .partners-section{
        padding:50px 20px;
        border-radius:30px;
    }

    .section-title{
        font-size:30px;
        letter-spacing:5px;
    }

    .mitra-card{
        height:250px;
    }

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

        /* Styling Tombol Chat */
/* Styling Tombol Pemicu */
.chat-trigger {
    position: fixed;
    bottom: 20px;
    right: 20px;
    cursor: pointer;
    z-index: 9999;
}

.chat-trigger img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* Styling Jendela Chat */
.chat-window {
    position: fixed;
    bottom: 85px;
    right: 20px;
    width: 300px;
    height: 400px;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    z-index: 9999;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.chat-window.hidden {
    display: none;
}

/* Tambahan untuk melengkapi header chat */
.chat-header {
    background: var(--primary-red);
    color: white;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chat-body {
    padding: 20px;
    flex-grow: 1;
    overflow-y: auto;
}

.chat-body {
    padding: 15px;
    flex-grow: 1;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.chat-message.bot {
    background: #f1f1f1;
    padding: 10px;
    border-radius: 10px;
    font-size: 14px;
}

.chat-footer {
    display: flex;
    padding: 10px;
    border-top: 1px solid #ddd;
}

.chat-footer input {
    flex: 1;
    border: none;
    outline: none;
    padding: 5px;
}

/* Styling tombol agar lebih modern dan menarik */
.chat-options {
    display: flex;
    gap: 10px;
    padding: 10px;
    justify-content: center;
}

.option-btn {
    background: #ffffff;
    border: 1.5px solid var(--primary-red); /* Warna sesuai brand */
    color: var(--primary-red);
    padding: 8px 15px;
    border-radius: 20px; /* Membuat bentuk oval */
    cursor: pointer;
    font-size: 13px;
    transition: all 0.3s ease; /* Efek transisi halus */
}

/* Efek saat mouse diarahkan ke tombol */
.option-btn:hover {
    background: var(--primary-red);
    color: white;
    transform: translateY(-2px); /* Efek tombol naik sedikit */
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.promo-overlay {
    position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(0,0,0,0.7); z-index: 10000;
    display: flex; align-items: center; justify-content: center;
}
.promo-content { width: 400px; position: relative; }
.close-modal { position: absolute; top: -30px; right: 0; color: white; cursor: pointer; }
.promo-swiper img { width: 100%; border-radius: 10px; }
.hidden { display: none; }

/* 1. Modal Promo (Pop-up saat awal buka) */
/* --- 1. Modal Promo --- */
.promo-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
}
.promo-content {
    width: 90%;
    max-width: 400px;
    position: relative;
}
.close-modal {
    position: absolute;
    top: -40px;
    right: 0;
    color: white;
    font-size: 30px;
    cursor: pointer;
    background: none;
    border: none;
}
.promo-swiper img {
    width: 100%;
    border-radius: 10px;
    display: block;
}

/* --- 2. Styling Chatbot --- */
.chat-window {
    position: fixed;
    bottom: 80px;
    right: 20px;
    width: 320px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    z-index: 1000;
    overflow: hidden;
}
.chat-header {
    background: linear-gradient(135deg, #e60000, #b30000);
    color: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: bold;
}
.chat-body {
    height: 300px;
    padding: 15px;
    overflow-y: auto;
}
.chat-message.bot {
    background: #fc0f0f;
    border-left: 4px solid #e60000;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 0 15px 15px 15px;
}

/* --- 3. Tombol Chatbot Interaktif --- */
.chat-options {
    display: flex;
    gap: 10px;
    padding: 10px;
    justify-content: center;
}
.option-btn {
    background: #ffffff;
    border: 1.5px solid #e60000;
    color: #e60000;
    padding: 8px 15px;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.option-btn:hover {
    background: #e60000;
    color: white;
}

/* --- 4. Utilities --- */
.hidden { display: none; }

/* Pastikan swiper wrapper memiliki display flex agar slide berjejer */
.swiper-wrapper {
    display: flex;
    align-items: center;
}

/* Memastikan setiap slide memiliki ukuran yang benar */
.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

/* Memastikan gambar tidak tersembunyi */
.promo-swiper img {
    width: 100%;
    height: auto;
    display: block; /* Penting agar tidak ada celah di bawah gambar */
    object-fit: contain; /* Agar gambar tidak terpotong */
}


  
/* ==========================================
   MENU NORMAL
========================================== */
.nav-menu a {
    display: inline-block;
    position: relative;
    color: var(--text-light);
    text-decoration: none;
    margin-left: 30px;
    font-size: 14px;
    font-weight: 500;
    opacity: 0.9;
    padding-bottom: 5px;
    transition: all 0.3s ease;
}

.nav-menu a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background: var(--primary-red);
    transition: 0.3s ease;
}

.nav-menu a:hover,
.nav-menu a.active {
    color: var(--primary-red);
    opacity: 1;
}

.nav-menu a:hover::after,
.nav-menu a.active::after {
    width: 100%;
}

/* ==========================================
   FIX SAAT NAVBAR SCROLL
========================================== */

/* semua menu kembali putih */
header.scrolled .nav-menu a {
    color: #ffffff;
}

/* menu aktif tetap putih */
header.scrolled .nav-menu a.active {
    color: #ffffff;
}

/* hover saat navbar merah */
header.scrolled .nav-menu a:hover {
    color: #ffffff;
}

/* garis bawah berubah putih */
header.scrolled .nav-menu a::after {
    background: #ffffff;
}


    </style>
</head>

<body>

    <!-- Header / Navbar -->
    <header>
        <div class="nav-table">
          <div class="nav-logo-wrapper">

    <a href="#" class="nav-logo">
        Brasil<span>.</span>
    </a>

   

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
                <!-- Isi konten hero Anda di sini jika diperlukan -->
            </div>
        </div>
    </section>

    <!-- Brand Badge -->
    <div class="brand-badge-container">

    <div class="brand-badge">

        <div class="brand-badge-logo">
            Brasil
        </div>

        <div class="brand-badge-sub">
            Es Krim & Es Puter
        </div>

    </div>

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

    <!-- HEADER -->
    <div class="variants-header">

    

        <h2 class="section-title">
            VARIAN RASA
        </h2>

        <div class="section-line"></div>

    </div>

    <!-- SWIPER -->
    <div class="swiper produkSwiper">

        <div class="swiper-wrapper">

            <!-- Duren -->
            <div class="swiper-slide">
                <div class="grid-card">

                   <div class="card-img"
                        style="background-image:url('{{ asset('assets/coklat.png') }}');">
                    </div>


                    <h3>Duren</h3>

                   

                </div>
            </div>

            <!-- Coklat -->
            <div class="swiper-slide">
                <div class="grid-card">

                    <div class="card-img"
                        style="background-image:url('{{ asset('assets/coklat.png') }}');">
                    </div>

                    <h3>Coklat</h3>

                    

                </div>
            </div>

            <!-- Kopi -->
            <div class="swiper-slide">
                <div class="grid-card">

                      <div class="card-img"
                        style="background-image:url('{{ asset('assets/sirsak.png') }}');">
                    </div>

                    <h3>Kopi</h3>

                   

                </div>
            </div>

            <!-- Sirsak -->
            <div class="swiper-slide">
                <div class="grid-card">

                    <div class="card-img"
                        style="background-image:url('{{ asset('assets/sirsak.png') }}');">
                    </div>

                    <h3>Sirsak</h3>

                   
                </div>
            </div>

            <!-- Kelapa -->
            <div class="swiper-slide">
                <div class="grid-card">

                    <div class="card-img"
                        style="background-image:url('{{ asset('assets/sirsak.png') }}');">
                    </div>

                    <h3>Kelapa</h3>

                    

                </div>
            </div>

            <!-- Ketan -->
            <div class="swiper-slide">
                <div class="grid-card">

                    <div class="card-img"
                        style="background-image:url('{{ asset('assets/coklat.png') }}');">
                    </div>

                    <h3>Ketan</h3>

                   

                </div>
            </div>

            <!-- Rujak -->
            <div class="swiper-slide">
                <div class="grid-card">

                      <div class="card-img"
                        style="background-image:url('{{ asset('assets/duren.png') }}');">
                    </div>

                    <h3>Rujak</h3>

                  

                </div>
            </div>

        </div>

        
        <!-- PAGINATION -->
        <div class="produk-pagination swiper-pagination"></div>

    </div>

</section>
    </section>

    <!-- Tagline -->
    <div class="tagline-wrapper">
        <div class="tagline-container">
            <span class="highlight">ES SEHAT</span>, Tanpa Bahan Pengawet 100% Gula Asli
        </div>
    </div>

    <!-- Tersedia di Toko - Slider -->
    <section id="toko" class="stores">
        <hr class="separator">
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

   <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<section id="mitra" class="partners-section">

    <!-- HEADER -->
    <div class="partners-header">

        <div class="partners-icon">
            🤝
        </div>

        <h2 class="section-title">
            MITRA KAMI
        </h2>

        <div class="section-line"></div>

    </div>

    <!-- SWIPER -->
    <div class="swiper partnersSwiper">

        <div class="swiper-wrapper">

            <!-- CARD 1 -->
            <div class="swiper-slide">

                <div class="mitra-card">

                    <div class="mitra-kotak-foto">
                        <img src="assets/logo1.png" alt="LuLu">
                    </div>

                    <h3>LuLu</h3>

                   

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="swiper-slide">

                <div class="mitra-card">

                    <div class="mitra-kotak-foto">
                        <img src="assets/logo2.png" alt="Mang Engking">
                    </div>

                    <h3>Mang Engking</h3>

                   

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="swiper-slide">

                <div class="mitra-card">

                    <div class="mitra-kotak-foto">
                        <img src="assets/logo2.png" alt="NAGA Swalayan">
                    </div>

                    <h3>NAGA Swalayan</h3>

                    

                </div>

            </div>

            <!-- CARD 4 -->
            <div class="swiper-slide">

                <div class="mitra-card">

                    <div class="mitra-kotak-foto">
                        <img src="assets/logo1.png" alt="Sindang Reret">
                    </div>

                    <h3>Sindang Reret</h3>

                   

                </div>

            </div>

            <!-- DUPLIKAT UNTUK LOOP -->
            <div class="swiper-slide">

                <div class="mitra-card">

                    <div class="mitra-kotak-foto">
                        <img src="assets/logo1.png" alt="LuLu">
                    </div>

                    <h3>LuLu</h3>

                    

                </div>

            </div>

            <div class="swiper-slide">

                <div class="mitra-card">

                    <div class="mitra-kotak-foto">
                        <img src="assets/logo2.png" alt="Mang Engking">
                    </div>

                    <h3>Mang Engking</h3>

                    

                </div>

            </div>

        </div>

        <!-- BUTTON -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- DOT -->
        <div class="swiper-pagination"></div>

    </div>

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

              <!-- Tombol Pemicu -->
   <!-- Tombol Pemicu -->
<div class="chat-trigger" onclick="toggleChat()">
    <img src="{{ asset('assets/customer.png') }}" alt="Chat">
</div>

<!-- Jendela Chat -->
<div id="chat-window" class="chat-window hidden">
    <div class="chat-header">
        <span>Asisten Es Brasil</span>
        <button onclick="toggleChat()">X</button>
    </div>
    
    <!-- Area Pesan -->
    <div class="chat-body">
        <div class="chat-message bot">
            <p>Halo Sahabat Brasil! Selamat datang! Ada yang bisa kami bantu hari ini? ✨</p>
        </div>
        
        <!-- Area Tombol Interaktif -->
        <div class="chat-options">
            <button class="option-btn" onclick="handleOption('Produk')">🍦 Produk Kami</button>
            <button class="option-btn" onclick="handleOption('Lokasi')">📍 Lokasi Cabang</button>
        </div>
    </div>

    <!-- Area Input -->
    <div class="chat-footer">
        <input type="text" id="chat-input" placeholder="Ketik pesan...">
        <button onclick="sendMessage()">➤</button>
    </div>
</div>

<!-- Modal Background -->
<div id="promo-modal" class="promo-overlay">
    <div class="promo-content">
        <button class="close-modal" onclick="closePromo()">×</button>
        
        <!-- Swiper Slider -->
        <div class="swiper promo-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('assets/promo1.png') }}" alt="Promo 1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('assets/promo2.png') }}" alt="Promo 2">
                </div>
            </div>
            <!-- Navigasi -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div> <!-- Penutup promo-content -->
</div> <!-- Penutup promo-overlay -->
</div>

<!-- Struktur HTML -->

    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Es Brasil. All Rights Reserved.</p>
    </footer>

   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
/* ==========================================
   INISIALISASI HALAMAN
========================================== */
document.addEventListener('DOMContentLoaded', () => {

    /* ==========================
       SWIPER PROMO
    ========================== */
    const promoSwiper = new Swiper('.promo-swiper', {
        loop: true,
        slidesPerView: 1,

        navigation: {
            nextEl: '.promo-next',
            prevEl: '.promo-prev'
        }
    });


    /* ==========================
       SWIPER MITRA
    ========================== */
    const partnersSwiper = new Swiper('.partnersSwiper', {
        slidesPerView: 5,
        spaceBetween: 25,
        loop: true,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        navigation: {
            nextEl: '.partners-next',
            prevEl: '.partners-prev'
        },

        breakpoints: {
            320: {
                slidesPerView: 1
            },
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 5
            }
        }
    });


    /* ==========================
       ENTER CHAT
    ========================== */
    const chatInput = document.getElementById('chat-input');

    if (chatInput) {
        chatInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    }
});


/* ==========================================
   PROMO MODAL
========================================== */
window.onload = () => {
    const promoModal = document.getElementById('promo-modal');

    if (promoModal) {
        promoModal.classList.remove('hidden');
    }
};

function closePromo() {
    const promoModal = document.getElementById('promo-modal');

    if (promoModal) {
        promoModal.classList.add('hidden');
    }
}


/* ==========================================
   CHATBOT
========================================== */
function toggleChat() {
    const chatWindow = document.getElementById('chat-window');

    if (chatWindow) {
        chatWindow.classList.toggle('hidden');
    }
}

function handleOption(option) {
    const input = document.getElementById('chat-input');

    if (input) {
        input.value = option;
        sendMessage();
    }
}

function sendMessage() {
    const input = document.getElementById('chat-input');

    if (!input) return;

    const text = input.value.trim();

    if (text === '') return;

    addMessage(text, 'user');
    input.value = '';

    setTimeout(() => {

        let response =
            'Maaf, saya tidak mengerti. Coba pilih Produk atau Lokasi.';

        const lowerText = text.toLowerCase();

        if (lowerText.includes('produk')) {
            response =
                'Varian kami ada: Duren, Coklat, Kopi, dan Sirsak!';
        }
        else if (lowerText.includes('lokasi')) {
            response =
                'Kami tersedia di berbagai swalayan terdekat!';
        }

        addMessage(response, 'bot');

    }, 500);
}

function addMessage(text, sender) {
    const body = document.querySelector('.chat-body');

    if (!body) return;

    const msg = document.createElement('div');

    msg.className = `chat-message ${sender}`;
    msg.innerHTML = `<p>${text}</p>`;

    body.appendChild(msg);
    body.scrollTop = body.scrollHeight;
}


/* ==========================================
   HEADER SCROLL EFFECT
========================================== */
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');

    if (header) {
        header.classList.toggle(
            'scrolled',
            window.scrollY > 50
        );
    }
});


/* ==========================================
   FLOATING BUTTON
========================================== */
function closeButton() {
    const floating =
        document.getElementById('floating-wrapper');

    if (floating) {
        floating.style.display = 'none';
    }
}

const produkSwiper = new Swiper('.produkSwiper', {

    slidesPerView: 4,
    spaceBetween: 40,
    loop: true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },

    navigation: {
        nextEl: '.produk-next',
        prevEl: '.produk-prev',
    },

    pagination: {
        el: '.produk-pagination',
        clickable: true,
    },

    breakpoints: {
        320: {
            slidesPerView: 1,
        },

        576: {
            slidesPerView: 2,
        },

        768: {
            slidesPerView: 3,
        },

        1200: {
            slidesPerView: 4,
        }
    }
});

document.querySelectorAll('.nav-menu a').forEach(link => {

    link.addEventListener('click', function() {

        // hapus active dari semua menu
        document.querySelectorAll('.nav-menu a')
            .forEach(item => item.classList.remove('active'));

        // aktifkan menu yang diklik
        this.classList.add('active');
    });

});
</script>

</body>
</html>