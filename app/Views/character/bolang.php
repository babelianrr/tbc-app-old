<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098857/c2019/bolang_g7byvx.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di landmarkku, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a> dan 50% mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a>.
            <br>
            &#10113; Saat tiba di landmark lawan, <span class="text-danger">80%</span> bebas biaya sewa lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> landmark selama 2 turn (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat lawan meng<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan menge<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> landmarkku, <span class="text-danger">70%</span> aktifkan pertahanan.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>