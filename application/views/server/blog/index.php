<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Blog Hijrah Adventure</title>
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
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <a href="<?= base_url(); ?>server/blog/tambah" class="btn btn-primary">Tambah
                                                    Data tagihan</a>
                                            </div>
                                        </div>
                                            <form action="" method="post">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Cari data id_blog.." name="keyword">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit">Cari</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <h3>Daftar Blog</h3>
                                            <?php if (empty($blog)) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                data blog tidak ditemukan.
                                                </div>
                                            <?php endif; ?>
                                            
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                        <table class="table table-bordered table-striped mb-0" id="dtVerticalScrollExample">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id Blog</th>
                                                <th scope="col">Nama Blog</th>
                                                <th scope="col">Gambar Blog</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($blog as $blg) : ?>
                                            <tr>
                                                <td><?= $blg['id_blog']; ?></td>
                                                <td><?= $blg['judul']; ?></td>
                                                <td><img src="<?= base_url("images/".$blg['gambar']); ?>" alt="image.png" width="200px"></td>
                                                <td><a href="<?= base_url(); ?>server/blog/hapus/<?= $blg['id_blog']; ?>"
                                                                class="badge badge-danger float-right tombol-hapus">hapus</a>
                                                            <a href="<?= base_url(); ?>server/blog/edit/<?= $blg['id_blog']; ?>"
                                                                class="badge badge-success float-right">ubah</a>
                                                            <a href="<?= base_url(); ?>server/blog/detail/<?= $blg['id_blog']; ?>"
                                                                class="badge badge-primary float-right">detail</a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                            
                                        </table>
                                        
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