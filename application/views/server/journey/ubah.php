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
        <script>
            var readURL= function(event) {
            var input = event.target;

            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var output = document.getElementById('gambar');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        };
        </script>
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
                        <!--h1 class="mt-4"><?= $judul ?></h1-->
                        
                        <ol class="breadcrumb mb-4">
                            <!--li class="breadcrumb-item active"><a href="<?= base_url(); ?>"><?= $judul ?></a></li-->
                        </ol>
                    <!-- CONTENT -->
                    <div class="container">
                        <div style="color: red;"><i><?php echo (isset($message))? $message : ""; ?></i>
                        </div>
                        <div class="row mt-3">
                            
                                <div class="card">
                                    <div class="card-header">
                                            Form Ubah Data Journey
                                    </div>
                                        <div class="card-body">
                                            <?php // echo form_open_multipart('server/journey/update/'.$journey->id_journey);?>
                                            <!--form action="" method="post"-->
                                            <form action="<?=base_url()?>server/journey/updatedata" method="post" enctype="multipart/form-data">
                                                
                                                <div class="form-group">
                                                    <label for="judul">Judul</label>
                                                    <input type="text" name="judul" class="form-control" id="judul" value="<?= $blg->judul;?>">
                                                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                                                </div>
                                                
                                                <!-- file lama -->
                                                <input type="hidden" name="img_old" value="<?=$blg->gambar?>">
                                                <!-- ID -->
                                                <input type="hidden" name="id_journey" value="<?=$blg->id_journey?>">

                                                <div class="form-group">                            
                                                    <label for="gambar">Gambar</label><br>
                                                    <img id='gambar' name='gambar' src=<?= base_url("images/".$blg->gambar)?> width='500'>
                                                    <input type="file" name="img_new" id="img_new" class="form-control" id="gambar" onchange='readURL(event)'>
                                                    <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                                                </div>

                                                <div class="form-group">
                                                    <label for="isi">Konten</label>
                                                    <!--input type="text" name="isi" class="form-control" id="isi" value="<?= $blg->isi;?>"-->
                                                    <textarea class="ckeditor" id="isi" name="isi" ><?= $blg->isi;?></textarea>
                                                    <small class="form-text text-danger"><?= form_error('isi'); ?></small>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="tanggal_create">Tanggal</label>
                                                            <input type="text" name="tanggal_create" class="form-control" id="tanggal_create" value="<?= $blg->tanggal_create; ?>" readonly>
                                                            <small class="form-text text-danger"><?= form_error('tanggal_create'); ?></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="tanggal_update">Tanggal Update</label>
                                                            <input type="text" name="tanggal_update" class="form-control" id="tanggal_update" value="<?= tgl_indo(date('Y-m-d')); ?>" readonly>
                                                            <small class="form-text text-danger"><?= form_error('tanggal_update'); ?></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="submit" id="ubah" name="ubah" class="btn btn-primary float-right" value='Ubah Data'></button>
                                            </form>
                                            <?php echo form_close(); ?>            
                                        </div>
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