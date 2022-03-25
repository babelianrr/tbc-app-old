<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101320/c2021/evo-mix-saho_kzrml5.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di landmark miliknya atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> area miliknya, <span class="text-danger">50%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> di semua landmark &#47; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> milikku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['78'] ?>">terbangkan</a> lawan. <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">85%</span> bayar 5 kali biaya konstruksi landmark untuk langsung membangun landmark / Saat tiba di areaku, mendapat marble sebanyak <span class="text-danger">150%</span> biaya konstruksi.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di landmarkku, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Vampire Costume</h5>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di landmarkku, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a> / Saat lawan tiba di areaku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['32'] ?>">hancurkan dadu</a> lawan selama 2 turn.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Astaroth Costume</h5>
          <p class="card-text">
            &#10112; Dalam turnku saat tiba di landmarkku, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a> / Saat lawan tiba di areaku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['32'] ?>">hancurkan dadu</a> lawan selama 2 turn.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>