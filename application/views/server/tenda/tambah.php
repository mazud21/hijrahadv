<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Blog Hijrah Adventure</title>
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
                    Form Tambah Data Blog
            </div>

            <div class="card-body">
                <?php echo form_open("server/tenda/tambah", array('enctype'=>'multipart/form-data')); ?>
                <form action="" method="post">
                    
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="nama">Nama Tenda</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="merk">Brand</label>
                            <input type="text" name="merk" class="form-control" id="merk">
                            <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">                            
                            <label for="gambar">Gambar</label>
                            <img class="rounded mx-auto d-block" id='gambar' name='gambar' src="https://cdn3.iconfinder.com/data/icons/misc-file-formats/512/20-512.png" width="200">
                            <input type="file" name="gambar" class="form-control" id="gambar" onchange='readURL(event)'>
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="capacity">Kapasitas</label>
                            <input type="text" name="capacity" class="form-control" id="capacity" >
                            <!--select class="browser-default custom-select"> 
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                            </select-->
                            <small class="form-text text-danger"><?= form_error('capacity'); ?></small>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="layer">Layer</label>
                            <input type="text" name="layer" class="form-control" id="layer">
                            <small class="form-text text-danger"><?= form_error('layer'); ?></small>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" name="color" class="form-control" id="color">
                            <small class="form-text text-danger"><?= form_error('color'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="flysheet">Flysheet</label>
                            <input type="text" name="flysheet" class="form-control" id="flysheet">
                            <small class="form-text text-danger"><?= form_error('flysheet'); ?></small>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="inner_">Inner</label>
                            <input type="text" name="inner_" class="form-control" id="inner_">
                            <small class="form-text text-danger"><?= form_error('inner_'); ?></small>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="floor">Floor</label>
                            <input type="text" name="floor" class="form-control" id="floor">
                            <small class="form-text text-danger"><?= form_error('floor'); ?></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="poles">Poles</label>
                            <input type="text" name="poles" class="form-control" id="poles">
                            <small class="form-text text-danger"><?= form_error('poles'); ?></small>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="size">Dimensi</label>
                            <input type="text" name="size" class="form-control" id="size">
                            <small class="form-text text-danger"><?= form_error('size'); ?></small>
                        </div>
                        </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="weight">Berat</label>
                            <input type="text" name="weight" class="form-control" id="weight">
                            <small class="form-text text-danger"><?= form_error('weight'); ?></small>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="biaya">Biaya Sewa</label>
                        <input type="text" name="biaya" class="form-control" id="biaya">
                        <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
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

