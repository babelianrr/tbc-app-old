<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101360/c2021/scarlet_dwyoje.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">50%</span> bayar 10 kali biaya konstruksi landmark untuk langsung membangun landmark / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">40%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['138'] ?>">tentara kartu</a>. <br>
            &#10113; Saat permainan dimulai, marble awal meningkat <span class="text-danger">160%</span> & Saat turnku dimulai, mendapat marble sebanyak <span class="text-danger">45%</span> biaya konstruksi semua areaku / Dalam turnku saat tiba di areaku, <span class="text-danger">40%</span> ubah wujud lawan yang berada di dalam line yang sama menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['139'] ?>">boneka tentara</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101363/c2021/scarlet-awk_ujwiye.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">70%</span> bayar 10 kali biaya konstruksi landmark untuk langsung membangun landmark / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">70%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['138'] ?>">tentara kartu</a>. <br>
            &#10113; Saat permainan dimulai, marble awal meningkat <span class="text-danger">160%</span> & Saat turnku dimulai, mendapat marble sebanyak <span class="text-danger">45%</span> biaya konstruksi semua areaku / Dalam turnku saat tiba di areaku, <span class="text-danger">60%</span> ubah wujud lawan yang berada di dalam line yang sama menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['139'] ?>">boneka tentara</a>.
          </p>
          <h5 class="card-title">Dice Disturbance Obsidian</h5>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di areaku, <span class="text-danger">50%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['171'] ?>">percepatan gauge dadu</a> selama 1 turn kepada semua lawan dalam line yang sama.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>