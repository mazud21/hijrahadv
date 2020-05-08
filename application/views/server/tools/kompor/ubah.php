
    <script>
            var readURL= function(event) {
            var input = event.target;

            var reader = new FileReader();
            reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('g');
            output.src = dataURL;
            };
        reader.readAsDataURL(input.files[0]);
    };
    </script>

    <?php foreach ($tools as $tool) : ?>
        <div id="edit_modal<?= $tool['id_tool'] ?>" class="modal fade">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        
                    </div>
                    <div class="modal-body">
                        <!-- CONTENT -->
                        <div class="container">
                                <div style="color: red;"><i><?php echo (isset($message))? $message : ""; ?></i></div>
                                
                                <div class="row mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                                Form Edit Data Kompor Portable
                                        </div>

                                        <div class="card-body">
                                            <?php echo form_open("server/tools/kompor/updatedata", array('enctype'=>'multipart/form-data')); ?>
                                            <form action="" method="post">
                                                
                                                <!-- ID -->
                                                <input type="hidden" name="id_tool" value="<?=$tool['id_tool']?>">

                                            <div class="col-sm">
                                                <div class="form-group">                            
                                                    <label for="gambar">Gambar</label>
                                                    <!--img class="rounded mx-auto d-block" id='gambar' name='gambar' src="https://cdn3.iconfinder.com/data/icons/misc-file-formats/512/20-512.png" width="200"-->
                                                    <img class="rounded mx-auto d-block" id='g' name='img_old' src=<?= base_url("images/".$tool['gambar'])?> width='200'>
                                                    
                                                    <input type="file" name="gambar" class="form-control" id="gambar" onchange='readURL(event)'>
                                                    <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Kompor Portable</label>
                                                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $tool['nama'];?>">
                                                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="merk">Brand</label>
                                                        <input type="text" name="merk" class="form-control" id="merk" value="<?= $tool['merk'];?>">
                                                        <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="ket">Keterangan</label>
                                                        <textarea name="ket" id="ket" cols="30" rows="10"><?= $tool['ket'];?></textarea>
                                                        <small class="form-text text-danger"><?= form_error('ket'); ?></small>
                                                    </div>
                                                </div>    
                                            </div>

                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="jenis">Jenis</label>
                                                    <select class="form-control" name="id_jenis">
                                                        <?php foreach($jenis as $row):?>
                                                            <option value="<?= $row['id_jenis']?>"
                                                                <?php if ($row['id_jenis'] == $tool['id_jenis']) : ?> 
                                                                selected<?php endif; ?>
                                                            >
                                                                <?= $row['desc_']?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('id_jenis'); ?></small>
                                                    </div>
                                                </div>

                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="model">Model</label>
                                                        <input type="text" name="model" class="form-control" id="model" value="<?= $tool['model'];?>">
                                                        <small class="form-text text-danger"><?= form_error('model'); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="form-group">
                                                    <label for="stock_">Stock</label>
                                                    <input type="number" min="0" name="stock_" class="form-control" id="stock_" value="<?= $tool['stock_'];?>">
                                                    <small class="form-text text-danger"><?= form_error('stock_'); ?></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="biaya">Biaya Sewa</label>
                                                    <input type="text" name="biaya" class="form-control" id="biaya" value="<?= $tool['biaya'];?>">
                                                    <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
                                                </div>
                                            </div>
                                            
                                            <input type="submit" id="ubah" name="ubah" class="btn btn-primary float-right" value='Ubah Data'></button>
                                            </form>
                                            <?php echo form_close(); ?>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- CONTENT END -->
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                    </div>
                    
                </div>
            </div>
        </div>
    <?php endforeach; ?>