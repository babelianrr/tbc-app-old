<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648100533/c2020/bari-new_ck8rtm.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Dalam turnku saat mendatangi lawan, <span class="text-danger">70%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['63'] ?>">saling terbangkan</a> lalu apabila lawan mendarat di areaku yang ter<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['37'] ?>">kunci multiplier</a>, <span class="text-danger">80%</span> abaikan skill bebas biaya sewa.
            <br>
            &#10113; Saat tiba di semua area yang dibangun, <span class="text-danger">65%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['74'] ?>">teleport</a> ke posisi lawan / Saat tiba di area lawan, <span class="text-danger">90%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['60'] ?>">transfer multiplier</a> lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['37'] ?>">kunci multiplier</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2020">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>