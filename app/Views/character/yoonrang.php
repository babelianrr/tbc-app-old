<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101455/c2021/yoonrang_kxoitn.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['44'] ?>">langsung membangun</a> landmarkku, <span class="text-danger">50%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['140'] ?>">efek blok kabut asap</a> / Dalam turnku saat tiba di landmarkku, <span class="text-danger">50%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['137'] ?>">bleeding</a> kepada lawan dalam line.
            <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">35%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a> / Saat tiba di landmarkku, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> semua lawan yang berada pada line yang sama.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101457/c2021/yoonrang-awk_htgjsk.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['44'] ?>">langsung membangun</a> landmarkku, <span class="text-danger">80%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['140'] ?>">efek blok kabut asap</a> / Dalam turnku saat tiba di landmarkku, <span class="text-danger">80%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['137'] ?>">bleeding</a> kepada lawan dalam line.
            <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a> / Saat tiba di landmarkku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> semua lawan yang berada pada line yang sama.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101469/c2021/yoonrang-evo_vjxmxu.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmarkku atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['44'] ?>">langsung membangun</a> landmarkku, <span class="text-danger">90%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['140'] ?>">efek blok kabut asap</a> / Dalam turnku saat tiba di landmarkku, <span class="text-danger">85%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['137'] ?>">bleeding</a> kepada lawan dalam line.
            <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a> / Saat tiba di landmarkku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> semua lawan yang berada pada line yang sama.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62;.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Idol Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +5%) / Saat lawan tiba di areaku yang ter<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['37'] ?>">kunci multiplier</a>, <span class="text-danger">65%</span> abaikan skill bebas biaya sewa.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>