<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Dashboard Admin Hijrah Adventure</title>
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
                        <div class="mt-3"></div>
                        
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item active"><a href="<?= base_url(); ?>"><?= $judul ?></a></li>
                        </ol>
            <!-- CONTENT -->
            <div class="card-group">
                <div class="card text-white bg-info border border-dark m-1 text">
                    <a class="text-white" href="<?= base_url(); ?>server/tenda">
                        <img class="card-img-top" src="<?= base_url(); ?>/images/admin/tenda.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h7 class="card-title">Tenda</h7>
                        </div>
                    </a>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/carrier.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Carrier</h7>
                    
                    </div>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/sb.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Sleeping Bag</h7>
                
                    </div>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/matras.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Matras</h7>
                    
                    </div>
                </div>
                </div>
                <div class="card-group">
                <div class="card text-white bg-info border border-dark m-1">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/kompor.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Kompor Portable</h7>
                    
                    </div>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/gas.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Tabung Gas Mini</h7>
                    
                    </div>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/nesting.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Nesting Cook Set</h7>
                    
                    </div>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/lampu_kepala.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Lampu Kepala</h7>
                    
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