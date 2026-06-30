<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Es Brasil - Es Krim & Es Puter</title>

  <!-- Google Fonts -->
  <link href="[fonts.googleapis.com](https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap)" rel="stylesheet"/>

  <!-- Font Awesome 6.4.0 -->
  <link rel="stylesheet" href="[cdnjs.cloudflare.com](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css)"/>

  <style>
    /* Reset & Variabel */
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

    :root{
      --primary-red:#e60012;
      --dark-bg:#1c1c1c;
      --text-dark:#333333;
      --text-light:#ffffff;
      --gray-light:#f9f9f9;
    }

    html{ scroll-behavior:smooth; }
    body{ color:var(--text-dark); background-color:var(--text-light); overflow-x:hidden; }

    /* Helper untuk Layout "table-like" yang sudah ada */
    .flex-container{ display:table; width:100%; table-layout:fixed; }
    .flex-col{ display:table-cell; vertical-align:middle; }

    /* Navbar & Header */
    header{
      position:fixed; top:0; left:0; width:100%;
      background-color:rgba(0,0,0,0.4);
      backdrop-filter:blur(8px); -webkit-backdrop-filter:blur(8px);
      z-index:1000; padding:18px 5%;
      box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }
    .nav-table{ display:table; width:100%; }
    .nav-logo-cell{ display:table-cell; vertical-align:middle; width:20%; }
    .nav-logo{
      font-size:28px; font-weight:700; color:var(--text-light);
      font-style:italic; text-decoration:none; letter-spacing:0.5px;
    }
    .nav-logo span{ color:var(--primary-red); }
    .nav-menu-cell{ display:table-cell; vertical-align:middle; text-align:right; width:80%; }
    .nav-menu a{
      color:var(--text-light); text-decoration:none; margin-left:25px;
      font-size:14px; font-weight:500; transition:all 0.3s ease; opacity:0.85;
    }
    .nav-menu a:hover,.nav-menu a.active{
      color:var(--primary-red); border-bottom:2px solid var(--primary-red);
      padding-bottom:5px; opacity:1;
    }

    /* Hero */
    .hero{
      background:
        linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
        url('[images.unsplash.com](https://images.unsplash.com/photo-1563805042-7684c019e1cb?q=80&w=1920&auto=format&fit=crop)') no-repeat center center/cover;
      height:100vh; color:var(--text-light); padding:0 8%;
    }
    .hero-cell{ height:100vh; }
    .hero-content{ max-width:550px; padding-top:80px; }
    .hero h1{ font-size:42px; font-weight:700; margin-bottom:20px; line-height:1.3; }
    .hero h1 span{ color:var(--primary-red); font-style:italic; }
    .hero p{ font-size:18px; font-style:italic; line-height:1.6; opacity:0.9; }

    /* Badge Brand */
    .brand-badge-container{ text-align:center; margin-top:-50px; position:relative; z-index:10; }
    .brand-badge{
      display:inline-block; background-color:var(--primary-red); color:var(--text-light);
      padding:20px 60px; font-size:32px; font-weight:700; font-style:italic;
      border-radius:25px; box-shadow:0 8px 20px rgba(0,0,0,0.15);
    }

    /* Section umum */
    section{ padding:80px 8%; }
    .section-title{ text-align:center; font-size:32px; font-weight:700; margin-bottom:40px; color:var(--text-dark); }

    /* Tentang Kami */
    .about{ background-color:var(--text-light); padding:80px 0; }
    .about-layout{
      display:flex; align-items:center; justify-content:space-between; gap:40px;
      max-width:1140px; margin:0 auto; padding:0 20px; flex-wrap:wrap;
    }
    .about-text{
      flex:1.3; min-width:300px; font-size:16px; line-height:1.8; color:#555; text-align:justify;
    }
    .about-img-box{ flex:1; min-width:300px; display:flex; justify-content:center; align-items:center; }
    .about-img-box img{
      width:100%; max-width:380px; height:auto; border-radius:20px;
      box-shadow:0 10px 30px rgba(0,0,0,0.08); transition:transform 0.3s ease;
    }
    .about-img-box img:hover{ transform:scale(1.02); }

    /* Varian Rasa - Banner Merah + Slider */
    .variants{
      background-color:var(--primary-red); color:var(--text-light);
      border-radius:40px; margin:40px 4%; padding:60px 5%;
    }
    .variants .section-title{ color:var(--text-light); }

    .slider-wrap{ width:100%; overflow:hidden; }
    .slider-track{
      display:flex; gap:30px; animation:scrollOtomatis 20s linear infinite;
      will-change:transform;
    }
    .slider-wrap:hover .slider-track{ animation-play-state:paused; }

    .grid-card{
      width:240px; flex:0 0 auto;
      background:rgba(255,255,255,0.12); backdrop-filter:blur(5px);
      border-radius:20px; padding:20px; text-align:center; transition:transform 0.3s;
    }
    .grid-card:hover{ transform:translateY(-5px); }
    .card-img{
      width:100%; height:180px; border-radius:12px; margin-bottom:15px;
      background-position:center; background-size:cover; background-color:rgba(0,0,0,0.2);
    }
    .grid-card h3{ font-size:18px; font-weight:600; margin-top:10px; }

    /* Tagline */
    .tagline-container{ text-align:center; padding:40px 0; font-size:24px; font-weight:600; }
    .tagline-container span{ color:var(--primary-red); font-weight:700; }

    /* Tersedia di Toko - Grid jadi Slider */
    .stores{ background-color:var(--gray-light); }
    .store-card{
      width:220px; flex:0 0 auto;
      background:var(--text-light); border-radius:16px; padding:15px; text-align:center;
      box-shadow:0 5px 15px rgba(0,0,0,0.05);
    }
    .store-img{
      width:100%; height:160px; background-color:#ddd; border-radius:10px; margin-bottom:12px;
      background-position:center; background-size:cover;
    }
    .store-card p{ font-weight:600; color:var(--primary-red); font-size:15px; }

    /* Mitra Kami - tetap seperti konsep awal (slider otomatis) */
    .partners-section{
      background-color:var(--primary-red); padding:80px 0; overflow:hidden; position:relative; width:100%;
      margin:60px 0; border-top-left-radius:50% 35px; border-top-right-radius:50% 35px;
      border-bottom-left-radius:50% 35px; border-bottom-right-radius:50% 35px;
    }
    .partners-section .section-title{ color:var(--text-light); }

    .partners-slider{ width:100%; overflow:hidden; padding:10px 0; }
    .partners-track{
      display:flex; gap:30px; animation:scrollOtomatis 20s linear infinite; will-change:transform;
    }
    .partners-slider:hover .partners-track{ animation-play-state:paused; }

    .mitra-card{
      width:220px; height:180px; background-color:#ffffff; border-radius:30px;
      display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center;
      padding:20px; box-shadow:0 8px 20px rgba(0,0,0,0.05); flex-shrink:0;
    }
    .icon-mitra{ font-size:45px; color:#555555; margin-bottom:15px; }
    .mitra-card p{ font-size:15px; font-weight:700; color:#333333; margin:0; line-height:1.3; }

    .dots-container{
      display:flex; justify-content:center; align-items:center; width:120px; height:12px;
      background:rgba(255,255,255,0.2); margin:35px auto 0 auto; border-radius:10px; position:relative; overflow:hidden;
    }
    .active-dot{
      width:12px; height:12px; background-color:#ffffff; border-radius:50%;
      position:absolute; left:0; animation:dotsBerjalan 20s linear infinite;
    }
    .partners-slider:hover ~ .dots-container .active-dot{ animation-play-state:paused; }

  /* CTA - Lowongan Kerja */
  .job-vacancy-section {
    background-color: #ffffff;
    padding: 60px 0;
    overflow: hidden;
  }
  .job-vacancy-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .job-vacancy-graphic {
    flex: 0 0 280px;
  }
  .peeking-character {
    width: 100%;
    height: auto;
    display: block;
  }
  .job-vacancy-content {
    flex: 1;
    text-align: left;
  }
  .job-vacancy-title {
    color: #ff3b3f;
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
  }
  .job-vacancy-btn {
    display: inline-flex;
    align-items: center;
    background-color: #28a745;
    color: #ffffff;
    padding: 10px 25px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s;
  }
  .job-vacancy-btn:hover {
    background-color: #218838;
  }
    /* Kontak & Jam Operasional */
    .contact-info-section{ background-color:var(--gray-light); border-top:1px solid #eee; }
    .info-layout{ table-layout:fixed; }
    .contact-col{ width:50%; padding-right:4%; }
    .contact-col h2{ font-size:28px; color:var(--primary-red); margin-bottom:25px; font-weight:700; }

    .contact-btn{
      display:flex; align-items:center; justify-content:space-between; width:100%; max-width:360px;
      padding:14px 25px; margin-bottom:15px; border-radius:30px; color:var(--text-light);
      text-decoration:none; font-weight:600; font-size:15px; transition:all 0.3s ease;
    }
    .contact-btn i{ margin-right:12px; font-size:18px; }
    .contact-btn .arrow-icon{ font-size:12px; opacity:0.7; margin-right:0; }
    .btn-wa{ background-color:#25d366; box-shadow:0 4px 10px rgba(37,211,102,0.15); }
    .btn-wa:hover{ background-color:#20ba5a; }
    .btn-email{ background-color:#ff4d4d; box-shadow:0 4px 10px rgba(230,0,18,0.15); }
    .btn-email:hover{ background-color:#e63939; }

    .map-box{
      margin-top:25px; border-radius:16px; overflow:hidden; border:1px solid #ddd;
      box-shadow:0 8px 24px rgba(0,0,0,0.06); max-width:600px;
    }

    .hours-col{ width:50%; padding-left:4%; text-align:center; }
    .hours-col h2{ font-size:32px; color:var(--primary-red); margin-bottom:20px; font-weight:700; }
    .hours-box{
      background:var(--text-light); padding:30px; border-radius:20px;
      box-shadow:0 5px 20px rgba(0,0,0,0.05); margin-bottom:30px;
    }
    .hours-box p{ font-size:18px; margin-bottom:8px; }
    .hours-box .day{ font-weight:600; color:#333; }
    .hours-box .time{ font-size:22px; font-weight:700; color:#222; margin-bottom:15px; }
    .hours-box .status{ color:var(--primary-red); font-style:italic; font-weight:600; }

    .social-container{
      background-color:var(--primary-red); padding:30px; border-radius:25px; color:var(--text-light);
    }
    .social-container h3{ font-size:24px; margin-bottom:20px; font-weight:600; }
    .social-btn{
      display:inline-block; background:var(--text-light); color:#333;
      padding:10px 25px; border-radius:20px; text-decoration:none; font-weight:600; margin:0 10px;
      font-size:14px; transition:transform 0.3s ease;
    }
    .social-btn:hover{ transform:translateY(-3px); }
    .social-btn i{ margin-right:8px; }
    .social-btn.fb i{ color:#1877f2; }
    .social-btn.ig i{ color:#e1306c; }

    /* Footer */
    footer{
      background-color:var(--dark-bg); color:#888; text-align:center; padding:20px;
      font-size:13px; border-top:1px solid #222;
    }

    /* Animations */
    @keyframes scrollOtomatis{
      0%{ transform:translateX(0); }
      100%{ transform:translateX(-50%); } /* gunakan duplikasi konten agar loop mulus */
    }
    @keyframes dotsBerjalan{
      0%{ left:0%; } 50%{ left:90%; } 100%{ left:0%; }
    }
    @keyframes pulseSoft{
      0%,100%{ transform:scale(1); filter:drop-shadow(0 0 0 rgba(230,0,18,0)); }
      50%{ transform:scale(1.06); filter:drop-shadow(0 0 14px rgba(230,0,18,0.35)); }
    }

    /* Responsive */
    @media (max-width:992px){
      .about-layout{ flex-direction:column; }
      .about-text,.about-img-box{ flex:none; width:100%; }

      .cta-graphic,.cta-content{
        display:block; width:100%; text-align:center; padding:20px 0;
      }
      .cta-content{ padding-left:0; }

      .contact-col,.hours-col{
        display:block; width:100%; padding:20px 0; text-align:center;
      }
      .contact-col{ padding-right:0; }
      .hours-col{ padding-left:0; }

      .map-box{ margin-left:auto; margin-right:auto; }
    }
    @media (max-width:768px){
      .hero h1{ font-size:28px; }
      .nav-menu-cell{ display:none; }
      .section-title{ font-size:24px; }
      .brand-badge{ font-size:24px; padding:15px 40px; }
      .loker-icon{ font-size:120px; }
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
        <h1>"Temukan banyak <span>manfaat</span> di setiap Varian Rasa <span>Es Brasil</span> kami."</h1>
        <p>Es Krim & Es Puter Tradisional Berkualitas Tinggi</p>
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
        <p>
          Produk rumahan yang merupakan usaha keluarga dan berasal dari Purwokerto.
          Produk ini awalnya yakni Es Mambo atau sejenis Es Lilin yang dijajakan keliling.
          Rasa pertama yang dibuat adalah Kacang Hijau. Hingga saat ini sudah ada 9 Varian Rasa.
        </p>
      </div>
      <div class="about-img-box">
        <img src="/assets/img-2.jpeg" alt="Es Brasil Pack" />
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
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1528825871115-3581a5387919?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Kelapa</h3>
        </div>
        <div class="grid-card">
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1534790566855-4cb788d389ec?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Ketan</h3>
        </div>
        <div class="grid-card">
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Kopi</h3>
        </div>
        <div class="grid-card">
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1553118211-167455d4081c?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Rujak</h3>
        </div>

        <!-- Duplikat -->
        <div class="grid-card">
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1528825871115-3581a5387919?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Kelapa</h3>
        </div>
        <div class="grid-card">
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1534790566855-4cb788d389ec?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Ketan</h3>
        </div>
        <div class="grid-card">
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Kopi</h3>
        </div>
        <div class="grid-card">
          <div class="card-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1553118211-167455d4081c?q=80&w=600&auto=format&fit=crop)');"></div>
          <h3>Rujak</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Tagline -->
  <div class="tagline-container">
    <span>ES Sehat</span>, Tanpa Bahan Pengawet 100% Gula Asli
  </div>

  <!-- Tersedia di Toko - Slider -->
  <section id="toko" class="stores">
    <h2 class="section-title">Tersedia di Toko</h2>

    <div class="slider-wrap" aria-label="Slider Toko">
      <div class="slider-track">
        <!-- Set Asli -->
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1578916171728-46686eac8d58?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Duta Buah</p>
        </div>
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Gubug Udang</p>
        </div>
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Kebun Buah</p>
        </div>
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Mang Engking</p>
        </div>

        <!-- Duplikat -->
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1578916171728-46686eac8d58?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Duta Buah</p>
        </div>
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Gubug Udang</p>
        </div>
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Kebun Buah</p>
        </div>
        <div class="store-card">
          <div class="store-img" style="background-image:url('[images.unsplash.com](https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=600&auto=format&fit=crop)');"></div>
          <p>Mang Engking</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mitra Kami - Slider seperti sebelumnya -->
  <section id="mitra" class="partners-section">
    <h2 class="section-title">Mitra Kami</h2>

    <div class="partners-slider">
      <div class="partners-track">
        <!-- Set 1 -->
        <div class="mitra-card">
          <i class="fa-solid fa-store icon-mitra"></i>
          <p>LuLu</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-utensils icon-mitra"></i>
          <p>Gubug Makan<br/>Mang Engking</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-shop icon-mitra"></i>
          <p>NAGA Pasar<br/>Swalayan</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-building icon-mitra"></i>
          <p>Sindang Reret</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-fire-burner icon-mitra"></i>
          <p>Sop Janda Sate<br/>Tegal</p>
        </div>
        <!-- Set 2 (Duplikat) -->
        <div class="mitra-card">
          <i class="fa-solid fa-store icon-mitra"></i>
          <p>LuLu</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-utensils icon-mitra"></i>
          <p>Gubug Makan<br/>Mang Engking</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-shop icon-mitra"></i>
          <p>NAGA Pasar<br/>Swalayan</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-building icon-mitra"></i>
          <p>Sindang Reret</p>
        </div>
        <div class="mitra-card">
          <i class="fa-solid fa-fire-burner icon-mitra"></i>
          <p>Sop Janda Sate<br/>Tegal</p>
        </div>
      </div>
    </div>

    <div class="dots-container">
      <div class="active-dot"></div>
    </div>
  </section>

  <!-- CTA / Lowongan Kerja -->
<section id="lowongan" class="cta-section job-vacancy-section">
  <div class="container job-vacancy-container">
    <div class="job-vacancy-graphic">
      <img src="{{ asset('assets/gambar1.png') }}" alt="Ilustrasi Lowongan Kerja" class="peeking-character" />
    </div>
    <div class="job-vacancy-content">
      <h2 class="job-vacancy-title">Tertarik Untuk Bekerja dengan Kami ?</h2>
      <a href="#" class="cta-btn job-vacancy-btn">
        Selengkapnya
        <i class="fa-solid fa-chevron-right" style="font-size:12px; margin-left:5px;"></i>
      </a>
    </div>
  </div>

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

    <a href="mailto:esbrasilbgr@gmail.com" class="contact-btn btn-email">
      <span><i class="fa-regular fa-envelope"></i> esbrasilbgr@gmail.com</span>
      <i class="fa-solid fa-arrow-right arrow-icon"></i>
    </a>

    <div class="map-box" aria-label="Lokasi Es Brasil">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0476371728395!2d106.79724!3d-6.64099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzgnMjcuNiJTIDEwNocksDQ3JzUwLjEiRQ!5e0!3m2!1sid!2sid!4v1650000000000"
        width="100%" height="300" style="border:0; display:block;"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <div class="flex-col hours-col">
    <h2>Jam Operasional</h2>
    <div class="hours-box">
      <p class="day">Senin - Sabtu</p>
      <p class="time">08:00 - 18:00</p>
      <p class="status">Minggu Libur</p>
    </div>

    <div class="social-container">
      <h3>Ikuti kami di Sosmed</h3>
      <a href="#" class="social-btn fb" aria-label="Facebook Es Brasil">
        <i class="fa-brands fa-facebook-f"></i> Es Brasil
      </a>
      <a href="#" class="social-btn ig" aria-label="Instagram Es Brasil Bogor">
        <i class="fa-brands fa-instagram"></i> esbrasil_bogor
      </a>
    </div>
  </div>

</section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2026 Es Brasil. All Rights Reserved.</p>
  </footer>

</body>
</html>
