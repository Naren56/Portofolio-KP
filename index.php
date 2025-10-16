<?php include('includes/header.php'); ?>

<style>
  /* Header Judul Animasi Glowing */
  .display-4 {
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(90deg, #007bff, #00c6ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: glow 2s ease-in-out infinite alternate;
  }

  @keyframes glow {
    from {
      text-shadow: 0 0 5px #00c6ff, 0 0 10px #00c6ff;
    }
    to {
      text-shadow: 0 0 10px #007bff, 0 0 20px #007bff;
    }
  }

  /* Animasi kalimat per kata */
  .lead span {
    display: inline-block;
    opacity: 0;
    transform: translateY(10px);
    animation: fadeUp 0.6s ease forwards;
  }

  .lead span:nth-child(1) { animation-delay: 0.5s; }
  .lead span:nth-child(2) { animation-delay: 0.8s; }
  .lead span:nth-child(3) { animation-delay: 1.1s; }
  .lead span:nth-child(4) { animation-delay: 1.4s; }
  .lead span:nth-child(5) { animation-delay: 1.7s; }
  .lead span:nth-child(6) { animation-delay: 2s; }

  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* STYLE TIMELINE, TOOLS, OUTPUT */
  .card-title {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    background: linear-gradient(90deg, #00c6ff, #007bff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: glowText 2s infinite alternate;
  }

  @keyframes glowText {
    from {
      text-shadow: 0 0 3px #00c6ff;
    }
    to {
      text-shadow: 0 0 12px #007bff;
    }
  }

  .card:hover {
    transform: scale(1.05);
    transition: transform 0.5s ease;
    box-shadow: 0 0 20px rgba(0, 123, 255, 0.3);
  }

  .card-body {
    transition: background 0.5s;
  }

  .card:hover .card-body {
    background: linear-gradient(145deg, #e3f2fd, #f0faff);
  }

  .btn-outline-primary {
    border-width: 2px;
    font-weight: 500;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: all 0.4s ease-in-out;
  }

  .btn-outline-primary:hover {
    background-color: #007bff;
    color: #fff;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
    transform: translateY(-3px);
  }

  .card-text {
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
    color: #444;
    animation: fadeUp 1s ease forwards;
  }

  .card.animate__zoomIn {
    animation-duration: 1s;
    animation-timing-function: ease-in-out;
  }

</style>

<!-- HERO SECTION -->
<section class="bg-dark text-white text-center py-5">
  <div class="container">
    <h1 class="display-4 animate__animated animate__fadeInDown animate__faster">
      Website Portofolio KP <br>
      Mahasiswa Teknik Informatika - UTM
    </h1>
    <p class="lead mt-3 animate__animated animate__fadeIn animate__delay-1s">
      <span>Website</span>
      <span>ini</span>
      <span>memuat</span>
      <span>kegiatan</span>
      <span>dan</span>
      <span>dokumentasi kerja praktik kami.</span>
    </p>
    <a href="pages/profil.php" class="btn btn-primary mt-4 animate__animated animate__pulse animate__infinite animate__delay-2s">
      Lihat Profil Tim
    </a>
  </div>
</section>

<!-- KONTEN UTAMA -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row text-center">

      <!-- TIMELINE -->
      <div class="col-md-4 mb-4" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
        <div class="card shadow-sm h-100 animate__animated animate__zoomIn">
          <div class="card-body">
            <div class="mb-3">
              <i data-lucide="calendar-days" class="text-primary" style="width: 48px; height: 48px;"></i>
            </div>
            <h5 class="card-title animate__animated animate__fadeInDown animate__delay-1s">Timeline</h5>
            <p class="card-text animate__animated animate__fadeIn animate__delay-2s">Lihat alur kegiatan kerja praktik dari awal hingga akhir.</p>
            <a href="pages/timeline.php" class="btn btn-outline-primary animate__animated animate__fadeInUp animate__delay-3s">Lihat</a>
          </div>
        </div>
      </div>

      <!-- TOOLS -->
      <div class="col-md-4 mb-4" data-aos="flip-up" data-aos-delay="300" data-aos-duration="1000">
        <div class="card shadow-sm h-100 animate__animated animate__zoomIn animate__delay-1s">
          <div class="card-body">
            <div class="mb-3">
              <i data-lucide="hammer" class="text-primary" style="width: 48px; height: 48px;"></i>
            </div>
            <h5 class="card-title animate__animated animate__fadeInDown animate__delay-2s">Tools</h5>
            <p class="card-text animate__animated animate__fadeIn animate__delay-3s">Teknologi & perangkat lunak yang digunakan selama KP.</p>
            <a href="pages/tools.php" class="btn btn-outline-primary animate__animated animate__fadeInUp animate__delay-4s">Lihat</a>
          </div>
        </div>
      </div>

      <!-- OUTPUT -->
      <div class="col-md-4 mb-4" data-aos="flip-right" data-aos-delay="400" data-aos-duration="1000">
        <div class="card shadow-sm h-100 animate__animated animate__zoomIn animate__delay-2s">
          <div class="card-body">
            <div class="mb-3">
              <i data-lucide="file-bar-chart" class="text-primary" style="width: 48px; height: 48px;"></i>
            </div>
            <h5 class="card-title animate__animated animate__fadeInDown animate__delay-3s">Output</h5>
            <p class="card-text animate__animated animate__fadeIn animate__delay-4s">Hasil akhir dari kegiatan kerja praktik kami.</p>
            <a href="pages/output.php" class="btn btn-outline-primary animate__animated animate__fadeInUp animate__delay-5s">Lihat</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Aktifkan lucide icons -->
<script>
  lucide.createIcons();
</script>


<?php include('includes/footer.php'); ?>
