<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101353/c2021/ragon_ffx2oa.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">25%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">45%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['141'] ?>">dragon soul</a>.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">20%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['13'] ?>">chance dadu 1x</a> / Saat melempar dadu, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['142'] ?>">isi energi</a>. Saat turnku berakhir dalam keadaan energi terisi penuh, pergi ke area yang diinginkan.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101355/c2021/ragon-awk_zv6m2v.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark. (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">65%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['141'] ?>">dragon soul</a>.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">35%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['13'] ?>">chance dadu 1x</a> / Saat melempar dadu, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['142'] ?>">isi energi</a>. Saat turnku berakhir dalam keadaan energi terisi penuh, pilih dan pergi ke area yang diinginkan.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101357/c2021/ragon-evo_besqn6.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> landmark. (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%) / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">80%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['141'] ?>">dragon soul</a>.<br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['13'] ?>">chance dadu 1x</a> / Saat melempar dadu, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['142'] ?>">isi energi</a>. Saat turnku berakhir dalam keadaan energi terisi penuh, pergi ke area yang diinginkan.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">40%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['166'] ?>">dragon nest</a> di semua landmarkku.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Uniform Costume</h5>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">40%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['166'] ?>">dragon nest</a> di semua landmarkku. / Saat tiba di area lawan, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['60'] ?>">transfer multiplier</a> lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['37'] ?>">kunci multiplier</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>