<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103736/p2020/switch-punch-gun_kqknqy.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu lalu apabila me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu lalu apabila me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku.
          </p>
          <h4 class="card-title">[Dark] Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">78%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu lalu apabila me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>