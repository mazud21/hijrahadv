<?php foreach ($tools as $tool) : ?>
    <div id="detail_modal<?= $tool ['id_tool'] ?>" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    
                </div>
                <div class="modal-body">
                    <!-- START MAIN CONTENT MODAL-->
                    <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                
                                    <div class="row mt-3">
                                        <div class="col">

                                                <div class="card-body">
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nomor Carrier</h6></label><br>
                                                            <?= $tool['id_tool']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Nama</h6></label><br>
                                                            <?= $tool['nama']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Brand</h6></label><br>
                                                            <?= $tool['merk']; ?>
                                                        </div>
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Foto Carrier</h6></label><br>
                                                            <img src="<?= base_url('./images/'.$tool['gambar'])?>" 
                                                            width="200px">
                                                        </div>
                                                    <div class="form-group">
                                                        <label for=""><h6 class="card-subtitle text-muted">Keterangan</h6></label><br>
                                                        <?= $tool['ket']; ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""><h6 class="card-subtitle text-muted">Jenis</h6></label><br>
                                                        <?= $tool['desc_']; ?>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Color</h6></label><br>
                                                            <?= $tool['color']; ?>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Dimensi</h6></label><br>
                                                            <?= $tool['size']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Berat</h6></label><br>
                                                            <?= $tool['weight']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Volume</h6></label><br>
                                                            <?= $tool['volume']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Rain Cover</h6></label><br>
                                                            <?= $tool['pilihan']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Stock</h6></label><br>
                                                            <?= $tool['stock_']; ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for=""><h6 class="card-subtitle text-muted">Biaya Sewa</h6></label><br>
                                                            <?= $tool['biaya']; ?>
                                                        </div>
                                                    <a href="<?= base_url(); ?>server/carrier" class="btn btn-primary">Kembali</a>
                                                </div>
                                        </div>
                                    </div>
                                
                                </p>
                            </div>
                    </div>
                    <!-- END MAIN CONTENT MODAL-->
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                </div>
                
            </div>
        </div>
    </div>
    <?php endforeach; ?>