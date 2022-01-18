<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Customer</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('customer/update/' . $customer->invoice) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $customer->nama_cust; ?>">

                </div>

                <div class="form-group">
                    <label for="no_telp">No Telp :</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $customer->no_telp; ?>" />
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <textarea class="form-control" name="alamat" id="alamat"><?= $customer->alamat; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="status" value="">
                        <option>Pilih Status :</option>
                        <option value="antri" <?= ($customer->status == "antri" ? "selected" : ""); ?>>Antri</option>
                        <option value="mencuci" <?= ($customer->status == "mencuci" ? "selected" : ""); ?>>Mencuci</option>
                        <option value="setrika" <?= ($customer->status == "setrika" ? "selected" : ""); ?>>Setrika</option>
                        <option value="pengeringan" <?= ($customer->status == "pengeringan" ? "selected" : ""); ?>>Pengeringan</option>


                        <!-- <option value="antri">Antri</option>
                        <option value="mencuci">Mencuci</option>
                        <option value="pengeringan">Pengeringan</option>
                        <option value="setrika">Setrika</option> -->
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>>