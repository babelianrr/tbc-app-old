<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row my-3">
    <div class="col-8">
      <h1>Dashboard</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-11 col-sm-11">
      <div class="card mb-3 text-center">
        <div class="card-header">
          <h2>Status Forum</h2>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <h4 class="card-title">Jumlah Pengguna</h4>
              <p class="h3 text-success"><strong><?= $user_count ?></strong></p>
              <canvas id="user_age" width="400" height="400"></canvas>
            </div>
            <div class="col-6">
              <h4 class="card-title">Jumlah Thread</h4>
              <p class="h3 text-success"><strong><?= $thread_count ?></strong></p>
              <canvas id="category_thread" width="400" height="400"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="my-5">
</div>

<script src="<?= base_url('js/chart.min.js') ?>"></script>
<script>
  var category_thread = document.getElementById('category_thread');
  var category_thread_data = [];
  var category_thread_label = [];
  <?php foreach ($category_thread->getResult() as $key => $value) : ?>
    category_thread_data.push(<?= $value->total ?>);
    category_thread_label.push('<?= $value->category ?>');
  <?php endforeach; ?>

  var category_thread_data = {
    datasets: [{
      data: category_thread_data,
      backgroundColor: [
        'rgba(37,224,234,0.8)',
        'rgba(47,63,237,0.8)',
        'rgba(31,211,97,0.8)',
        'rgba(226,213,31,0.8)',
        'rgba(226,54,31,0.8)',
        'rgba(239,52,105,0.8)',
        'rgba(150,12,125,0.8)',
        'rgba(84,78,83,0.8)',
      ],
    }],
    labels: category_thread_label,
  }

  var category_thread_chart = new Chart(category_thread, {
    type: 'doughnut',
    data: category_thread_data
  });

  var user_age = document.getElementById('user_age');
  var user_age_data = [];
  var user_age_label = [];

  <?php foreach ($user_age->getResult() as $key => $value) : ?>
    user_age_data.push(<?= $value->total ?>);
    user_age_label.push('<?= $value->age ?>');
  <?php endforeach; ?>

  var user_age_data = {
    datasets: [{
      label: 'Jumlah',
      data: user_age_data,
      backgroundColor: [
        'rgba(37,224,234,0.8)',
      ],
    }],
    labels: user_age_label,
  }

  var user_age_chart = new Chart(user_age, {
    type: 'bar',
    data: user_age_data
  });
</script>
<?= $this->endSection() ?>