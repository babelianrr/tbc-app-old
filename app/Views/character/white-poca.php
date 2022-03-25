<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098842/c2019/white-poca_vdy03e.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di areaku, terapkan biaya sewa x2 lalu <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line. / Saat tiba di area lawan, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">38%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> menjadi landmark lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['3'] ?>">ambil alih acak</a> salah satu area milik lawan dalam line yang sama dengan area yang dibangun (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>