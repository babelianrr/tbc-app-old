<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102660/p2019/sky-town-plan_hp1dyt.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu, <span class="text-danger">33%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam jangkauan hasil dadu lalu saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a> areaku, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> semua areaku dalam line (kecuali area turis) menjadi landmark.
          </p>
          <h4 class="card-title">[World Travel] <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam jangkauan hasil dadu lalu saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a> areaku, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> semua areaku dalam line (kecuali area turis) menjadi landmark.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>