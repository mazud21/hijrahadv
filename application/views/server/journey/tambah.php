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
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Journey Hijrah Adventure</title>
        <?php $this->load->view("server/templates/header.php") ?>
        <script type="text/javascript" src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    </head>

    <body>
    <?php $this->load->view("server/templates/head_nav.php") ?>

    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    
                <!-- menu -->
                    <?php $this->load->view("server/templates/side_menu.php") ?>
                <!-- menu END -->

                <!-- side footer -->
                    <?php $this->load->view("server/templates/side_footer.php") ?>
                <!-- side footer END-->
                </nav>
            </div>

            <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul ?></h1>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="<?= base_url(); ?>"><?= $judul ?></a></li>
                        </ol>
            <!-- CONTENT -->
            <div class="container">
<div style="color: red;"><i><?php echo (isset($message))? $message : ""; ?></i></div>
    
    <div class="row mt-3">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Journey
                </div>

                <div class="card-body">
                <?php echo form_open("server/journey/tambah", array('enctype'=>'multipart/form-data')); ?>
                <form action="" method="post">
                    
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul">
                        <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="isi">Konten</label>
                        <!--input type="text" name="isi" class="form-control" id="isi"-->
                        <textarea class="ckeditor" id="isi" name="isi"></textarea>
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

                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" class="form-control" id="penulis" value="<?php echo $this->session->userdata('nama'); ?>" readonly>
                        <small class="form-text text-danger"><?= form_error('penulis'); ?></small>
                    </div>

                    <input type="submit" id="tambah" name="tambah" class="btn btn-primary float-right" value='Tambah Data'></button>
                </form>
                <?php echo form_close(); ?>            
            </div>
    </div>

</div>
            <!-- CONTENT END -->
                    </div>
                </main>

                <!-- footer -->
                <footer class="py-4 bg-light mt-auto">
                    <?php $this->load->view("server/templates/footer.php") ?>    
                </footer>
                <!-- footer END -->
            </div>
        </div>
        <!-- scripts -->
        <?php $this->load->view("server/templates/script_js.php") ?>
        <!-- scripts END -->
    </body>
</html>

