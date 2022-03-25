<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row my-3">
    <h1>Daftar Pendant Rilisan 2019</h1>
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
          <?php foreach ($pdt as $p) : ?>
            <tr>
              <th scope="row"><?= $i++ . '.' ?></th>
              <td><?= $p['nama'] ?></td>
              <td><a class="btn btn-primary" href="2019/<?= $p['slug'] ?>">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('p2019', 'codex_pagination'); ?>
      <a class="btn btn-secondary mb-3" href="/pendant">Kembali</a>
    </div>
  </div>
</div>
<?= $this->endSection() ?>