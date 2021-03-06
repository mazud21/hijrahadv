<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Sleeping Bag Hijrah Adventure</title>
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
                        <div class="row mt-0">
                            <div class="col-md-6">
                            <div class="row mt-0">
                                <div class="col-md-6">
                                    <a data-toggle="modal" data-target="#tambah_modal" class="btn btn-primary text-white">
                                    Tambah Data tagihan
                                    </a>
                                    <!-- Modal Popup untuk Tambah-->
                                    <?php $this->load->view("server/tools/sb/tambah.php") ?>
                                </div>
                            </div>
                                <form action="" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Cari data id_tool.." name="keyword">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <h3>Daftar tools</h3>
                                    <?php if (empty($tools)) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            data tools tidak ditemukan.
                                        </div>
                                    <?php endif; ?>

                                        <table class="table table-bordered table-striped text-center" id="dtVerticalScrollExample">
                                            <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Id tools</th>
                                                <th scope="col">Nama tools</th>
                                                <th scope="col">Brand tools</th>
                                                <th scope="col">Gambar tools</th>
                                                <th scope="col">Manage</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($tools as $tool) : ?>
                                            <tr>
                                                <td><?= $tool['id_tool']; ?></td>
                                                <td><?= $tool['nama']; ?></td>
                                                <td><?= $tool['merk']; ?></td>
                                                <td><img src="<?= base_url("images/".$tool['gambar']); ?>" alt="image.png" width="200px"></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#detail_modal<?= $tool['id_tool']; ?>">
                                                        <button class="btn"><i class="far fa-list-alt fa-2x" style="color:green;"></i>
                                                        </button>
                                                        <!-- Modal Popup untuk Detail-->
                                                        <?php $this->load->view("server/tools/sb/detail.php") ?>
                                                    </a>
                                                    <a data-toggle="modal" data-target="#edit_modal<?= $tool['id_tool']; ?>">
                                                        <button class="btn"><i class="far fa-edit fa-2x" style="color:blue;"></i>
                                                        </button>
                                                    </a>
                                                        <!-- Modal Popup untuk Edit-->
                                                        <?php $this->load->view("server/tools/sb/ubah.php") ?>
                                                    
                                                    <a href="<?= base_url(); ?>server/tools/sb/hapus/<?= $tool['id_tool']; ?>">
                                                        <button class="btn"><i class="far fa-trash-alt fa-2x" style="color:red;"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                            
                                        </table>
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