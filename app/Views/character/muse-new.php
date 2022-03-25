<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100500/c2020/muse-new_rry16r.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <h5 class="card-title">Skill</h5>
          <p class="card-text">
            &#10112; Saat tiba di area lawan, <span class="text-danger">85%</span> bebas biaya sewa lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Dalam turnku saat tiba di area lawan, <span class="text-danger">35%</span> mendapat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['93'] ?>">kupon bebas biaya sewa</a>.
            <br>
            &#10113; Saat melempar dadu dobel, <span class="text-danger">60%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['39'] ?>">bebas sewa dan landmark destinasi</a> / Saat dadu dobel tiga kali berturut-turut dalam satu turn, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>