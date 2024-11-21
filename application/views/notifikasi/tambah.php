<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Notifikasi
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>


                    <form action="" method="post">
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <input type="text" class="form-control" id="pesan">
                        </div>
                        <div class="form-group">
                            <label for="sistem_id">Sistem Id</label>
                            <input type="text" class="form-control" id="sistem_id">
                        </div>
                        <div class="form-group">
                            <label for="no_pegawai">No. Pegawai</label>
                            <input type="text" class="form-control" id="no_pegawai">
                        </div>
                        <!-- <div class="form-group">
                            <label for="is_terkirim">Status</label>
                            <select class="form-control" id="is_terkirim" name="is_terkirim">
                                <option value="0">Gagal Terkirim</option>
                                <option value="1">Terkirim</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="created_at">Created At</label>
                            <input type="datetime-local" class="form-control" id="created_at" name="created_at">
                        </div>
                        <!-- <div class="form-group">
                            <label for="kode">Kode BPS</label>
                            <select class="form-control" id="kode" name="kode">
                                <option value="3400">BPS Prov. D.I.Yogyakarta</option>
                                <option value="3401">BPS Kab. Kulonprogo</option>
                                <option value="3402">BPS Kab. Bantul</option>
                                <option value="3403">BPS Kab. Gunungkidul</option>
                                <option value="3404">BPS Kab. Sleman</option>
                                <option value="3471">BPS Kota Yogyakarta</option>
                            </select> -->
                        <div>
                            <button type="submit" class="btn btn-primary mt-3 float-right">Tambah
                                Notifikasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>