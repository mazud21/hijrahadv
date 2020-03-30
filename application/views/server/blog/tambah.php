<?php 
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<div class="container">
<div style="color: red;"><i><?php echo (isset($message))? $message : ""; ?></i></div>
    
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Blog
                </div>

                <div class="card-body">
                <?php echo form_open("server/blog/tambah", array('enctype'=>'multipart/form-data')); ?>
                <form action="" method="post">
                    
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul">
                        <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="isi">Konten</label>
                        <input type="text" name="isi" class="form-control" id="isi">
                        <small class="form-text text-danger"><?= form_error('isi'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_create">Tanggal</label>
                        <input type="text" name="tanggal_create" class="form-control" id="tanggal_create" value="<?= tgl_indo(date('Y-m-d')); ?>" readonly>
                        <small class="form-text text-danger"><?= form_error('tanggal_create'); ?></small>
                    </div>

                    <div class="form-group">                            
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>

                    <input type="submit" id="tambah" name="tambah" class="btn btn-primary float-right" value='Tambah Data'></button>
                </form>
                <?php echo form_close(); ?>            
            </div>


        </div>
    </div>

</div>

