<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio KP</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Animate.css -->
  <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet" />

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://unpkg.com/lucide@latest"></script>
  <link href="../assets/img/icon_web.png" rel="icon">

  <!-- Animasi Glowing Navbar -->
  <style>
    .navbar-nav .nav-link {
      color: #0ff !important;
      text-shadow:
        0 0 5px #0ff,
        0 0 10px #0ff,
        0 0 20px #0ff,
        0 0 40px #0ff;
      font-weight: bold;
      animation: glowBlink 0.5s infinite alternate;
    }

    @keyframes glowBlink {
      0% {
        text-shadow:
          0 0 5px #0ff,
          0 0 10px #0ff,
          0 0 20px #0ff,
          0 0 40px #0ff;
      }
      100% {
        text-shadow:
          0 0 2px #00f,
          0 0 4px #00f,
          0 0 6px #00f,
          0 0 8px #00f;
      }
    }

    .logo-animate {
      animation: wiggle 1s infinite ease-in-out;
    }

    @keyframes wiggle {
      0%, 100% {
        transform: rotate(0deg) scale(1);
      }
      25% {
        transform: rotate(3deg) scale(1.05);
      }
      50% {
        transform: rotate(-3deg) scale(1.05);
      }
      75% {
        transform: rotate(1deg) scale(1.03);
      }
    }
    .text-glow {
      color: #0ff !important;
      text-shadow:
        0 0 5px #0ff,
        0 0 10px #0ff,
        0 0 20px #0ff,
        0 0 40px #0ff;
      font-weight: bold;
      animation: glowBlink 0.5s infinite alternate;
    }

    @keyframes glow-pulse {
      from {
        text-shadow: 0 0 5px #00f6ff, 0 0 10px #00f6ff;
    }
    to {
        text-shadow: 0 0 10px #00f6ff, 0 0 20px #00f6ff, 0 0 30px #00f6ff;
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark animate__animated animate__fadeInDown" data-aos="fade-down" data-aos-duration="1000">
  <div class="container">
    <a class="navbar-brand animate__animated animate__pulse animate__delay-1s d-flex align-items-center" href="http://kp-bps-informaticsengineeringutm.unaux.com" data-aos="zoom-in-right">
      <img src="../assets/img/logo_web.png" alt="Logo" width="100" height="100" class="me-2 rounded-circle logo-animate">
      <span class="fw-bold text-glow">Portofolio KP</span>
    </a>

    <button class="navbar-toggler animate__animated animate__fadeInRight" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse animate__animated animate__fadeIn" id="navbarNav" data-aos="zoom-in-left" data-aos-delay="300">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item" data-aos="fade-up" data-aos-delay="100"><a class="nav-link" href="../index.php">Beranda</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="200"><a class="nav-link" href="../pages/profil.php">Profil</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link" href="../pages/timeline.php">Timeline</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link" href="../pages/tools.php">Tools</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link" href="../pages/output.php">Output</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="600"><a class="nav-link" href="../pages/logbook.php">Logbook</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="700"><a class="nav-link" href="../pages/contact.php">Kontak</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="800"><a class="nav-link" href="../pages/menu_kp.php">Menu KP</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="900"><a class="nav-link" href="../pages/profil_instansi.php">Profil Instansi</a></li>
        <li class="nav-item" data-aos="fade-up" data-aos-delay="1000"><a class="nav-link" href="../pages/dokumentasi.php">Dokumentasi</a></li>
      </ul>
    </div>
  </div>
</nav>
