<?= $this->extend('Layout/Template'); ?>

<?= $this->section('content'); ?>
<br>
<h4 class="text-center">Bodat</h4>
<div class="row">

    <div class="container">
        <div>
            <label for="namacust">Nama Customor</label>
            <input type="" class="" id="namacust" placeholder="">
        </div>
        <br>

        <div>
            <label for="namacust">No Telp Customor</label>
            <input type="" class="" id="namacust" placeholder="">
        </div>
        <br>

        <div>

            <body>
                <div>
                    <label for="">Jenis Layanan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="red">Pakaian Reguler</option>
                        <option value="red">Pakaian ONS</option>
                        <option value="green">BedCover Reguler</option>
                        <option value="green">BedCover ONS</option>
                    </select>
                </div>
                <br>
                <div class="red box">
                    <input class="form-control" id="" type="text" placeholder="Masukan Jumlah Berat (Kg)">
                </div>
                <div class="green box">
                    <input class="form-control" id="" type="text" placeholder="Masukan Jumlah Satuan (Pcs)">
                </div>

                <button type="submit" class="btn btn-outline-primary">Input</button>

            </body>

        </div>
        <br>
    </div>
</div>
<?= $this->endSection(); ?>>