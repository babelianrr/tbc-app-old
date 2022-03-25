<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098854/c2019/nicole_fveq3i.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['110'] ?>">baterai kilat</a> di salah satu areaku / Saat tiba di bateraiku, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> area tersebut menjadi landmark dan segera <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['111'] ?>">dash</a> menuju areaku yang paling dekat berikutnya kemudian <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan yang berada dalam jangkauan pindah ke area tujuan.
            <br>
            &#10113; Saat tiba di areaku, <span class="text-danger">68%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>