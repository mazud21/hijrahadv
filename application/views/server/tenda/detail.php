<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Dashboard Admin PDAM</title>
        <?php $this->load->view("server/templates/header.php") ?>
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
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                
                                    <div class="row mt-3">
                                        <div class="col-md-6">

                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nomor Tenda</h6></label><br>
                                                            <?= $tent['id_tenda']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nama</h6></label><br>
                                                            <?= $tent['nama']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Brand</h6></label><br>
                                                            <?= $tent['merk']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Foto Tenda</h6></label><br>
                                                            <img src="<?= base_url('./images/'.$tent['gambar'])?>" 
                                                            width="200px" height="125px">
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Kapasitas</h6></label><br>
                                                            <?= $tent['capacity']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Layer</h6></label><br>
                                                            <?= $tent['layer']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Color</h6></label><br>
                                                            <?= $tent['color']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Flysheet</h6></label><br>
                                                            <?= $tent['flysheet']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Inner</h6></label><br>
                                                            <?= $tent['inner_']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Floor</h6></label><br>
                                                            <?= $tent['floor']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Poles</h6></label><br>
                                                            <?= $tent['poles']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Dimensi</h6></label><br>
                                                            <?= $tent['size']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Berat</h6></label><br>
                                                            <?= $tent['weight']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Biaya Sewa</h6></label><br>
                                                            <?= $tent['biaya']; ?>
                                                        </div>
                                                    <a href="<?= base_url(); ?>server/tenda" class="btn btn-primary">Kembali</a>
                                                </div>
                                        </div>
                                    </div>
                                
                                </p>
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