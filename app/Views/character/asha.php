<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100525/c2020/asha_igqujp.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat mendatangi lawan, <span class="text-danger">65%</span> pilih salah satu landmark milikku untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['80'] ?>">terbang bersama-sama</a> / Saat tiba di areaku, <span class="text-danger">45%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
            <br>
            &#10113; Saat tiba di semua area yang dibangun, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['119'] ?>">lempar chakram</a> lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['74'] ?>">teleport</a> ke posisi lawan tersebut. Saat itu, apabila tiba di area lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['105'] ?>">blackout paksa</a> area yang didatangi.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100530/c2020/asha-awk_gvjjzk.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat mendatangi lawan, <span class="text-danger">90%</span> pilih salah satu landmark milikku untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['80'] ?>">terbang bersama-sama</a> / Saat tiba di areaku, <span class="text-danger">75%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
            <br>
            &#10113; Saat tiba di semua area yang dibangun, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['119'] ?>">lempar chakram</a> lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['74'] ?>">teleport</a> ke posisi lawan tersebut. Saat itu, apabila tiba di area lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['105'] ?>">blackout paksa</a> area yang didatangi.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100527/c2020/asha-evo_kiyaxu.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat mendatangi lawan, <span class="text-danger">90%</span> pilih salah satu landmark milikku untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['80'] ?>">terbang bersama-sama</a> / Saat tiba di areaku, <span class="text-danger">80%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis). <br>
            &#10113; Saat tiba di semua area yang dibangun, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['119'] ?>">lempar chakram</a> lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['74'] ?>">teleport</a> ke posisi lawan tersebut. Saat itu, apabila tiba di area lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['105'] ?>">blackout paksa</a> area yang didatangi.
          </p>
          <h5 class="card-title">Evolution Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan tiba di landmarkku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['30'] ?>">kurung gelembung</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>