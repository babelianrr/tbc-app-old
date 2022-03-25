<div class="container">
  <div class="row">
    <h2><?= esc($title) ?></h2>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <?= \Config\Services::validation()->listErrors() ?>

      <form action="/news/create" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" />
        </div>
        <div class="mb-3">
          <label for="body" name="body" class="form-label">Text</label>
          <textarea class="form-control mb-3" name="body" id="editor" row="10"></textarea>
        </div>
        <button class="btn btn-success" type="submit" name="submit">Publish</button>
      </form>
    </div>
  </div>
</div>