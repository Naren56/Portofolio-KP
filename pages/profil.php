<?php include '../includes/header.php'; ?>

<section class="py-5 bg-light" id="profil">
  <div class="container">
    <h2 class="text-center mb-5 animate__animated animate__jackInTheBox animate__infinite" style="color: #005BAC; text-shadow: 0 0 5px #00BFFF, 0 0 10px #00BFFF, 0 0 20px #00BFFF;">
      Profil Kelompok
    </h2>
    
    <!-- Anggota -->
    <div class="row justify-content-center g-4">
      <?php
        $anggota = [
          ["Narendra Wardianto", "220411100078", "Frontend dan Backend Developer<br>Website Sensus Ekonomi 2026", "foto-naren.jpg", 100],
          ["Nico Dwi Putra", "220411100101", "Chatbot AI<br>Website Sensus Ekonomi 2026", "foto-nico.png", 200],
          ["Surya Eka Santoso", "220411100149", "Frontend dan Backend Developer<br>Website Desa", "foto-surya.png", 300],
          ["Tofan Adi Nugroho", "220411100131", "Chatbot AI<br>Website Desa", "foto-tio.png", 400],
        ];

        foreach ($anggota as $a) {
          echo '
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="'.$a[4].'" data-aos-duration="1200" data-aos-easing="ease-in-out-back">
            <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 position-relative animate__animated animate__pulse animate__slow animate__infinite"
                 style="transition: transform 0.4s ease;">
              <img src="../assets/img/'.$a[3].'" 
                class="rounded-circle mx-auto mb-3 shadow"
                style="width: 220px; height: 220px; object-fit: cover; border: 3px solid #ffffff;"
                alt="'.$a[0].'">
              <div class="card-body">
                <h5 class="card-title fw-bold">'.$a[0].'</h5>
                <p class="card-text text-muted mb-1">'.$a[1].'</p>
                <p class="card-text small">'.$a[2].'</p>
              </div>
              <div class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-gradient text-white"
                   style="background: linear-gradient(to right, #ff416c, #ff4b2b);">
                Anggota
              </div>
            </div>
          </div>';
        }
      ?>
    </div>

    <!-- Pembimbing dan Pendamping -->
    <div class="row justify-content-center mt-5 g-4">
      <!-- Dosen Pembimbing -->
      <div class="col-md-6 col-lg-5" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1200">
        <div class="card border-0 rounded-4 shadow-lg text-center p-4 h-100 bg-dark text-white animate__animated animate__fadeInLeft animate__delay-1s">
          <img src="../assets/img/foto-dospem1.jpg" class="rounded-circle border border-4 border-white mx-auto mb-3 shadow" width="220" height="220" alt="Dosen Pembimbing">
          <div class="card-body">
            <h5 class="card-title fw-bold">	Dr. Cucun Very Angkoso, S.T.,M.T.</h5>
            <p class="card-text mb-1">19780225200501</p>
            <span class="badge bg-light text-dark mt-2 px-3 py-2 shadow-sm">Dosen Pembimbing KP</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1200">
        <div class="card border-0 rounded-4 shadow-lg text-center p-4 h-100 bg-dark text-white animate__animated animate__fadeInLeft animate__delay-1s">
          <img src="../assets/img/foto-dospem2.jpg" class="rounded-circle border border-4 border-white mx-auto mb-3 shadow" width="220" height="220" alt="Dosen Pembimbing">
          <div class="card-body">
            <h5 class="card-title fw-bold">Dr. Rika Yunitarini, S.T.M.T.</h5>
            <p class="card-text mb-1">19830607200604</p>
            <span class="badge bg-light text-dark mt-2 px-3 py-2 shadow-sm">Dosen Pembimbing KP</span>
          </div>
        </div>
      </div>

      <!-- Pendamping KP -->
      <div class="col-md-6 col-lg-5" data-aos="fade-left" data-aos-delay="600" data-aos-duration="1200">
        <div class="card border-0 rounded-4 shadow-lg text-center p-4 h-100 text-white animate__animated animate__fadeInRight animate__delay-1s"
             style="background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);">
          <img src="../assets/img/pendamping-kp.png" class="rounded-circle border border-4 border-white mx-auto mb-3 shadow" width="220" height="220" alt="Pendamping KP">
          <div class="card-body">
            <h5 class="card-title fw-bold">Alfin Niam Habibi, A. Md. Stat</h5>
            <p class="card-text mb-1">199811112022031006</p>
            <p class="card-text mb-1">Statistisi Terampil</p>
            <span class="badge bg-light text-dark mt-2 px-3 py-2 shadow-sm">Pendamping KP</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>
