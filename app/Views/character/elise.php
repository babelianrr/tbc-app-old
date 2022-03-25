<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101385/c2021/elise_fab0wj.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">50%</span> pilih salah satu area dalam jangkauan 8 blok di depan untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['150'] ?>">electromagnetic move</a> / Dalam turnku saat tiba di areaku, <span class="text-danger">45%</span> hapus <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['170'] ?>">instalasi</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['151'] ?>">pet</a> pada line tersebut serta ubah wujud lawan yang berada di dalam line yang sama menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['139'] ?>">boneka tentara</a>.
            <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">20%</span> mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a> / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['84'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101394/c2021/elise-awk_fmql1g.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">60%</span> pilih salah satu area dalam jangkauan 8 blok di depan untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['150'] ?>">electromagnetic move</a> / Dalam turnku saat tiba di areaku, <span class="text-danger">55%</span> hapus <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['170'] ?>">instalasi</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['151'] ?>">pet</a> pada line tersebut serta ubah wujud lawan yang berada di dalam line yang sama menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['139'] ?>">boneka tentara</a>.
            <br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">30%</span> mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a> / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['84'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101388/c2021/elise-evo_qinw5m.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">90%</span> pilih salah satu area dalam jangkauan 8 blok di depan untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['150'] ?>">electromagnetic move</a> / Dalam turnku saat tiba di areaku, <span class="text-danger">85%</span> hapus <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['170'] ?>">instalasi</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['151'] ?>">pet</a> pada line tersebut serta ubah wujud lawan yang berada di dalam line yang sama menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['139'] ?>">boneka tentara</a>.<br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">50%</span> mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a> / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['84'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">30%</span> aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['152'] ?>">electromagnetic explosion</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +40%). Saat tiba di area lawan dalam keadaan electromagnetic explosion sedang aktif, <span class="text-danger">80%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['153'] ?>">imunitas</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Exclusive Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">30%</span> aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['152'] ?>">electromagnetic explosion</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +40%)& Saat tiba di area lawan dalam keadaan electromagnetic explosion sedang aktif, <span class="text-danger">80%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['153'] ?>">imunitas</a>. / <span class="text-danger">90%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 1 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>