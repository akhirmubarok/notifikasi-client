<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>notifikasi/tambah" class="btn btn-primary">Tambah Notifikasi</a>
        </div>
        <div class="row  mt-3">
            <div class="col-md-6">
                <h3>Daftar Notifikasi</h3>
                <ul class="list-group">
                    <?php foreach ($notifikasi as $notif) : ?>
                    <li class="list-group-item"><?= $notif['pesan']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>