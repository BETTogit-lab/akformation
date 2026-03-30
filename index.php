<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>A.K Formations · Former les talents, construire les leaders de demain</title>
  
  <!-- Favicon (logo dans l'onglet) -->
  <link rel="icon" type="image/png" href="AK formations.jpeg">
  <link rel="shortcut icon" href="AK formations.jpeg" type="image/x-icon">
  
  <!-- Bootstrap 5 + Icons + Google Font Inter -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <style>
    * { font-family: 'Inter', sans-serif; margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --primary-deep: #0a4b7a;
      --primary-medium: #1f6aa5;
      --primary-soft: #d9ebf7;
      --primary-bg-light: #f2f9ff;
      --accent-gold: #eab308;
      --gray-text: #1e2f40;
      --gray-mid: #4b5b6b;
      --border-light: #c2d9ec;
      --card-shadow: 0 15px 40px -12px rgba(10, 75, 122, 0.12);
      --transition: all 0.3s ease;
    }

    body {
      color: var(--gray-text);
      background-color: #ffffff;
      scroll-behavior: smooth;
      overflow-x: hidden;
      width: 100%;
    }

    h1, h2, h3, h4, .h1, .h2, .h3 { font-weight: 700; color: #0c2c42; }

    /* ===== NAVBAR RESPONSIVE ===== */
    .navbar {
      background: rgba(255,255,255,0.98) !important;
      backdrop-filter: blur(6px);
      box-shadow: 0 6px 18px rgba(10,75,122,0.06);
      padding: 0.5rem 0;
      z-index: 1030;
    }
    
    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 0;
    }
    
    .logo-img {
      height: 50px;
      width: auto;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(10,75,122,0.2);
      transition: var(--transition);
    }
    
    @media (min-width: 768px) {
      .logo-img {
        height: 60px;
      }
    }
    
    .logo-img:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 15px rgba(10,75,122,0.3);
    }
    
    .brand-text {
      font-weight: 800;
      font-size: 1.3rem;
      color: #0000FF !important;
      letter-spacing: -0.02em;
    }
    
    @media (min-width: 768px) {
      .brand-text {
        font-size: 1.8rem;
      }
    }
    
    .brand-text span { 
      color: #000000 !important; 
      font-weight: 800;
    }
    
    .navbar-toggler {
      border: none;
      padding: 0.5rem;
    }
    
    .navbar-toggler:focus {
      box-shadow: 0 0 0 2px var(--primary-deep);
    }
    
    .nav-link {
      font-weight: 600;
      color: #1f3a57 !important;
      margin: 0 0.15rem;
      padding: 0.6rem 1rem !important;
      border-radius: 40px;
      transition: var(--transition);
      position: relative;
    }
    
    @media (min-width: 992px) {
      .nav-link {
        padding: 0.6rem 1.2rem !important;
      }
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 3px;
      background: var(--accent-gold);
      transition: width 0.3s ease;
      border-radius: 3px;
    }
    
    .nav-link:hover::after,
    .nav-link.active::after {
      width: 30px;
    }
    
    .nav-link:hover,
    .nav-link.active {
      background: var(--primary-soft);
      color: var(--primary-deep) !important;
    }

    /* ===== BOUTONS RESPONSIVE ===== */
    .btn-primary-custom,
    .btn-outline-custom,
    .btn-gold-custom {
      padding: 0.6rem 1.5rem;
      font-size: 0.9rem;
    }
    
    @media (min-width: 768px) {
      .btn-primary-custom,
      .btn-outline-custom,
      .btn-gold-custom {
        padding: 0.7rem 2.1rem;
        font-size: 1rem;
      }
    }
    
    .btn-primary-custom {
      background-color: var(--primary-deep);
      border: 1px solid var(--primary-deep);
      color: white;
      font-weight: 600;
      border-radius: 60px;
      transition: var(--transition);
      box-shadow: 0 4px 10px rgba(10,75,122,0.2);
    }
    
    .btn-primary-custom:hover {
      background-color: #0f3757;
      border-color: #0f3757;
      transform: translateY(-2px);
      box-shadow: 0 10px 18px rgba(10,75,122,0.25);
    }
    
    .btn-outline-custom {
      background: transparent;
      border: 1.5px solid var(--primary-deep);
      color: var(--primary-deep);
      font-weight: 600;
      border-radius: 60px;
      transition: var(--transition);
    }
    
    .btn-outline-custom:hover {
      background: var(--primary-deep);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 8px 16px rgba(10,75,122,0.15);
    }
    
    .btn-gold-custom {
      background-color: var(--accent-gold);
      border: 1px solid var(--accent-gold);
      color: var(--primary-deep);
      font-weight: 700;
      border-radius: 60px;
      transition: var(--transition);
      box-shadow: 0 4px 10px rgba(234, 179, 8, 0.3);
    }
    
    .btn-gold-custom:hover {
      background-color: #d4a70e;
      border-color: #d4a70e;
      transform: translateY(-2px);
      box-shadow: 0 10px 18px rgba(234, 179, 8, 0.4);
    }
    
    .btn-outline-light {
      border: 1.5px solid white;
      color: white;
      font-weight: 600;
      padding: 0.6rem 1.5rem;
      border-radius: 60px;
      transition: var(--transition);
      background: transparent;
    }
    
    @media (min-width: 768px) {
      .btn-outline-light {
        padding: 0.7rem 2.1rem;
      }
    }
    
    .btn-outline-light:hover {
      background: white;
      color: var(--primary-deep);
    }

    /* ===== HERO SECTION RESPONSIVE ===== */
    .hero-section {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      overflow: hidden;
      padding: 5rem 0;
    }
    
    @media (min-width: 768px) {
      .hero-section {
        padding: 6rem 0;
      }
    }
    
    #heroCarousel {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
    }
    
    #heroCarousel .carousel-item {
      height: 100%;
      transition: transform 1.5s ease-in-out;
    }
    
    #heroCarousel .carousel-item div {
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
    }
    
    #heroCarousel::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, rgba(10,75,122,0.85) 0%, rgba(10,75,122,0.6) 100%);
      z-index: 1;
      pointer-events: none;
    }
    
    .carousel-indicators {
      z-index: 3;
      bottom: 15px;
    }
    
    @media (min-width: 768px) {
      .carousel-indicators {
        bottom: 20px;
      }
    }
    
    .carousel-indicators button {
      width: 10px !important;
      height: 10px !important;
      border-radius: 50% !important;
      margin: 0 4px !important;
    }
    
    @media (min-width: 768px) {
      .carousel-indicators button {
        width: 12px !important;
        height: 12px !important;
        margin: 0 5px !important;
      }
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      width: 100%;
    }
    
    .hero-content .content-wrapper {
      background: rgba(10, 75, 122, 0.9);
      backdrop-filter: blur(5px);
      border: 1px solid rgba(234, 179, 8, 0.3);
      border-radius: 1.5rem;
      padding: 1.5rem;
    }
    
    @media (min-width: 768px) {
      .hero-content .content-wrapper {
        padding: 2.5rem;
        border-radius: 2rem;
      }
    }
    
    .hero-title {
      font-size: 1.8rem;
      font-weight: 800;
      line-height: 1.2;
      color: white;
    }
    
    @media (min-width: 768px) {
      .hero-title {
        font-size: 2.5rem;
      }
    }
    
    @media (min-width: 992px) {
      .hero-title {
        font-size: 3.1rem;
      }
    }
    
    .hero-sub {
      font-size: 0.95rem;
      color: rgba(255,255,255,0.9);
    }
    
    @media (min-width: 768px) {
      .hero-sub {
        font-size: 1.1rem;
      }
    }
    
    @media (min-width: 992px) {
      .hero-sub {
        font-size: 1.2rem;
      }
    }
    
    .stats-grid {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(5px);
      border: 1px solid var(--accent-gold);
      border-radius: 1.5rem;
      padding: 1rem;
      margin-top: 1.5rem;
    }
    
    @media (min-width: 768px) {
      .stats-grid {
        padding: 1.5rem;
        margin-top: 0;
      }
    }
    
    .stat-item {
      text-align: center;
      padding: 0.75rem;
      background: white;
      border-radius: 1rem;
      box-shadow: 0 5px 15px rgba(10,75,122,0.08);
    }
    
    @media (min-width: 768px) {
      .stat-item {
        padding: 1rem;
      }
    }
    
    .stat-number {
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--primary-deep);
      line-height: 1;
    }
    
    @media (min-width: 768px) {
      .stat-number {
        font-size: 2rem;
      }
    }
    
    @media (min-width: 992px) {
      .stat-number {
        font-size: 2.2rem;
      }
    }
    
    .stat-label {
      color: var(--gray-text);
      font-weight: 500;
      font-size: 0.75rem;
    }
    
    @media (min-width: 768px) {
      .stat-label {
        font-size: 0.85rem;
      }
    }
    
    @media (min-width: 992px) {
      .stat-label {
        font-size: 0.9rem;
      }
    }

    /* ===== CARD STYLES RESPONSIVE ===== */
    .card-formation, .card-valeur {
      background: white;
      border: 1px solid #e2effa;
      border-radius: 24px;
      padding: 1.5rem;
      box-shadow: 0 6px 20px rgba(10,75,122,0.04);
      transition: var(--transition);
      height: 100%;
    }
    
    @media (min-width: 768px) {
      .card-formation, .card-valeur {
        padding: 2rem 1.6rem;
        border-radius: 32px;
      }
    }
    
    .card-formation:hover, .card-valeur:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 40px -10px rgba(10,75,122,0.18);
      border-color: var(--primary-medium);
    }
    
    @media (min-width: 768px) {
      .card-formation:hover, .card-valeur:hover {
        transform: translateY(-8px);
      }
    }
    
    .card-formation i, .card-valeur i {
      font-size: 2rem;
      color: var(--primary-deep);
      margin-bottom: 1rem;
    }
    
    @media (min-width: 768px) {
      .card-formation i, .card-valeur i {
        font-size: 2.5rem;
        margin-bottom: 1.2rem;
      }
    }
    
    .badge-bleu-custom {
      background: var(--primary-soft);
      color: var(--primary-deep);
      font-weight: 600;
      padding: 0.4rem 1.2rem;
      border-radius: 40px;
      font-size: 0.85rem;
      display: inline-block;
    }
    
    @media (min-width: 768px) {
      .badge-bleu-custom {
        padding: 0.4rem 1.5rem;
        font-size: 0.95rem;
      }
    }
    
    .section-title {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--primary-deep);
      position: relative;
      display: inline-block;
    }
    
    @media (min-width: 768px) {
      .section-title {
        font-size: 2.2rem;
      }
    }
    
    @media (min-width: 992px) {
      .section-title {
        font-size: 2.5rem;
      }
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 60px;
      height: 3px;
      background: var(--accent-gold);
      border-radius: 2px;
    }
    
    @media (min-width: 768px) {
      .section-title::after {
        bottom: -10px;
        width: 80px;
        height: 4px;
      }
    }
    
    .section-subtitle {
      color: var(--primary-deep);
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: 600;
      font-size: 0.75rem;
      background: rgba(10,75,122,0.04);
      display: inline-block;
      padding: 0.2rem 1rem;
      border-radius: 40px;
    }
    
    @media (min-width: 768px) {
      .section-subtitle {
        font-size: 0.85rem;
        padding: 0.2rem 1.2rem;
      }
    }

    /* ===== SECTION SPACING RESPONSIVE ===== */
    section {
      padding: 3rem 0;
    }
    
    @media (min-width: 768px) {
      section {
        padding: 4rem 0;
      }
    }
    
    @media (min-width: 992px) {
      section {
        padding: 5rem 0;
      }
    }

    /* ===== FORMULAIRE RESPONSIVE ===== */
    .form-control, .form-select {
      border-radius: 60px;
      padding: 0.7rem 1.5rem;
      border: 1px solid #d4e2f0;
      background: #fbfeff;
      transition: var(--transition);
      font-size: 0.9rem;
    }
    
    @media (min-width: 768px) {
      .form-control, .form-select {
        padding: 0.9rem 1.8rem;
        font-size: 1rem;
      }
    }
    
    .form-control:focus, .form-select:focus {
      border-color: var(--primary-deep);
      box-shadow: 0 0 0 4px rgba(10,75,122,0.1);
    }

    /* ===== ALERT MESSAGES ===== */
    .alert {
      padding: 0.8rem 1.2rem;
      border-radius: 60px;
      margin-bottom: 1.5rem;
      border: none;
      font-weight: 500;
      animation: slideDown 0.5s ease;
      font-size: 0.85rem;
    }
    
    @media (min-width: 768px) {
      .alert {
        padding: 1rem 1.5rem;
        margin-bottom: 2rem;
        font-size: 1rem;
      }
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ===== FOOTER RESPONSIVE ===== */
    footer {
      background: var(--primary-deep);
      color: #bed3e8;
      padding: 2rem 0 1rem;
    }
    
    @media (min-width: 768px) {
      footer {
        padding: 3rem 0 1.5rem;
      }
    }
    
    footer a { color: #bed3e8; text-decoration: none; transition: 0.1s; }
    footer a:hover { color: white; }
    
    .footer-logo {
      height: 50px;
      width: auto;
      border-radius: 10px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.3);
      border: 2px solid var(--accent-gold);
    }
    
    @media (min-width: 768px) {
      .footer-logo {
        height: 70px;
        border-radius: 12px;
      }
    }
    
    .footer-brand {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    
    .footer-brand h4 {
      color: #000000 !important;
      font-weight: 700;
      font-size: 1.2rem;
    }
    
    @media (min-width: 768px) {
      .footer-brand h4 {
        font-size: 1.5rem;
      }
    }

    /* ===== RESPONSIVE TEXT ALIGNMENT ===== */
    @media (max-width: 767px) {
      section .container,
      section .row,
      section [class*="col-"] {
        text-align: center;
      }
      
      section .section-title::after {
        left: 50%;
        transform: translateX(-50%);
      }
      
      .d-flex.align-items-center {
        justify-content: center;
      }
      
      .card-formation, .testimonial-card, .partner-logo {
        text-align: center;
      }
      
      .icon-circle {
        margin: 0 auto 0.5rem auto;
      }
      
      .ms-3, .me-3 {
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
      
      .border-start-blue {
        border-left: none !important;
        border-top: 6px solid var(--primary-deep) !important;
      }
      
      .vision-highlight {
        text-align: center;
      }
    }

    /* ===== PARTNER LOGO ===== */
    .partner-logo {
      background: white;
      border-radius: 16px;
      padding: 1.2rem;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      transition: var(--transition);
      height: 100%;
      border: 1px solid var(--border-light);
    }
    
    @media (min-width: 768px) {
      .partner-logo {
        padding: 1.5rem;
      }
    }
    
    .partner-logo:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(10,75,122,0.15);
      border-color: var(--primary-deep);
    }
    
    .partner-logo i {
      color: var(--primary-deep);
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }
    
    @media (min-width: 768px) {
      .partner-logo i {
        font-size: 2.5rem;
        margin-bottom: 1rem;
      }
    }
    
    .partner-logo h5 {
      color: var(--primary-deep);
      font-size: 1rem;
    }
    
    @media (min-width: 768px) {
      .partner-logo h5 {
        font-size: 1.25rem;
      }
    }

    /* ===== TESTIMONIAL CARD ===== */
    .testimonial-card {
      background: white;
      border-radius: 24px;
      padding: 1.5rem;
      box-shadow: 0 10px 30px rgba(10,75,122,0.05);
      border: 1px solid #e6f0fa;
      transition: var(--transition);
    }
    
    @media (min-width: 768px) {
      .testimonial-card {
        padding: 2rem;
        border-radius: 30px;
      }
    }
    
    .testimonial-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(10,75,122,0.1);
    }

    /* ===== ICON CIRCLE ===== */
    .icon-circle {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
    }
    
    @media (min-width: 768px) {
      .icon-circle {
        width: 60px;
        height: 60px;
        font-size: 1.8rem;
      }
    }

    /* ===== VISION HIGHLIGHT ===== */
    .vision-highlight {
      background: linear-gradient(145deg, #ffffff, #f0f7ff);
      border-left: 6px solid var(--accent-gold);
      padding: 1.5rem;
      border-radius: 20px;
    }
    
    @media (min-width: 768px) {
      .vision-highlight {
        padding: 2rem;
        border-radius: 24px;
      }
    }

    /* ===== SCROLLING TEXT ===== */
    .scrolling-text {
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
    }
    
    .scrolling-content {
      display: inline-block;
      animation: scrollText 20s linear infinite;
      white-space: nowrap;
    }
    
    .scrolling-content span {
      display: inline-block;
      color: white;
      font-size: 0.85rem;
      padding-right: 50px;
    }
    
    @media (min-width: 768px) {
      .scrolling-content span {
        font-size: 1rem;
      }
    }
    
    @keyframes scrollText {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    
    .scrolling-text:hover .scrolling-content {
      animation-play-state: paused;
    }
    
    @media (max-width: 768px) {
      .scrolling-content {
        animation: scrollText 30s linear infinite;
      }
    }

    /* ===== FADE IN ANIMATION ===== */
    .fade-in-section {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    
    .fade-in-section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ===== HISTORY & MISSION CARDS ===== */
    .history-card, .mission-card {
      position: relative;
      overflow: hidden;
    }
    
    .history-card::before, .mission-card::before {
      content: '';
      position: absolute;
      top: -20px;
      right: -20px;
      width: 80px;
      height: 80px;
      background: rgba(234, 179, 8, 0.1);
      border-radius: 50%;
    }
    
    @media (min-width: 768px) {
      .history-card::before, .mission-card::before {
        width: 100px;
        height: 100px;
      }
    }

    /* ===== UTILITY CLASSES ===== */
    .bg-primary-soft {
      background-color: rgba(10,75,122,0.05);
    }
    
    .text-white-90 { color: rgba(255,255,255,0.9); }
    .text-white-80 { color: rgba(255,255,255,0.8); }
    .text-white-70 { color: rgba(255,255,255,0.7); }
    
    .container {
      padding-left: 1rem;
      padding-right: 1rem;
    }
    
    @media (min-width: 768px) {
      .container {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
      }
    }
    
    @media (min-width: 1200px) {
      .container {
        padding-left: 0;
        padding-right: 0;
      }
    }
  </style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="AK formations.jpeg" alt="AK Formations Logo" class="logo-img">
      <span class="brand-text fw-bold">A.K Formations</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Menu de navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link active" href="#accueil">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="#a-propos">À propos</a></li>
        <li class="nav-item"><a class="nav-link" href="#formations">Formations</a></li>
        <li class="nav-item"><a class="nav-link" href="#partenaires">Partenaires</a></li>
        <li class="nav-item"><a class="nav-link" href="#temoignages">Témoignages</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ===== ACCUEIL AVEC CAROUSEL ===== -->
<section id="accueil" class="hero-section">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner h-100">
      <div class="carousel-item active h-100">
        <div style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
      </div>
      <div class="carousel-item h-100">
        <div style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');"></div>
      </div>
    </div>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
  </div>
  
  <div class="container position-relative hero-content">
    <div class="row align-items-center g-4">
      <div class="col-lg-8">
        <div class="content-wrapper">
          <span class="badge-bleu-custom mb-3"><i class="fas fa-map-marker-alt me-2"></i>Abidjan • Bouaké</span>
          <h1 class="hero-title">Former les talents, <span class="text-warning">construire les leaders</span> de demain</h1>
          <p class="hero-sub my-3">AK Formations est un cabinet de formation basé en Côte d'Ivoire, spécialisé dans la qualification professionnelle, le renforcement de capacités et l'insertion professionnelle des jeunes talents et diplômés.</p>
          <p class="mb-3 text-white-80 fw-medium">Créé à Abidjan, le cabinet dispose également d'un bureau opérationnel à Bouaké, afin de rapprocher ses services des jeunes talents et professionnels de l'intérieur du pays.</p>
          <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
            <a href="#formations" class="btn btn-gold-custom"><i class="fas fa-graduation-cap me-2"></i>Découvrir nos formations</a>
            <a href="#contact" class="btn btn-outline-light"><i class="fas fa-envelope me-2"></i>Nous contacter</a>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="stats-grid">
          <div class="row g-2 g-md-3">
            <div class="col-6">
              <div class="stat-item">
                <div class="stat-number">150+</div>
                <div class="stat-label">Apprenants</div>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-item">
                <div class="stat-number">7</div>
                <div class="stat-label">Domaines</div>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-item">
                <div class="stat-number">6+</div>
                <div class="stat-label">Partenaires</div>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-item">
                <div class="stat-number">2</div>
                <div class="stat-label">Sites</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== QUI SOMMES-NOUS (intro) ===== -->
<section class="py-4 py-md-5 bg-white">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card-formation">
          <div class="d-flex align-items-center mb-3 flex-wrap justify-content-center justify-content-md-start">
            <div class="icon-circle" style="background-color: var(--primary-deep);">
              <i class="fas fa-building text-white"></i>
            </div>
            <h4 class="mb-0 ms-md-3 mt-2 mt-md-0">Qui sommes-nous ?</h4>
          </div>
          <p><strong>A.K Formations</strong> est une Société à Responsabilité Limitée (SARL) créée à Abidjan, Côte d'Ivoire. Le cabinet intervient dans le domaine de la formation professionnelle, de l'accompagnement des jeunes talents et du développement des compétences.</p>
          <p class="mt-3">Afin d'assurer une meilleure proximité avec ses bénéficiaires, A.K Formations dispose également d'un bureau opérationnel à <strong>Bouaké</strong>, qui permet de déployer ses activités de formation et d'accompagnement dans la région du centre du pays.</p>
          <div class="mt-4 p-3 bg-primary-soft rounded-4">
            <p class="mb-0 fw-bold" style="color: var(--primary-deep);"><i class="fas fa-quote-right me-2 text-warning"></i>Notre mission est de former, accompagner et autonomiser les jeunes talents et diplômés afin de faciliter leur insertion dans le monde professionnel.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Domaines d'intervention -->
    <h3 class="mt-4 mt-md-5 mb-3 text-center text-md-start">Nos domaines d'intervention</h3>
    <div class="row g-3 g-md-4">
      <div class="col-md-4">
        <div class="card-formation h-100">
          <i class="fas fa-graduation-cap"></i>
          <h5>Formation et insertion professionnelle</h5>
          <p>Nous proposons des programmes de formation adaptés aux réalités du marché du travail afin de renforcer les compétences professionnelles et améliorer l'employabilité des apprenants.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-formation h-100">
          <i class="fas fa-hand-holding-usd"></i>
          <h5>Accompagnement à la recherche de financement</h5>
          <p>Nous accompagnons les porteurs de projets et entrepreneurs dans l'identification et la mobilisation de financements solidaires pour leurs initiatives.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-formation h-100">
          <i class="fas fa-passport"></i>
          <h5>Assistance Visa (Études et stages)</h5>
          <p>Nous offrons un service d'assistance et d'accompagnement pour les démarches de visa destinées aux études et stages à l'étranger.</p>
        </div>
      </div>
    </div>

    <!-- Formations principales -->
    <h3 class="mt-4 mt-md-5 mb-3 text-center text-md-start">Nos formations principales</h3>
    <p class="mb-3 mb-md-4 text-center text-md-start">A.K Formations propose des formations de qualification professionnelle et de renforcement de capacités dans plusieurs domaines stratégiques :</p>
    <div class="row g-3 g-md-4">
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-users"></i> <span class="fw-semibold d-block mt-2">Ressources Humaines</span></div></div>
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-laptop"></i> <span class="fw-semibold d-block mt-2">Informatique</span></div></div>
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-chart-line"></i> <span class="fw-semibold d-block mt-2">Gestion Commerciale & Marketing</span></div></div>
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-calculator"></i> <span class="fw-semibold d-block mt-2">Comptabilité</span></div></div>
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-user-tie"></i> <span class="fw-semibold d-block mt-2">Assistanat de Direction</span></div></div>
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-rocket"></i> <span class="fw-semibold d-block mt-2">Entrepreneuriat et Gestion de projet</span></div></div>
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-brain"></i> <span class="fw-semibold d-block mt-2">Développement des compétences</span></div></div>
      <div class="col-md-3 col-6"><div class="card-formation text-center py-3 py-md-4"><i class="fas fa-handshake"></i> <span class="fw-semibold d-block mt-2">Développement personnel</span></div></div>
    </div>
  </div>
</section>

<!-- ===== À PROPOS ===== -->
<section id="a-propos" class="py-4 py-md-5 bg-light fade-in-section">
  <div class="container py-2 py-md-4">
    <div class="text-center text-md-start">
      <span class="section-subtitle">Qui nous sommes</span>
      <h2 class="section-title">À propos d'AK Formations</h2>
    </div>
    
    <div class="row g-3 g-md-4 mt-2 mt-md-4">
      <div class="col-md-6">
        <div class="card-formation history-card h-100">
          <div class="d-flex align-items-center mb-3 flex-wrap justify-content-center justify-content-md-start">
            <div class="icon-circle bg-warning me-md-3 mb-2 mb-md-0">
              <i class="fas fa-clock" style="color: var(--primary-deep);"></i>
            </div>
            <h4 class="mb-0">Notre histoire</h4>
          </div>
          <p><strong>Créée en août 2025 à Abidjan</strong>, A.K Formations est née de la volonté de contribuer activement à l'autonomisation des jeunes et au développement des compétences professionnelles.</p>
          <p>Aujourd'hui, le cabinet développe ses activités à partir de son siège à Abidjan et de son bureau opérationnel à Bouaké, afin d'élargir l'accès à la formation et à l'accompagnement professionnel dans tout le pays.</p>
          <div class="mt-3 d-flex gap-3 justify-content-center justify-content-md-start flex-wrap">
            <span class="badge" style="background-color: var(--primary-deep); color: white;"><i class="fas fa-calendar-alt me-1"></i>Création: 2025</span>
            <span class="badge bg-warning text-dark"><i class="fas fa-map-marker-alt me-1"></i>2 sites</span>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="card-formation mission-card h-100" style="background-color: var(--primary-deep); color: white;">
          <div class="d-flex align-items-center mb-3 flex-wrap justify-content-center justify-content-md-start">
            <div class="icon-circle bg-warning me-md-3 mb-2 mb-md-0">
              <i class="fas fa-flag" style="color: var(--primary-deep);"></i>
            </div>
            <h4 class="mb-0 text-white">Notre mission</h4>
          </div>
          <p class="text-white-90">Former, accompagner et autonomiser les jeunes talents et diplômés afin de faciliter leur insertion dans le monde professionnel, encourager l'entrepreneuriat et contribuer au développement du capital humain en Afrique.</p>
        </div>
      </div>
    </div>

    <!-- Implantations -->
    <div class="row g-3 g-md-4 mt-2 mt-md-4">
      <div class="col-md-6">
        <div class="d-flex align-items-center p-3 p-md-4 bg-white rounded-4 shadow-sm flex-wrap justify-content-center justify-content-md-start">
          <div class="icon-circle" style="background-color: var(--primary-deep);">
            <i class="fas fa-map-marker-alt text-white"></i>
          </div>
          <div class="ms-md-3 mt-2 mt-md-0 text-center text-md-start">
            <h5 class="fw-bold" style="color: var(--primary-deep);">Siège Social</h5>
            <p class="mb-0">Abidjan, Cocody Angré 8ème tranche (la Djibi)</p>
            <small class="text-muted">Centre principal de formation</small>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="d-flex align-items-center p-3 p-md-4 bg-white rounded-4 shadow-sm flex-wrap justify-content-center justify-content-md-start">
          <div class="icon-circle bg-warning">
            <i class="fas fa-building" style="color: var(--primary-deep);"></i>
          </div>
          <div class="ms-md-3 mt-2 mt-md-0 text-center text-md-start">
            <h5 class="fw-bold" style="color: var(--primary-deep);">Bureau Opérationnel</h5>
            <p class="mb-0">Bouaké, Côte d'Ivoire</p>
            <small class="text-muted">Proximité avec l'intérieur du pays</small>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Valeurs -->
    <h3 class="mt-4 mt-md-5 mb-3 text-center text-md-start">Nos valeurs</h3>
    <div class="row g-3 g-md-4">
      <div class="col-md-3 col-6">
        <div class="card-valeur text-center">
          <i class="fas fa-star"></i>
          <h5 class="mt-2">Excellence</h5>
          <p class="small text-muted">Nous offrons des formations de qualité adaptées aux exigences du marché.</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card-valeur text-center">
          <i class="fas fa-briefcase"></i>
          <h5 class="mt-2">Professionnalisme</h5>
          <p class="small text-muted">Nos programmes sont conçus et animés par des experts et praticiens.</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card-valeur text-center">
          <i class="fas fa-lightbulb"></i>
          <h5 class="mt-2">Innovation</h5>
          <p class="small text-muted">Nous développons des méthodes pédagogiques modernes et orientées vers la pratique.</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card-valeur text-center">
          <i class="fas fa-heart"></i>
          <h5 class="mt-2">Impact social</h5>
          <p class="small text-muted">Nous contribuons à l'autonomisation des jeunes et au développement économique.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== NOS FORMATIONS ===== -->
<section id="formations" class="py-4 py-md-5 fade-in-section">
  <div class="container">
    <div class="text-center text-md-start">
      <span class="section-subtitle">Programmes adaptés</span>
      <h2 class="section-title">Nos formations</h2>
    </div>
    
    <!-- Public cible -->
    <div class="row mt-3 mt-md-4">
      <div class="col-12">
        <div class="card-formation bg-primary-soft border-0">
          <div class="d-flex align-items-center mb-3 flex-wrap justify-content-center justify-content-md-start">
            <div class="icon-circle bg-warning me-md-3 mb-2 mb-md-0">
              <i class="fas fa-users" style="color: var(--primary-deep);"></i>
            </div>
            <h4 class="mb-0">Nos programmes s'adressent aux :</h4>
          </div>
          <div class="row g-2 g-md-3">
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                <i class="fas fa-circle text-warning me-2" style="font-size: 0.6rem;"></i>
                <span class="fw-medium">Étudiants</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                <i class="fas fa-circle text-warning me-2" style="font-size: 0.6rem;"></i>
                <span class="fw-medium">Jeunes diplômés</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                <i class="fas fa-circle text-warning me-2" style="font-size: 0.6rem;"></i>
                <span class="fw-medium">Professionnels</span>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                <i class="fas fa-circle text-warning me-2" style="font-size: 0.6rem;"></i>
                <span class="fw-medium">Entrepreneurs</span>
              </div>
            </div>
          </div>
          <p class="mt-3 mt-md-4 mb-0 fw-medium" style="color: var(--primary-deep);"><i class="fas fa-quote-right me-2 text-warning"></i>Elles sont conçues pour développer des compétences pratiques directement applicables dans le monde professionnel.</p>
        </div>
      </div>
    </div>
    
    <!-- Domaines de formation avec accordéons -->
    <h4 class="mt-4 mt-md-5 mb-3 text-center text-md-start">Domaines de formation</h4>
    <div class="row g-3 g-md-4">
      <div class="col-md-6 col-lg-4">
        <div class="card-formation h-100">
          <div class="domain-header d-flex justify-content-between align-items-center p-2 p-md-3" data-bs-toggle="collapse" data-bs-target="#rhSubdomains" aria-expanded="false" style="cursor: pointer;">
            <div class="d-flex align-items-center gap-2 gap-md-3">
              <i class="fas fa-users fa-2x" style="color: var(--primary-deep);"></i>
              <h5 class="fw-bold mb-0">Ressources Humaines</h5>
            </div>
            <i class="fas fa-chevron-down toggle-icon"></i>
          </div>
          <div class="collapse" id="rhSubdomains">
            <div class="subdomain-list p-2 p-md-3 pt-0">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Gestion administrative du personnel</li>
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Recrutement et gestion des talents</li>
                <li class="mb-0"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Gestion de la paie</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4">
        <div class="card-formation h-100">
          <div class="domain-header d-flex justify-content-between align-items-center p-2 p-md-3" data-bs-toggle="collapse" data-bs-target="#itSubdomains" aria-expanded="false" style="cursor: pointer;">
            <div class="d-flex align-items-center gap-2 gap-md-3">
              <i class="fas fa-laptop fa-2x" style="color: var(--primary-deep);"></i>
              <h5 class="fw-bold mb-0">Informatique</h5>
            </div>
            <i class="fas fa-chevron-down toggle-icon"></i>
          </div>
          <div class="collapse" id="itSubdomains">
            <div class="subdomain-list p-2 p-md-3 pt-0">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Bureautique avancée</li>
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Initiation aux outils numériques</li>
                <li class="mb-0"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Compétences digitales professionnelles</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4">
        <div class="card-formation h-100">
          <div class="domain-header d-flex justify-content-between align-items-center p-2 p-md-3" data-bs-toggle="collapse" data-bs-target="#marketingSubdomains" aria-expanded="false" style="cursor: pointer;">
            <div class="d-flex align-items-center gap-2 gap-md-3">
              <i class="fas fa-chart-line fa-2x" style="color: var(--primary-deep);"></i>
              <h5 class="fw-bold mb-0">Gestion commerciale et marketing</h5>
            </div>
            <i class="fas fa-chevron-down toggle-icon"></i>
          </div>
          <div class="collapse" id="marketingSubdomains">
            <div class="subdomain-list p-2 p-md-3 pt-0">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Techniques de vente</li>
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Marketing digital</li>
                <li class="mb-0"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Stratégies commerciales</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row g-3 g-md-4 mt-2">
      <div class="col-md-6 col-lg-4">
        <div class="card-formation h-100">
          <div class="domain-header d-flex justify-content-between align-items-center p-2 p-md-3" data-bs-toggle="collapse" data-bs-target="#accountingSubdomains" aria-expanded="false" style="cursor: pointer;">
            <div class="d-flex align-items-center gap-2 gap-md-3">
              <i class="fas fa-calculator fa-2x" style="color: var(--primary-deep);"></i>
              <h5 class="fw-bold mb-0">Comptabilité</h5>
            </div>
            <i class="fas fa-chevron-down toggle-icon"></i>
          </div>
          <div class="collapse" id="accountingSubdomains">
            <div class="subdomain-list p-2 p-md-3 pt-0">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Comptabilité générale</li>
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Gestion financière</li>
                <li class="mb-0"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Analyse financière</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4">
        <div class="card-formation h-100">
          <div class="domain-header d-flex justify-content-between align-items-center p-2 p-md-3" data-bs-toggle="collapse" data-bs-target="#assistantSubdomains" aria-expanded="false" style="cursor: pointer;">
            <div class="d-flex align-items-center gap-2 gap-md-3">
              <i class="fas fa-user-tie fa-2x" style="color: var(--primary-deep);"></i>
              <h5 class="fw-bold mb-0">Assistanat de direction</h5>
            </div>
            <i class="fas fa-chevron-down toggle-icon"></i>
          </div>
          <div class="collapse" id="assistantSubdomains">
            <div class="subdomain-list p-2 p-md-3 pt-0">
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Organisation administrative</li>
                <li class="mb-2"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Gestion des agendas et réunions</li>
                <li class="mb-0"><i class="fas fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Communication professionnelle</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Types de formation -->
    <h4 class="mt-4 mt-md-5 mb-3 text-center text-md-start">Types de formation</h4>
    
    <div class="card-formation">
      <ul class="list-unstyled mb-0">
        <li class="mb-3">
          <span class="fw-bold" style="color: var(--primary-deep);">- Formation de qualification professionnelle</span><br>
          <span class="text-muted">Permet d'acquérir des compétences métier spécifiques.</span>
        </li>
        <li class="mb-0">
          <span class="fw-bold" style="color: var(--primary-deep);">- Renforcement de capacités</span><br>
          <span class="text-muted">Destiné aux professionnels souhaitant améliorer leurs compétences et performances.</span>
        </li>
      </ul>
    </div>
    
    <div class="text-center mt-4 mt-md-5">
      <span class="badge-bleu-custom d-inline-flex align-items-center gap-2">
        <i class="fas fa-info-circle"></i>
        Formation de qualification professionnelle • Renforcement de capacités
      </span>
    </div>
  </div>
</section>

<style>
.card-formation {
  background: white;
  border-radius: 16px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden;
}

.card-formation:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.domain-header {
  transition: background-color 0.2s ease;
  border-bottom: 1px solid rgba(0,0,0,0.05);
}

.domain-header:hover {
  background-color: rgba(0,0,0,0.02);
}

.toggle-icon {
  transition: transform 0.3s ease;
  color: var(--primary-deep);
}

.domain-header[aria-expanded="true"] .toggle-icon {
  transform: rotate(180deg);
}

.subdomain-list {
  border-top: 1px solid rgba(0,0,0,0.05);
}

.subdomain-list ul li {
  color: #4a5568;
  font-size: 0.9rem;
  padding: 0.25rem 0;
}

.bg-primary-soft {
  background-color: rgba(0, 123, 255, 0.05);
}

.icon-circle {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.badge-bleu-custom {
  background-color: var(--primary-deep, #0a3b5c);
  color: white;
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  font-size: 0.9rem;
}
</style>

<script>
document.querySelectorAll('.domain-header').forEach(header => {
  header.addEventListener('click', function(e) {
    e.stopPropagation();
  });
});
</script>

<!-- ===== PARTENAIRES détaillés ===== -->
<section id="partenaires" class="py-4 py-md-5 bg-light fade-in-section">
  <div class="container">
    <div class="text-center text-md-start">
      <span class="section-subtitle">Ils nous font confiance</span>
      <h2 class="section-title">Partenaires académiques & stratégiques</h2>
    </div>
    
    <p class="mt-2 mt-md-3 text-center text-md-start">AK Formations développe ses activités en collaboration avec des partenaires académiques et institutionnels.</p>
    
    <div class="row g-3 g-md-4 mt-2 mt-md-4">
      <div class="col-md-4 col-6">
        <div class="partner-logo">
          <i class="fas fa-hand-holding-heart fa-2x fa-md-3x mb-2"></i>
          <h5 class="fw-bold">ONG Human Boost</h5>
          <p class="text-muted small">Partenariat pour l'insertion des jeunes</p>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="partner-logo">
          <i class="fas fa-university fa-2x fa-md-3x mb-2"></i>
          <h5 class="fw-bold">Toulouse Business School</h5>
          <p class="text-muted small">Partenariat pour les programmes internationaux</p>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="partner-logo">
          <i class="fas fa-briefcase fa-2x fa-md-3x mb-2"></i>
          <h5 class="fw-bold">ADN Consulting</h5>
          <p class="text-muted small">Expertise en conseil RH</p>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="partner-logo">
          <i class="fas fa-chart-line fa-2x fa-md-3x mb-2"></i>
          <h5 class="fw-bold">IAE Aix-Marseille</h5>
          <p class="text-muted small">Formations en management</p>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="partner-logo">
          <i class="fas fa-lightbulb fa-2x fa-md-3x mb-2"></i>
          <h5 class="fw-bold">Goodeals</h5>
          <p class="text-muted small">Partenariat pour la communication</p>
        </div>
      </div>
      <div class="col-md-4 col-6">
        <div class="partner-logo">
          <i class="fas fa-heart fa-2x fa-md-3x mb-2"></i>
          <h5 class="fw-bold">École de Psychologie</h5>
          <p class="text-muted small">Accompagnement psychologique</p>
        </div>
      </div>
    </div>
    
    <div class="mt-4 mt-md-5 p-3 p-md-4 rounded-4 overflow-hidden" style="background-color: var(--primary-deep);">
      <div class="scrolling-text">
        <div class="scrolling-content">
          <span>Ces collaborations contribuent à renforcer la qualité des programmes, favoriser les échanges académiques et créer davantage d'opportunités pour les apprenants.</span>
          <span>Ces collaborations contribuent à renforcer la qualité des programmes, favoriser les échanges académiques et créer davantage d'opportunités pour les apprenants.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TÉMOIGNAGES ===== -->
<section id="temoignages" class="py-4 py-md-5 fade-in-section">
  <div class="container">
    <div class="text-center text-md-start">
      <span class="section-subtitle">Témoignages</span>
      <h2 class="section-title">Ce qu'ils disent de nous</h2>
    </div>
    
    <div class="row g-3 g-md-4 mt-2 mt-md-4">
      <div class="col-md-4">
        <div class="testimonial-card">
          <div class="mb-2 mb-md-3">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p class="fst-italic">"Grâce à la formation A.K Formations, j'ai obtenu mon premier emploi en comptabilité après seulement 3 mois"</p>
          <div class="d-flex align-items-center mt-3 justify-content-center justify-content-md-start">
            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; background-color: var(--primary-deep);">
              <span class="fw-bold text-white">MA</span>
            </div>
            <div class="ms-3 text-center text-md-start">
              <h6 class="mb-0 fw-bold">Marie Yao</h6>
              <small class="text-muted">Promotion 2024</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="testimonial-card">
          <div class="mb-2 mb-md-3">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p class="fst-italic">"Le programme de mobilité m'a permis de faire un stage au Canada. Aujourd'hui je lance ma propre entreprise"</p>
          <div class="d-flex align-items-center mt-3 justify-content-center justify-content-md-start">
            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; background-color: var(--primary-deep);">
              <span class="fw-bold text-white">KN</span>
            </div>
            <div class="ms-3 text-center text-md-start">
              <h6 class="mb-0 fw-bold">Koffi N'Guessan</h6>
              <small class="text-muted">Promotion 2024</small>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="testimonial-card">
          <div class="mb-2 mb-md-3">
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
            <i class="fas fa-star text-warning"></i>
          </div>
          <p class="fst-italic">"La formation en entrepreneuriat m'a permis de créer mon atelier de couture et de former d'autres jeunes"</p>
          <div class="d-flex align-items-center mt-3 justify-content-center justify-content-md-start">
            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; background-color: var(--primary-deep);">
              <span class="fw-bold text-white">DK</span>
            </div>
            <div class="ms-3 text-center text-md-start">
              <h6 class="mb-0 fw-bold">David Kouadio</h6>
              <small class="text-muted">Entrepreneur</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT ===== -->
<section id="contact" class="py-4 py-md-5 bg-light fade-in-section">
  <div class="container">
    <div class="text-center text-md-start">
      <span class="section-subtitle">Écrivez-nous</span>
      <h2 class="section-title">Parlons de votre projet</h2>
    </div>
    
    <div class="row g-4 g-md-5 align-items-start mt-2 mt-md-4">
      <div class="col-lg-5">
        <div class="d-flex mb-3 mb-md-4 flex-wrap justify-content-center justify-content-md-start">
          <div class="icon-circle" style="background-color: var(--primary-deep);">
            <i class="fas fa-phone-alt text-white"></i>
          </div>
          <div class="ms-md-3 mt-2 mt-md-0 text-center text-md-start">
            <strong>Téléphone:</strong><br>
            +225 07 15 41 42 80<br>
            +225 05 64 98 30 55
          </div>
        </div>
        
        <div class="d-flex mb-3 mb-md-4 flex-wrap justify-content-center justify-content-md-start">
          <div class="icon-circle" style="background-color: var(--primary-deep);">
            <i class="fas fa-map-pin text-white"></i>
          </div>
          <div class="ms-md-3 mt-2 mt-md-0 text-center text-md-start">
            <strong>Siège:</strong> Abidjan, Cocody Angré 8ème tranche (la Djibi) <br>
            <strong>Bureau opérationnel:</strong> Bouaké, Côte d'Ivoire
          </div>
        </div>
        
        <div class="d-flex mb-3 mb-md-4 flex-wrap justify-content-center justify-content-md-start">
          <div class="icon-circle" style="background-color: var(--primary-deep);">
            <i class="fas fa-envelope text-white"></i>
          </div>
          <div class="ms-md-3 mt-2 mt-md-0 text-center text-md-start">
            <strong>Email:</strong> contact@akformations.ci
          </div>
        </div>
        
        <div class="d-flex mb-3 mb-md-4 flex-wrap justify-content-center justify-content-md-start">
          <div class="icon-circle" style="background-color: var(--primary-deep);">
            <i class="fas fa-clock text-white"></i>
          </div>
          <div class="ms-md-3 mt-2 mt-md-0 text-center text-md-start">
            <strong>Horaires d'ouverture:</strong><br>
            Lun - Ven : 8h00 - 17h30<br>
            Sam : 8h00 - 14h00
          </div>
        </div>
        
        <div class="mt-3 mt-md-4 p-3 p-md-4 bg-white rounded-4 shadow-sm text-center text-md-start">
          <p class="fw-medium mb-0"><i class="fas fa-quote-left text-warning me-2"></i>Vous souhaitez obtenir des informations sur nos formations ou nos services ? Notre équipe est à votre disposition.</p>
        </div>
      </div>
      
      <div class="col-lg-7">
        <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div id="successMessage" class="alert alert-success" role="alert">
          <i class="fas fa-check-circle me-2"></i>
          ✅ Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.
        </div>
        <?php endif; ?>
        
        <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div id="errorMessage" class="alert alert-danger" role="alert">
          <i class="fas fa-exclamation-circle me-2"></i>
          ❌ Une erreur est survenue. Veuillez réessayer ou nous contacter directement par téléphone.
        </div>
        <?php endif; ?>
        
        <form id="contactForm" class="bg-white p-4 p-md-5 rounded-5 shadow-sm" method="POST" action="send_message.php">
          <div class="mb-3 mb-md-4">
            <input type="text" name="nom" class="form-control" placeholder="Nom complet" required>
          </div>
          <div class="mb-3 mb-md-4">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="mb-3 mb-md-4">
            <input type="tel" name="telephone" class="form-control" placeholder="Téléphone">
          </div>
          <div class="mb-3 mb-md-4">
            <select name="sujet" class="form-select" required>
              <option value="">Choisir un sujet</option>
              <option value="formation">Inscription à une formation</option>
              <option value="partenariat">Proposition de partenariat</option>
              <option value="information">Demande d'information</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <div class="mb-3 mb-md-4">
            <textarea name="message" rows="4" class="form-control" placeholder="Votre message" required></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-gold-custom w-100">
            <i class="fas fa-paper-plane me-2"></i>Envoyer le message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="pt-4 pt-md-5 pb-3">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4 text-center text-md-start">
        <div class="footer-brand d-flex align-items-center mb-3 justify-content-center justify-content-md-start">
          <img src="AK formations.jpeg" alt="AK Formations Logo" class="footer-logo me-2 me-md-3">
          <span class="brand-text fw-bold">A.K Formations</span>
        </div>
        <p class="text-white-70">Cabinet de formation et d'accompagnement professionnel.</p>
        <p class="text-white-70"><strong class="text-warning">Domaines :</strong><br>
        - Formation professionnelle<br>
        - Renforcement de capacités<br>
        - Insertion professionnelle<br>
        - Assistance Visa</p>
      </div>
      
      <div class="col-lg-3 text-center text-md-start">
        <h4 class="text-white">Liens rapides</h4>
        <ul class="list-unstyled">
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#a-propos">À propos</a></li>
          <li><a href="#formations">Formations</a></li>
          <li><a href="#partenaires">Partenaires</a></li>
          <li><a href="#temoignages">Témoignages</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      
      <div class="col-lg-3 text-center text-md-start">
        <h4 class="text-white">Localisation</h4>
        <p><i class="fas fa-map-marker-alt me-2 text-warning"></i>Siège: Abidjan<br>
        <i class="fas fa-map-marker-alt me-2 text-warning"></i>Bureau: Bouaké</p>
        
        <h4 class="text-white mt-3 mt-md-4">Contact</h4>
        <p><i class="fas fa-phone me-2 text-warning"></i>+225 07 15 41 42 80<br>
        <i class="fas fa-phone me-2 text-warning"></i>+225 05 64 98 30 55</p>
        <p><i class="fas fa-envelope me-2 text-warning"></i>contact@akformations.ci</p>
      </div>
      
      <div class="col-lg-2 text-center text-md-start">
        <h4 class="text-white">Suivez-nous</h4>
        <div class="d-flex gap-3 justify-content-center justify-content-md-start">
          <a href="https://www.facebook.com/a.kconsultingetExpertise" target="_blank" class="social-icon text-white fs-4">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://wa.me/17179824529" target="_blank" class="social-icon text-white fs-4">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>
    </div>
    
    <div class="border-top pt-3 pt-md-4 mt-3 mt-md-4 text-center" style="border-color: #2a4055 !important;">
      <p class="mb-0">© 2025 A.K Formations (SARL) – Tous droits réservés.</p>
      <div class="mt-2">
        <a href="#" class="text-white-50 me-3">Mentions légales</a>
        <a href="#" class="text-white-50">Politique de confidentialité</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var heroCarousel = new bootstrap.Carousel(document.getElementById('heroCarousel'), {
      interval: 5000,
      ride: 'carousel',
      pause: false
    });
    
    const fadeElements = document.querySelectorAll('.fade-in-section');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    
    fadeElements.forEach(el => observer.observe(el));
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          const navHeight = document.querySelector('nav').offsetHeight;
          const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
    
    const sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;
        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
          current = section.getAttribute('id');
        }
      });
      
      document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
          link.classList.add('active');
        }
      });
    });
    
    setTimeout(function() {
      if (window.location.search.includes('success') || window.location.search.includes('error')) {
        const url = new URL(window.location);
        url.searchParams.delete('success');
        url.searchParams.delete('error');
        window.history.replaceState({}, '', url);
      }
    }, 5000);
  });
</script>
</body>
</html>s