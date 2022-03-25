<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103740/p2020/chef-bear_dqwi0i.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, tagih <span class="text-danger">180%</span> tambahan biaya sewa / <span class="text-danger">45%</span> berikan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['112'] ?>">menu rahasia chef</a>.
          </p>
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, tagih <span class="text-danger">200%</span> tambahan biaya sewa (setelah 2 turn, bertumbuh +50%) / <span class="text-danger">75%</span> berikan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['112'] ?>">menu rahasia chef</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>