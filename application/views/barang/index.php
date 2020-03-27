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
                        <h1 class="mt-4"><?= $judul ?></h1>
                        
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="<?= base_url(); ?>"><?= $judul ?></a></li>
                        </ol>
            <!-- CONTENT -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <p class="mb-0">
                                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                                <?php if ($this->session->flashdata('flash')) : ?>
                                <?php endif; ?>

                                        <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah
                                            Data Matras</a>

                                        <form action="" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Cari data matras.." name="keyword">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">Cari</button>
                                                </div>
                                            </div>
                                        </form>

                                        <h3>Daftar Matras</h3>
                                        <?php if (empty($matras)) : ?>
                                            <div class="alert alert-danger" role="alert">
                                            data matras tidak ditemukan.
                                            </div>
                                        <?php endif; ?>

                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                        <table class="table table-bordered table-striped mb-0" id="dtVerticalScrollExample">
                                            <thead>
                                            <tr>
                                                <th scope="col">Nomor Matras</th>
                                                <th scope="col">Nama Matras</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($matras as $mat) : ?>
                                            <tr>
                                                <td><?= $mat['id_matras']; ?></td>
                                                <td><?= $mat['nama']; ?></td>
                                                <td><a href="<?= base_url(); ?>matras/hapus/<?= $mat['id_matras']; ?>"
                                                                class="badge badge-danger float-right tombol-hapus">hapus</a>
                                                            <a href="<?= base_url(); ?>matras/ubah/<?= $mat['id_matras']; ?>"
                                                                class="badge badge-success float-right">ubah</a>
                                                            <a href="<?= base_url(); ?>matras/detail/<?= $mat['id_matras']; ?>"
                                                                class="badge badge-primary float-right">detail</a>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                            
                                        </table>
                                        
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