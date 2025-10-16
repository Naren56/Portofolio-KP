<?php include('../includes/header.php'); ?>

<section class="container py-5">
  <h2 class="text-center mb-5 animate__animated animate__jackInTheBox animate__infinite" style="color: #005BAC; text-shadow: 0 0 5px #00BFFF, 0 0 10px #00BFFF, 0 0 20px #00BFFF;">
    Dokumentasi Kegiatan
  </h2>

  <div class="row g-4 justify-content-center">
    <?php
    $gambar = [
      "dokumentasi-1.jpg",
      "dokumentasi-2.jpg",
      "dokumentasi-3.jpg",
      "dokumentasi-4.jpg",
      "dokumentasi-5.jpg",
      "dokumentasi-6.jpg",
      "dokumentasi-7.jpg",
      "dokumentasi-8.jpg",
      "dokumentasi-9.jpg",
      "dokumentasi-10.jpg",
      "dokumentasi-11.jpg",
      "dokumentasi-12.jpg"
    ];

    $aos_effects = ["fade-up", "zoom-in", "flip-left", "flip-right", "fade-right", "fade-left"];
    $i = 0;

    foreach ($gambar as $img) {
      $effect = $aos_effects[$i % count($aos_effects)];
    ?>
      <div class="col-md-4 col-sm-6" data-aos="<?= $effect ?>" data-aos-delay="<?= 100 * $i ?>">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden animate__animated animate__pulse animate__slower">
          <div class="ratio ratio-4x3">
            <img src="../assets/img/<?= $img ?>" class="img-fluid object-fit-cover w-100 h-100 animate__animated animate__zoomIn hover-effect" alt="Dokumentasi">
          </div>
        </div>
      </div>
    <?php $i++; } ?>
  </div>
</section>

<?php include('../includes/footer.php'); ?>
