<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101372/c2021/white-moohyul_uywa6c.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku dimulai, mendapat marble sebanyak <span class="text-danger">45%</span> biaya konstruksi semua areaku / Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['51'] ?>">mendapat landmark</a>, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['69'] ?>">tambah landmark</a> &#60;<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['85'] ?>">prioritas konstruksi</a>&#62;.
            <br>
            &#10113; Saat tiba di landmarkku, <span class="text-danger">70%</span> bayar 70% biaya sewa dasar area tersebut untuk <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['90'] ?>">panggil</a> salah satu lawan / Saat tiba di areaku, <span class="text-danger">50%</span> terapkan biaya sewa x2 lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu areaku.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>