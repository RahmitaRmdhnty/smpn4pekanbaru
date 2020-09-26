<div class="container">
  <div class="row">
    <?php foreach ($teachers as $teacher) : ?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="mothernail">
          <img src="<?= base_url('assets/img/guru/' . $teacher['foto_guru']) ?>" class="img-fluid" alt="Responsive image">
          <div class="mothernail-overlay">
            <div class="text-overlay">
              <?= $teacher['nama_guru'] ?><br><br>
              <?= $teacher['jabatan_guru'] ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>