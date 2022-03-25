<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row mb-3">
    <h1 class="mb-3">Detail Karakter</h1>
  </div>
  <div class="card mb-3" style="max-width: 1080px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://res.cloudinary.com/dxlpys5st/image/upload/v1648102366/c2022/evo-muse_f3axwk.png" alt="<?= $card['slug'] ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">Evolution <?= $card['nama'] ?></h4>
          <p class="card-text">
            &#10112; <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['0'] ?>">Ketepatan kontrol dadu</a> meningkat <span class="text-danger">55%</span> (setelah 2 turn, bertumbuh +10%) / <span class="text-danger">95%</span> bertahan dari <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['65'] ?>">serangan pindah paksa</a> dan <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['70'] ?>">pencegah pergerakan</a> oleh lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali) & Saat muncul <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['56'] ?>">peringatan monopoli</a> oleh lawan, <span class="text-danger">95%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['38'] ?>">kurung penjara</a> lawan (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['33'] ?>">batas</a> 2 kali).
            <br>
            &#10113; Saat melempar dadu, <span class="text-danger">55%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['73'] ?>">teleport</a> ke salah satu area dalam jangkauan hasil dadu (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +10%) / Dalam turnku saat tiba di area lawan, <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['105'] ?>">blackout paksa</a> area yang didatangi & saat mendatangi lawan, <span class="text-danger">77%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['32'] ?>">hancurkan dadu</a> lawan lalu <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['79'] ?>">terbangkan</a> lawan ke landmark termahalku.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Basic Costume</h5>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">75%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu.
          </p>
          <h5 class="card-title">[Evolution <?= $card['nama'] ?>] Dark Costume</h5>
          <p class="card-text">
            &#10112; Setiap chance daduku, <span class="text-danger">80%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['168'] ?>">pilih arah gerak</a> untuk melempar dadu / Saat <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['48'] ?>">membangun</a> 3 bangunan, <span class="text-danger">50%</span> <a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['57'] ?>">pindah ke posisi semula</a> (<a class="text-info" data-bs-toggle="tooltip" title="<?= $detail['35'] ?>">pertumbuhan inaktif</a> +30%).
          </p>
        </div>
      </div>
      <div class="card-footer"><a class="btn btn-secondary" href="/character/2022">Kembali</a></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>