<?php include('../includes/header.php'); ?>

<section class="container py-5">
  <h2 class="text-center mb-5 animate__animated animate__jackInTheBox animate__infinite" style="color: #005BAC; text-shadow: 0 0 5px #00BFFF, 0 0 10px #00BFFF, 0 0 20px #00BFFF;">
    Logbook Kerja Praktik
  </h2>
  <!-- Logbook per Anggota -->
  <?php
  $anggota = [
    [
      "nama" => "Narendra Wardianto",
      "logbook" => [
        ["30 Juni - 4 Juli 2025", "Merancang dan merencanakan desain website sensus ekonomi dan desain alur database."],
        ["7 Juli - 11 Juli 2025", "Implementasi dan pengembangan website berbasis PHP dan js."],
        ["14 Juli - 18 Juli 2025", "Integrasi website dengan database dan membangun halaman admin."],
        ["21 Juli - 25 Juli 2025", "Penyelesaian akhir website dengan testing dan hosting website."]
      ]
    ],
    [
      "nama" => "Nico Dwi Putra",
      "logbook" => [
        ["30 Juni - 4 Juli 2025", "Merancang dan merencanakan desain chatbot website sensus ekonomi dan desain alur database."],
        ["7 Juli - 11 Juli 2025", "Pembuatan awal dan pengembangan chatbot website sensus ekonomi."],
        ["14 Juli - 18 Juli 2025", "Integrasi chatbot dokumen dengan database dan optimisasi AI."],
        ["21 Juli - 25 Juli 2025", "Mengkombinasikan website dengan chatbot nya agar bisa digunakan pada website."]
      ]
    ],
    [
      "nama" => "Surya Eka Santoso",
      "logbook" => [
        ["30 Juni - 4 Juli 2025", "Merancang dan merencanakan desain website desa dan desain alur database."],
        ["7 Juli - 11 Juli 2025", "Implementasi dan pengembangan website berbasis PHP dan js."],
        ["14 Juli - 18 Juli 2025", "Integrasi website dengan database dan membangun halaman admin."],
        ["21 Juli - 25 Juli 2025", "Penyelesaian akhir website dengan testing dan hosting website"]
      ]
    ],
    [
      "nama" => "Tofan Adi Nugroho",
      "logbook" => [
        ["30 Juni - 4 Juli 2025", "Merancang dan merencanakan desain chatbot website desa dan desain alur database."],
        ["7 Juli - 11 Juli 2025", "Pembuatan awal dan pengembangan chatbot website desa."],
        ["14 Juli - 18 Juli 2025", "Integrasi chatbot dokumen dengan database dan optimisasi AI."],
        ["21 Juli - 25 Juli 2025", "Mengkombinasikan website dengan chatbot nya agar bisa digunakan pada website."]
      ]
    ]
  ];

  $delay = 0;
  foreach ($anggota as $index => $a) :
  ?>
    <div class="mb-5 animate__animated animate__fadeInUpBig animate__slower" data-aos="flip-left" data-aos-delay="<?= $delay ?>">
      <h4 class="mb-3 animate__animated animate__pulse animate__infinite"><?= $a["nama"] ?></h4>
      <div class="table-responsive animate__animated animate__zoomIn animate__faster" data-aos="zoom-in-up" data-aos-delay="<?= $delay + 100 ?>">
        <table class="table table-striped table-bordered animate__animated animate__bounceIn">
          <thead class="table-dark">
            <tr>
              <th class="animate__animated animate__fadeInDownBig animate__slower">No</th>
              <th class="animate__animated animate__fadeInDownBig animate__slower">Tanggal</th>
              <th class="animate__animated animate__fadeInDownBig animate__slower">Kegiatan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($a["logbook"] as $i => $log) : ?>
              <tr class="animate__animated animate__fadeInLeftBig" data-aos="fade-up" data-aos-delay="<?= ($i + 1) * 100 ?>">
                <td><?= $i + 1 ?></td>
                <td><?= $log[0] ?></td>
                <td><?= $log[1] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php
    $delay += 200;
  endforeach;
  ?>
</section>

<?php include('../includes/footer.php'); ?>
