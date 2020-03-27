<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Dashboard Admin PDAM</title>
        <?php $this->load->view("templates/header.php") ?>
    </head>

    <body>
    <?php $this->load->view("templates/head_nav.php") ?>

    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    
                <!-- menu -->
                    <?php $this->load->view("templates/side_menu.php") ?>
                <!-- menu END -->

                <!-- side footer -->
                    <?php $this->load->view("templates/side_footer.php") ?>
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
                                                            <label for=""><h6 class="card-subtitle text-muted">Nomor Pelanggan</h6></label><br>
                                                            <?= $pelanggan['no_pelanggan']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nama</h6></label><br>
                                                            <?= $pelanggan['nama']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nomor KTP</h6></label><br>
                                                            <?= $pelanggan['no_ktp']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Alamat</h6></label><br>
                                                            <?= $pelanggan['alamat']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Alamat Email</h6></label><br>
                                                            <?= $pelanggan['email']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nomor HP</h6></label><br>
                                                            <?= $pelanggan['no_hp']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Foto KTP</h6></label><br>
                                                            <img src="<?= base_url('./images/'.$pelanggan['foto_ktp'])?>" 
                                                            width="200px" height="125px">
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Pilihan Tarif Air</h6></label><br>
                                                            <?= $pelanggan['pilih_tarif']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Password</h6></label><br>
                                                            <?= $pelanggan['password']; ?>
                                                        </div>

                                                    <a href="<?= base_url(); ?>pelanggan" class="btn btn-primary">Kembali</a>
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
                    <?php $this->load->view("templates/footer.php") ?>    
                </footer>
                <!-- footer END -->
            </div>
        </div>
        <!-- scripts -->
        <?php $this->load->view("templates/script_js.php") ?>
        <!-- scripts END -->
    </body>
</html>