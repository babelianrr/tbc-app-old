<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648103750/p2020/mawang-shoulder_e59ofg.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <h5 class="card-title">Skill</h5>
          <p class="card-text">
            &#10112; Saat permainan dimulai, berubah wujud menjadi Devil King Astaroth dan marble awal meningkat <span class="text-danger">100%</span> / Saat turnku dimulai, <span class="text-danger">60%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 1 lapis).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>