<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row my-3">
    <h1>Daftar Karakter Awaken</h1>
  </div>
  <div class="row mt-3">
    <div class="col-lg-9">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (8 * ($currentPage - 1)); ?>
          <?php foreach ($card as $c) : ?>
            <tr>
              <th scope="row"><?= $i++ . '.' ?></th>
              <td><?= $c['nama'] ?></td>
              <td><a class="btn btn-primary" href="awaken/<?= $c['slug'] ?>">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('cawk', 'codex_pagination'); ?>
      <a class="btn btn-secondary mb-3" href="/character">Kembali</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>