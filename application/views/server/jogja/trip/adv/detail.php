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
                                                            <label for=""><h6 class="card-subtitle text-muted">Nomor Journey</h6></label><br>
                                                            <?= $trip['id_journey']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nama</h6></label><br>
                                                            <?= $trip['judul']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Harga</h6></label><br>
                                                            <?= $trip['price']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Destinasi</h6></label><br>
                                                            <?= $trip['destinasi']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Include</h6></label><br>
                                                            <?= $trip['include']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Exclude</h6></label><br>
                                                            <?= $trip['exclude']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">S&K</h6></label><br>
                                                            <?= $trip['sk']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Foto KTP</h6></label><br>
                                                            <img src="<?= base_url('./images/'.$trip['gambar'])?>" 
                                                            width="200px" height="125px">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Jenis One Day Trip</h6></label><br>
                                                            <?php 
                                                            if ($trip['id_jenist']==1) {
                                                                $trip = "Adventure";
                                                            } echo $trip;
                                                            ?>
                                                            
                                                        </div>
                                                    <a href="<?= base_url(); ?>server/blog" class="btn btn-primary">Kembali</a>
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