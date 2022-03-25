<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="/img/c2019/<?= $card['slug'] ?>.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">55%</span> (<a class="text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $detail['55'] ?>">pertumbuhan ganjil genap</a> +10%) / Saat tiba di areaku, <span class="text-danger">45%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku / Saat tiba di landmarkku, <span class="text-danger">75%</span> bayar 70% biaya sewa dasar area tersebut untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan.
          </p>
          <h5 class="card-title">Marble Refund Obsidian</h5>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">5%</span>/<span class="text-danger">7%</span>/<span class="text-danger">10%</span>/<span class="text-danger">15%</span>/<span class="text-danger">20%</span>/<span class="text-danger">50%</span> mendapat marble sebanyak 45% biaya konstruksi semua areaku.
        </div>
      </div>
    </div>
    <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
  </div>
</div>
<?= $this->endSection() ?>