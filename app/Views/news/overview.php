<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<!-- Main Content-->
<div class="container mt-3 px-4 px-lg-5">
  <div class="row">
    <h1>Daftar Berita Terkini</h1>
  </div>
  <div class="row">
    <div class="col">
      <!-- Post preview-->
      <?php if (!empty($news) && is_array($news)) : ?>
        <?php foreach ($news as $news_item) : ?>
          <div class="post-preview mt-5">
            <a href="/news/view/<?= esc($news_item['slug'], 'url') ?>">
              <h3 class="post-title"><?= $news_item['title'] ?></h3>
            </a>
            <p class="post-meta">
              Dibuat oleh
              <a href="home/about">TBC</a>
              pada <?= $news_item['created_at'] ?>
            </p>
          </div>
          <!-- Divider-->
          <hr class="my-4" />
        <?php endforeach; ?>
        <!-- Pager-->
        <div><?= $pager->links('news', 'codex_pagination'); ?></div>
      <?php else : ?>
        <div class="post-preview mt-5">
          <h3>Tidak ada berita</h3>
          <p>Belum ada berita yang ditambahkan di bagian ini.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?= $this->endSection() ?>