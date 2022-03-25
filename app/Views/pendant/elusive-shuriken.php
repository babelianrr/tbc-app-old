<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103743/p2020/elusive-shuriken_fwti9v.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['113'] ?>">tandai</a> salah satu lawan secara acak / Saat turnku dimulai, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['75'] ?>">teleport</a> ke salah satu area dalam line dimana lawan yang ditandai sedang berdiri.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['113'] ?>">tandai</a> salah satu lawan secara acak / Saat turnku dimulai, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['75'] ?>">teleport</a> ke salah satu area dalam line dimana lawan yang ditandai sedang berdiri (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>