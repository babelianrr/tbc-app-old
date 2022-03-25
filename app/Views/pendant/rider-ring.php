<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102656/p2019/rider-ring_h7tt4e.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">60%</span> berubah wujud menjadi Rider Nixie dan bergerak 2 kali hasil dadu. Saat melempar dadu dan me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan yang berada di antara 5 blok di belakang areaku, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke areaku yang paling mahal dalam jangkauan tersebut (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 5 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>