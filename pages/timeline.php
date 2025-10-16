<?php include('../includes/header.php'); ?>

<section class="container py-5">
  <h2 class="text-center mb-5 animate__animated animate__jackInTheBox animate__infinite" style="color: #005BAC; text-shadow: 0 0 5px #00BFFF, 0 0 10px #00BFFF, 0 0 20px #00BFFF;">
    Timeline Kegiatan KP
  </h2>

  <div class="timeline">
    <!-- Minggu 1 -->
    <div class="timeline-item" data-aos="fade-up" data-aos-duration="1000">
      <div class="timeline-dot animate__animated animate__heartBeat animate__delay-1s"></div>
      <div class="timeline-content animate__animated animate__fadeInUp">
        <h5 class="animate__animated animate__zoomIn animate__delay-1s">Minggu 1</h5>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__bounceInLeft animate__delay-1s">
          <div class="d-flex align-items-center">
            <i class="bi bi-building me-2 text-primary fs-5 animate__animated animate__fadeInDown animate__delay-1s"></i>
            <span class="animate__animated animate__lightSpeedInLeft">Pengenalan instansi dan pembagian tim kerja.</span>
          </div>
        </div>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__bounceInRight animate__delay-1s">
          <div class="d-flex align-items-center">
            <i class="bi bi-pencil-square me-2 text-success fs-5 animate__animated animate__fadeInDown animate__delay-1s"></i>
            <span class="animate__animated animate__lightSpeedInRight">Riset kebutuhan dan sketsa awal tampilan website.</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Minggu 2 -->
    <div class="timeline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
      <div class="timeline-dot animate__animated animate__heartBeat animate__delay-2s"></div>
      <div class="timeline-content animate__animated animate__fadeInUp">
        <h5 class="animate__animated animate__zoomIn animate__delay-2s">Minggu 2</h5>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__bounceInLeft animate__delay-2s">
          <div class="d-flex align-items-center">
            <i class="bi bi-file-earmark-code me-2 text-danger fs-5 animate__animated animate__fadeInDown animate__delay-2s"></i>
            <span class="animate__animated animate__rotateInDownLeft">Pengembangan struktur PHP dan layout halaman.</span>
          </div>
        </div>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__bounceInRight animate__delay-2s">
          <div class="d-flex align-items-center">
            <i class="bi bi-stars me-2 text-warning fs-5 animate__animated animate__fadeInDown animate__delay-2s"></i>
            <span class="animate__animated animate__rotateInDownRight">Integrasi Bootstrap dan animasi interaktif.</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Minggu 3 -->
    <div class="timeline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
      <div class="timeline-dot animate__animated animate__heartBeat animate__delay-3s"></div>
      <div class="timeline-content animate__animated animate__fadeInUp">
        <h5 class="animate__animated animate__zoomIn animate__delay-3s">Minggu 3</h5>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__flipInX animate__delay-3s">
          <div class="d-flex align-items-center">
            <i class="bi bi-laptop me-2 text-info fs-5 animate__animated animate__zoomInDown animate__delay-3s"></i>
            <span class="animate__animated animate__backInLeft">Penyempurnaan frontend dan validasi tampilan responsif.</span>
          </div>
        </div>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__flipInY animate__delay-3s">
          <div class="d-flex align-items-center">
            <i class="bi bi-code-slash me-2 text-secondary fs-5 animate__animated animate__zoomInUp animate__delay-3s"></i>
            <span class="animate__animated animate__backInRight">Pembuatan komponen dinamis menggunakan PHP.</span>
          </div>
        </div>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__flipInX animate__delay-3s">
          <div class="d-flex align-items-center">
            <i class="bi bi-database-check me-2 text-primary fs-5 animate__animated animate__zoomIn animate__delay-3s"></i>
            <span class="animate__animated animate__lightSpeedInLeft">Integrasi dengan database.</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Minggu 4 -->
    <div class="timeline-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
      <div class="timeline-dot animate__animated animate__heartBeat animate__delay-4s"></div>
      <div class="timeline-content animate__animated animate__fadeInUp">
        <h5 class="animate__animated animate__zoomIn animate__delay-4s">Minggu 4</h5>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__fadeInLeftBig animate__delay-4s">
          <div class="d-flex align-items-center">
            <i class="bi bi-patch-check-fill me-2 text-success fs-5 animate__animated animate__zoomInDown animate__delay-4s"></i>
            <span class="animate__animated animate__rollIn">Finalisasi dan uji coba website.</span>
          </div>
        </div>
        <div class="card p-3 mb-2 shadow-sm animate__animated animate__fadeInRightBig animate__delay-4s">
          <div class="d-flex align-items-center">
            <i class="bi bi-journal-richtext me-2 text-dark fs-5 animate__animated animate__zoomInUp animate__delay-4s"></i>
            <span class="animate__animated animate__rollIn">Dokumentasi pengembangan dan presentasi akhir proyek.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('../includes/footer.php'); ?>
