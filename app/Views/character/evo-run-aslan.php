<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101325/c2021/evo-run-aslan_fs5vje.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turn pertamaku dimulai, aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['156'] ?>">kuasa archangel</a> / <span class="text-danger">95%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
            <br>
            &#10113; Saat tiba di areaku, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['77'] ?>">teleport lalu panggil</a> ke salah satu area maksimal 6 blok di depan / <span class="text-danger">50%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['27'] ?>">efek berbahaya</a> yang diterapkan padaku.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat mengambil pinjaman, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['59'] ?>">pindah paksa lawan ke pulau terpencil</a> lalu aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['177'] ?>">beast rage</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Lion King Costume</h5>
          <p class="card-text">
            &#10112; Saat mengambil pinjaman, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['59'] ?>">pindah paksa lawan ke pulau terpencil</a> lalu aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['177'] ?>">beast rage</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali) / Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan lalu aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['177'] ?>">beast rage</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>