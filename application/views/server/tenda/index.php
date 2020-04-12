<!DOCTYPE html>
<html lang="en">
    <head>
    <title>tenda Hijrah Adventure</title>
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
                                                <a href="<?= base_url(); ?>server/tenda/tambah" class="btn btn-primary">Tambah
                                                    Data tagihan</a>
                                            </div>
                                        </div>
                                            <form action="" method="post">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Cari data id_tenda.." name="keyword">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit">Cari</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <h3>Daftar Tenda</h3>
                                            <?php if (empty($tenda)) : ?>
                                                <div class="alert alert-danger" role="alert">
                                                data tenda tidak ditemukan.
                                                </div>
                                            <?php endif; ?>
                                            
                                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                        <table class="table table-bordered table-striped mb-0" id="dtVerticalScrollExample">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id Tenda</th>
                                                <th scope="col">Nama Tenda</th>
                                                <th scope="col">Brand Tenda</th>
                                                <th scope="col">Gambar Tenda</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($tenda as $tent) : ?>
                                            <tr>
                                                <td><?= $tent['id_tenda']; ?></td>
                                                <td><?= $tent['nama']; ?></td>
                                                <td><?= $tent['merk']; ?></td>
                                                <td><img src="<?= base_url("images/".$tent['gambar']); ?>" alt="image.png" width="200px"></td>
                                                <td><a href="<?= base_url(); ?>server/tenda/hapus/<?= $tent['id_tenda']; ?>"
                                                                class="badge badge-danger float-right tombol-hapus">hapus</a>
                                                            <a href="<?= base_url(); ?>server/tenda/edit/<?= $tent['id_tenda']; ?>"
                                                                class="badge badge-success float-right">ubah</a>
                                                            <a href="<?= base_url(); ?>server/tenda/detail/<?= $tent['id_tenda']; ?>"
                                                                class="badge badge-primary float-right">detail</a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                            
                                        </table>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="card mb-4">
                                                        <div class="card-body">
                                                            <h1>Coba Modal</h1>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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