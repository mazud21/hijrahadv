<div class="container">
<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Matras
                </div>
                <div class="card-body">
                <?= form_open("barang/tambah", 
                            array('enctype'=>'multipart/form-data')); ?>
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="id_matras">ID Matras</label>
                            <input type="text" name="id_matras" class="form-control" id="id_matras">
                            <small class="form-text text-danger"><?= form_error('id_matras'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" class="form-control" id="merk">
                            <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar">
                        
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="biaya">Biaya Sewa</label>
                            <input type="text" name="biaya" class="form-control" id="biaya">
                            <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
                        </div>

                        <input type="submit" name="tambah" class="btn btn-primary float-right" value='Tambah Pendaftar'></button>
                        <a href="<?= base_url(); ?>barang" class="btn btn-primary float-right mx-2" >Kembali</a>
                    </form>
                    <?= form_close(); ?>
                </div>
            </div>


        </div>
    </div>

</div>