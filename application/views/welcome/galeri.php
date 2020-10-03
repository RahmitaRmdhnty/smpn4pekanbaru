<div class="row">
    <?php foreach ($photos as $photo) : ?>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="mothernail">
                <img src="<?= base_url('assets/img/galeri/') . $photo['foto_kegiatan'] ?>" class="img-fluid galeri" alt="Responsive image">
                <div class="mothernail-overlay">
                    <div class="text-overlay">
                        <?= $photo['ket'] ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>