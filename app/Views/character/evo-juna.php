<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101304/c2021/evo-juna_a42tg1.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">70%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['159'] ?>">efek blok taman kupu-kupu</a>. Saat turnku berakhir, munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['160'] ?>">kupu-kupu</a> / Saat turnku dimulai, mendapat marble sebanyak <span class="text-danger">45%</span> biaya konstruksi semua areaku.
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">90%</span> pergi ke START (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['46'] ?>">membangun</a> landmarkku, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a> atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; <span class="text-danger">90%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Hanbok Costume</h5>
          <p class="card-text">
            &#10112; <span class="text-danger">90%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a>
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Butterfly Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">60%</span> tembakkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['161'] ?>">bom sesuka hati</a> / Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['9'] ?>">blok sudut</a>, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a>
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>