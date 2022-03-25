<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row my-3">
    <h1>Pengundian Pemenang Giveaway</h1>
  </div>
  <div class="row">
    <div class="col">
      <button class="btn btn-primary btn-lg mb-3" id="random_number">Undi</button>

      <h5 id="result"></h5>

      <script>
        document.getElementById("random_number").addEventListener("click", function() {
          function getRndInteger(minimum, maximum) {
            return Math.floor(Math.random() * (maximum - minimum)) + minimum;
          }
          document.getElementById("result").innerHTML = "Selamat kepada peserta dengan nomor urut " + getRndInteger(1, 46) + "!";
        });
      </script>
    </div>
  </div>
  <hr class="my-3">
</div>
<?= $this->endSection() ?>