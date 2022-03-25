<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100484/c2020/kamaela_svgatf.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di areaku, <span class="text-danger">25%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> semua lawan dalam line yang sama / Saat lawan tiba di areaku, <span class="text-danger">85%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['53'] ?>">multiplier tetap</a> x4.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">25%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line yang sama / Saat turnku berakhir, <span class="text-danger">90%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['67'] ?>">jebakan pegas</a> di area yang diinginkan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>