<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102639/p2019/dice-dest-glove_alcgt7.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat mendatangi lawan, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['32'] ?>">hancurkan dadu</a> lawan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['63'] ?>">saling terbangkan</a>.
          </p>
          <h4 class="card-title">Dice Destroyer Vampire Glove</h4>
          <p class="card-text">
            &#10112; Dalam turnku saat mendatangi lawan, <span class="text-danger">78%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['32'] ?>">hancurkan dadu</a> lawan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['63'] ?>">saling terbangkan</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>