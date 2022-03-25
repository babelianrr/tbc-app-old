<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Pendant</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail rounded-start" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648104251/p2021/grand-sky-paint-shoes_hoja1q.png" alt="<?= $pdt['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $pdt['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat tiba di landmark lawan, setelah membayar atau bebas biaya sewa <span class="text-danger">80%</span> bayar marble tambahan sebanyak biaya sewa dasar area tersebut untuk menge<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a> landmark selama 2 turn (setelah 2 turn, bertumbuh +15%) / Dalam turnku saat tiba di landmarkku, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['54'] ?>">grand sky fall</a>.
          </p>
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/pendant/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>