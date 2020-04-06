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

<div class="container">
<div style="color: red;"><i><?php echo (isset($message))? $message : ""; ?></i></div>
    
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Blog
                </div>

                <div class="card-body">
                <?php // echo form_open_multipart('server/blog/update/'.$blog->id_blog);?>
                <!--form action="" method="post"-->
                <form action="<?=base_url()?>server/blog/updatedata" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="<?= $blg->judul;?>">
                        <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="isi">Konten</label>
                        <input type="text" name="isi" class="form-control" id="isi" value="<?= $blg->isi;?>">
                        <small class="form-text text-danger"><?= form_error('isi'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_create">Tanggal</label>
                        <input type="text" name="tanggal_create" class="form-control" id="tanggal_create" value="<?= $blg->tanggal_create; ?>" readonly>
                        <small class="form-text text-danger"><?= form_error('tanggal_create'); ?></small>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_update">Tanggal Update</label>
                        <input type="text" name="tanggal_update" class="form-control" id="tanggal_update" value="<?= tgl_indo(date('Y-m-d')); ?>" readonly>
                        <small class="form-text text-danger"><?= form_error('tanggal_update'); ?></small>
                    </div>

                    <div class="form-group">                            
                        <label for="gambar">Gambar</label>
                        <img id='gambar' name='gambar' src=<?= base_url("images/".$blg->gambar)?> width='100' height='100'>
                        <input type="file" name="img_new" id="img_new" class="form-control" id="gambar" onchange='readURL(event)'>
                        <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                    </div>

                    <!-- file lama -->
          <input type="hidden" name="img_old" value="<?=$blg->gambar?>">
          <!-- ID -->
          <input type="hidden" name="id_blog" value="<?=$blg->id_blog?>">

                    <input type="submit" id="ubah" name="ubah" class="btn btn-primary float-right" value='Ubah Data'></button>
                </form>
                <?php echo form_close(); ?>            
            </div>


        </div>
    </div>

</div>