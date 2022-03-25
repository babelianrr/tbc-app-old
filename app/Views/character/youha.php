<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098844/c2019/youha_hvbzq0.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di semua area yang dibangun, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['104'] ?>">isi energi</a> & <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['74'] ?>">teleport</a> ke posisi lawan / Saat mendatangi lawan dalam keadaan energi terisi penuh, hanguskan marble milik lawan lalu apabila tiba di area lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['105'] ?>">blackout paksa</a> area yang didatangi.
            <br>
            &#10113; Saat turnku dimulai, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['106'] ?>">jangkauan perpindahan meningkat</a> tergantung dengan energi yang terisi / <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>