<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101374/c2021/ava_hqpubq.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>, <span class="text-danger">50%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['146'] ?>">security bot</a> pada blok spesial map yang dipilih / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> <span class="text-danger">20%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['148'] ?>">security planned area</a> di area kosong dalam jangkauan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['147'] ?>">security range</a>.<br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">25%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +5%) / Saat turnku dimulai, <span class="text-danger">30%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101379/c2021/ava-awk_coltcx.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>, <span class="text-danger">70%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['146'] ?>">security bot</a> pada blok spesial map yang dipilih / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> <span class="text-danger">30%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['148'] ?>">security planned area</a> di area kosong dalam jangkauan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['147'] ?>">security range</a>.<br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +5%) / Saat turnku dimulai, <span class="text-danger">45%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101381/c2021/ava-evo_gmnyzm.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['11'] ?>">blok spesial map</a>, <span class="text-danger">90%</span> pasang <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['146'] ?>">security bot</a> pada blok spesial map yang dipilih. / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> <span class="text-danger">40%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['148'] ?>">security planned area</a> di area kosong dalam jangkauan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['147'] ?>">security range</a>.<br>
            &#10113; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +5%) / Saat turnku dimulai, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam line.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">60%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis / <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%)
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Hot Summer Costume</h5>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">60%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis / <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / Saat tiba di area lawan, <span class="text-danger">80%</span> bebas biaya sewa lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['58'] ?>">pindah ke semua area</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>