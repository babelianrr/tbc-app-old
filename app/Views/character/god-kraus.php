<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098827/c2019/god-kraus_ycr6ot.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <h5 class="card-title">Skill</h5>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, tagih <span class="text-danger">150%</span> tambahan biaya sewa / Saat melempar dadu dan melewati area lawan, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan hapus efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a>.
            <br>
            &#10113; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['44'] ?>">langsung membangun</a> landmarkku, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['72'] ?>">tarik</a> lawan dalam jarak 4 blok sekitar lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>