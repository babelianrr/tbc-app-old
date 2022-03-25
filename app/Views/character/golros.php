<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100541/c2020/golros_vqufgk.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <h5 class="card-title">Skill</h5>
          <p class="card-text">
            &#10112; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['49'] ?>">membangun</a>, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['6'] ?>">upgrade</a> ke landmark lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +15%) / Saat tiba di landmarkku, <span class="text-danger">80% </span><a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['36'] ?>">kendalikan</a> salah satu lawan secara acak.
            <br>
            &#10113; Saat turn pertamaku dimulai, pilih salah satu dari pilihan item untuk menggunakan item tersebut hingga permainan berakhir. Terdapat tiga pilihan item yang berbeda.
            <br>
            - [Golros' Detention] Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku.
            <br>
            - [Golros' Energy Discharge] Saat lawan tiba di landmarkku, <span class="text-danger">80%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['23'] ?>">discharge</a> kepada lawan / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku.
            <br>
            - [Golros' Angry Construction] Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62; / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku.
          </p>
          <h5 class="card-title">Fixed Multiplier Obsidian</h5>
          <p class="card-text">
            &#10112; Saat lawan tiba di areaku, <span class="text-danger">50%</span> terapkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['53'] ?>">multiplier tetap</a> x4.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>