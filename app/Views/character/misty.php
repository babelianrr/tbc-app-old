<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098846/c2019/misty_tu2dyx.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku berakhir, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['102'] ?>">pesan perpindahan</a> ke salah satu area dalam line yang berbeda dari aku berdiri / Saat melempar dadu dan melewati area lawan, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan hapus efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a>.
            <br>
            &#10113; Saat tiba di area lawan, <span class="text-danger">100%</span> mendapat marble sebanyak 3 kali gaji / <span class="text-danger">35%</span> bebas biaya sewa lalu berpindah ke salah satu area kosong terdekat dalam line yang sama.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648098856/c2019/misty-awk_xmgklr.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat turnku berakhir, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['102'] ?>">pesan perpindahan</a> ke salah satu area dalam line yang berbeda dari aku berdiri / Saat melempar dadu dan melewati area lawan, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan hapus efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a>.
            <br>
            &#10113; Saat tiba di area lawan, <span class="text-danger">100%</span> mendapat marble sebanyak 3 kali gaji / <span class="text-danger">35%</span> bebas biaya sewa lalu berpindah ke salah satu area kosong terdekat dalam line yang sama.
          </p>
          <h5 class="card-title">Karakteristik Khusus</h5>
          <p class="card-text">
            Awaken <?= $card['nama'] ?> memberikan bonus gold sebanyak <span class="text-danger">50%</span> dibandingkan dengan <?= $card['nama'] ?> yang memberikan bonus gold sebanyak 20%.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2019">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>