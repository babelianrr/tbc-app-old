<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100546/c2020/yeonhee_qia7if.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu ketika gauge meteor terisi penuh, <span class="text-danger">100%</span> tembakkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['131'] ?>">meteor</a> ke salah satu area lawan / Saat melempar dadu dobel, <span class="text-danger">50%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['39'] ?>">bebas sewa dan landmark destinasi</a>.
            <br>
            &#10113; Chance dadu dobel meningkat <span class="text-danger">20%</span> / Saat melempar dadu dobel, mendapat marble sebanyak <span class="text-danger">100%</span> gaji & Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100521/c2020/yeonhee-awk_b9twng.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu ketika gauge meteor terisi penuh, <span class="text-danger">100%</span> tembakkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['131'] ?>">meteor</a> ke salah satu area lawan / Saat melempar dadu dobel, <span class="text-danger">75%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['39'] ?>">bebas sewa dan landmark destinasi</a>.
            <br>
            &#10113; Chance dadu dobel meningkat <span class="text-danger">35%</span> / Saat melempar dadu dobel, mendapat marble sebanyak <span class="text-danger">100%</span> gaji & Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
          <h5 class="card-title">Toll Fee Exemption Obsidian</h5>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di area lawan, <span class="text-danger">40%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['93'] ?>">kupon bebas biaya sewa</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>