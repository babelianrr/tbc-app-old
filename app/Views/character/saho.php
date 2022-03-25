<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101358/c2021/saho_ia0afs.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title"><?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di landmark miliknya atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> area miliknya, <span class="text-danger">25%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> di semua landmark / Saat tiba di goblin fire milikku, <span class="text-danger">40%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['68'] ?>">super overcharge</a> kepada semua lawan dalam line.
            <br>
            &#10113; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> milikku, <span class="text-danger">40%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['78'] ?>">terbangkan</a> lawan & apabila goblin fire yang didatangi berada di area lawan, bebas biaya sewa.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101371/c2021/saho-awk_lavzxf.png" alt="<?= $card['slug'] ?>-awk">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Awaken <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di landmark miliknya atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> area miliknya, <span class="text-danger">40%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> di semua landmark / Saat tiba di goblin fire milikku, <span class="text-danger">60%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['68'] ?>">super overcharge</a> kepada semua lawan dalam line. <br>
            &#10113; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> milikku, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['78'] ?>">terbangkan</a> lawan & apabila goblin fire yang didatangi berada di area lawan, bebas biaya sewa.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101426/c2021/saho-evo_nx0v03.png" alt="<?= $card['slug'] ?>-evo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Saat lawan tiba di landmark miliknya atau <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['50'] ?>">membangun</a> area miliknya, <span class="text-danger">50%</span> munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> di semua landmark / Saat tiba di goblin fire milikku, <span class="text-danger">70%</span> terapkan efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['68'] ?>">super overcharge</a> kepada semua lawan dalam line. <br>
            &#10113; Saat tiba di <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['145'] ?>">goblin fire</a> milikku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['78'] ?>">terbangkan</a> lawan & apabila goblin fire yang didatangi berada di area lawan, bebas biaya sewa.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Vampire Costume I</h5>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu / Saat lawan tiba di landmarkku, <span class="text-danger">60%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['30'] ?>">kurung gelembung</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Vampire Costume II</h5>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">54%</span> (setelah 2 turn, bertumbuh +10%) / <span class="text-danger">90%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>