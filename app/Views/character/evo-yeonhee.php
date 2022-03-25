<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101326/c2021/evo-yeonhee_fgrcne.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat melempar dadu ketika gauge meteor terisi penuh, <span class="text-danger">100%</span> tembakkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['131'] ?>">meteor</a> ke salah satu area lawan / Saat melempar dadu dobel, <span class="text-danger">80%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['39'] ?>">bebas sewa dan landmark destinasi</a>.
            <br>
            &#10113; Chance dadu dobel meningkat <span class="text-danger">40%</span> & Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a> / Dalam turnku saat tiba di area lawan, <span class="text-danger">50%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['93'] ?>">kupon bebas biaya sewa</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">55%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['135'] ?>">efek blok es</a> pada salah satu area kosong terdekat (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +5%)
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>