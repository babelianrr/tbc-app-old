<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100503/c2020/mnemion_jbrzpa.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">60%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['114'] ?>">intisari masa</a> di salah satu areaku. Saat tiba di time essence milikku, mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['165'] ?>">pemberkatan masa</a> / Saat melempar dadu, <span class="text-danger">33%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam jangkauan hasil dadu.<br>
            &#10113; Dalam turnku saat tiba di areaku, <span class="text-danger">45%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['116'] ?>">penjara masa</a> kepada semua lawan dalam line / <span class="text-danger">60%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['22'] ?>">kartu kesempatan yang ditetapkan</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100496/c2020/mnemion-awk_lqwtsm.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">90%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['114'] ?>">intisari masa</a> di salah satu areaku. Saat tiba di time essence milikku, mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['115'] ?>">pemberkatan masa</a> / Saat melempar dadu, <span class="text-danger">38%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam jangkauan hasil dadu.<br>
            &#10113; Dalam turnku saat tiba di areaku, <span class="text-danger">60%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['116'] ?>">penjara masa</a> kepada semua lawan dalam line / <span class="text-danger">80%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['22'] ?>">kartu kesempatan yang ditetapkan</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100504/c2020/mnemion-evo_xyk9bn.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">90%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['114'] ?>">intisari masa</a> di salah satu areaku. Saat tiba di time essence milikku, mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['115'] ?>">pemberkatan masa</a> / Saat melempar dadu, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam jangkauan hasil dadu.<br>
            &#10113; Dalam turnku saat tiba di areaku, <span class="text-danger">75%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['116'] ?>">penjara masa</a> kepada semua lawan dalam line / <span class="text-danger">95%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['22'] ?>">kartu kesempatan yang ditetapkan</a>.
          </p>
          <h5 class="card-title">Evolution Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a> dua kali atau lebih dalam satu turn, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['130'] ?>">usir lawan ke pulau terpencil</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>