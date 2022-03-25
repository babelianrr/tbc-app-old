<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row my-3">
    <h1>Kotak Keluar DM</h1>
    <small><a href="<?= base_url('messages/inbox') ?>">Pergi ke Kotak Masuk</a></small>
  </div>
  <div class="row my-3">
    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11">
      <?php if (!empty($messages) && is_array($messages)) : ?>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Penerima</th>
              <th scope="col">Pesan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($messages as $key => $message) : ?>
              <tr>
                <th scope="row"><?= $key + 1 . '.' ?></th>
                <td><?= $message->name ?></td>
                <td><?= $message->messages ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else : ?>
        <div>
          <p><i>Belum ada pesan yang dikirim.</i></p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>