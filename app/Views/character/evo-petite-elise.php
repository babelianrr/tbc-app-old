<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102333/c2022/evo-petite-elise_ner4l4.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, <span class="text-danger">80%</span> pilih salah satu area dalam jangkauan 8 blok di depan untuk melakukan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['150'] ?>">electromagnetic move</a> / Dalam turnku saat tiba di areaku, <span class="text-danger">80%</span> hapus <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['170'] ?>">instalasi</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['151'] ?>">pet</a> pada line tersebut serta ubah wujud lawan yang berada di dalam line yang sama menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['139'] ?>">boneka tentara</a>.<br>
            &#10113; Dalam turnku saat tiba di landmarkku, <span class="text-danger">50%</span> mendapat kartu kesempatan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['34'] ?>">isi ulang</a> / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a>, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['84'] ?>">prioritas konstruksi</a>&#62; (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">30%</span> aktifkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['152'] ?>">electromagnetic explosion</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +40%). Saat tiba di area lawan dalam keadaan electromagnetic explosion sedang aktif, <span class="text-danger">80%</span> mendapat efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['153'] ?>">imunitas</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>