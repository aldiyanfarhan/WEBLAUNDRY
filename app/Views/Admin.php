<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>
<br>
<h4 class="text-center">FORM INPUT</h4>
<div class="row">

    <div class="container">
        <br>
        <div class="card">
            <div class="card-body">

                <form method="post" action="<?= base_url('/Customer/input') ?>">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                    </div>

                    <!-- <div class="form-group">
                    <label for="jenis_layanan">Jenis Layanan</label>
                    <select name="jenis_layanan" class="form-control" id="jenis_layanan">
                        <option value="pakaian_regular">Pakaian Regular</option>
                        <option value="pakaian_ons">Pakaian ONS</option>
                    </select>
                </div> -->

                    <div class="form-group">
                        <label for="no_telp">No Telp :</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>" />
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <textarea class="form-control" name="alamat" id="alamat"><?= old('alamat') ?></textarea>
                    </div>

                    <!-- <div class="form-group btn-group-toggle" data-toggle="buttons">
                    <label for="status">Status :</label>
                    <br>
                    <label class="btn btn-secondary active">
                        <input type="radio" name="antri" id="antri" autocomplete="off" checked> Antri
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="mencuci" id="mencuci" autocomplete="off"> Mencuci
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="pengeringan" id="pengeringan" autocomplete="off"> Pengeringan
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="setrika" id="setrika" autocomplete="off"> Setrika
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="selesai" id="selesai" autocomplete="off"> Selesai
                    </label>
                </div> -->

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option>Pilih Status :</option>
                            <option value="antri">Antri</option>
                            <option value="mencuci">Mencuci</option>
                            <option value="pengeringan">Pengeringan</option>
                            <option value="setrika">Setrika</option>
                        </select>
                    </div>

                    <!-- <div class="form-group btn-group-toggle" data-toggle="buttons">
                    <label for="jenis_layanan">Jenis Layanan :</label>
                    <br>
                    <label class="btn btn-secondary active">
                        <input type="radio" name="pakaian_regular" id="pakaian_regular" autocomplete="off"> Pakaian Regular
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="pakaian_ons" id="pakaian_ons" autocomplete="off"> Pakaian Ons
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="bedcover_regular" id="bedcover_regular" autocomplete="off"> Bedcover Regular
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="bedcover_ons" id="bedcover_ons" autocomplete="off"> Bedcover Ons
                    </label>
                </div> -->

                    <div>
                        <select class="form-control">
                            <option>Jenis Layanan :</option>
                            <option value="pakaian_regular">Pakaian Regular</option>
                            <option value="pakaian_ons">Pakaian Ons</option>
                            <option value="bedcover_regular">Bedcover Regular</option>
                            <option value="bedcover_ons">Bedcover Regular</option>
                        </select>
                    </div>

                    <div id="check" class="pakaian_regular box">
                        <div class="form-group"><br>
                            <label for="berat">Berat untuk Pakaian :</label>
                            <input type="text" class="form-control" id="berat" name="berat" placeholder="KG" value="<?= old('berat') ?>" />
                        </div>
                    </div>
                    <div id="check" class="pakaian_ons box">
                        <div class="form-group"><br>
                            <label for="berat">Berat untuk Pakaian :</label>
                            <input type="text" class="form-control" id="berat" name="berat" placeholder="KG" value="<?= old('berat') ?>" />
                        </div>
                    </div>
                    <div id="check" class="bedcover_regular box">
                        <div class="form-group"><br>
                            <label for="kuantitas">Kuantitas untuk Bedcover :</label>
                            <input type="text" class="form-control" id="kuantitas" name="kuantitas" placeholder="Pieces" value="<?= old('kuantitas') ?>" />
                        </div>
                    </div>
                    <div id="check" class="bedcover_ons box">
                        <div class="form-group"><br>
                            <label for="kuantitas">Kuantitas untuk Bedcover :</label>
                            <input type="text" class="form-control" id="kuantitas" name="kuantitas" placeholder="Pieces" value="<?= old('kuantitas') ?>" />
                        </div>
                    </div>



                    <!-- <div class="form-group">
                    <label for="kuantitas">Kuantitas untuk Bedcover :</label>
                    <input type="text" class="form-control" id="kuantitas" name="kuantitas" placeholder="Pieces" value="<?= old('kuantitas') ?>" />
                </div>

                <div class="form-group">
                    <label for="berat">Berat untuk Pakaian :</label>
                    <input type="text" class="form-control" id="berat" name="berat" placeholder="KG" value="<?= old('berat') ?>" />
                </div> -->
                    <br>


                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-info" />
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>



<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Laundry</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <form class="form-inline" action="" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari" name="keyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Cari</button>
            </form>

            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>Invoice</th>
                    <th>Status</th>
                    <th>Admin</th>
                    <th>Nama</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                    <th>jenis layanan</th>
                    <th>Kuantitas</th>
                    <th>Berat</th>
                    <th>Action</th>
                </tr>
                <?php
                $invoice = 1;
                foreach ($customer as $row) {
                ?>
                    <tr>
                        <td><?= $row->invoice; ?></td>
                        <td><?= $row->status; ?></td>
                        <td><?= $row->username_admin; ?></td>
                        <td><?= $row->nama_cust; ?></td>
                        <td><?= $row->no_telp; ?></td>
                        <td><?= $row->alamat; ?></td>
                        <td><?= $row->jenis_layanan; ?></td>
                        <td><?= $row->kuantitas; ?></td>
                        <td><?= $row->berat; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url(""); ?>" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <?= $pager->links('customer', 'customer_pagination'); ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>>