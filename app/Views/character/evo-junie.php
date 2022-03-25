<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648101306/c2021/evo-junie_nxci19.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; Setiap chance daduku, munculkan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['157'] ?>">jiwa kupu-kupu</a> di semua areaku. Saat tiba di jiwa kupu-kupu milikku, pilih salah satu lawan untuk ber<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['158'] ?>">tukar posisi</a>, saat itu apabila tiba di area lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['105'] ?>">blackout paksa</a> area tersebut. / Saat lawan tiba di landmarkku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['30'] ?>">kurung gelembung</a> & Saat aku tiba di areaku, <span class="text-danger">55%</span> isi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['64'] ?>">shield</a> (maks. 2 lapis).
            <br>
            &#10113; Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +30%) / Dalam turnku saat tiba di areaku, <span class="text-danger">85%</span> ubah wujud lawan yang berada di dalam line yang sama menjadi <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['139'] ?>">boneka tentara</a>.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; <span class="text-danger">90%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Hanbok Costume</h5>
          <p class="card-text">
            &#10112; <span class="text-danger">90%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat lawan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['76'] ?>">teleport</a> dua kali atau lebih dalam satu turn, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['130'] ?>">usir lawan ke pulau terpencil</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Butterfly Costume</h5>
          <p class="card-text">
            &#10112; <span class="text-danger">90%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) / Saat melempar dadu lalu me<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['52'] ?>">lewat</a>i lawan, <span class="text-danger">85%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['25'] ?>">dorong</a> lawan ke salah satu areaku & apabila melewati area lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['31'] ?>">hancurkan bangunan</a> dan hapus efek <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['10'] ?>">cat</a>.
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2021">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>