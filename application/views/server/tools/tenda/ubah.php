
    <script>
            var readURL= function(event) {
            var input = event.target;

            var reader = new FileReader();
            reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('gambar');
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
                                                Form Edit Data Tenda
                                        </div>

                                        <div class="card-body">
                                            <?php echo form_open("server/tools/tenda/updatedata", array('enctype'=>'multipart/form-data')); ?>
                                            <form action="" method="post">
                                                
                                                    <!-- file lama -->
                                                    <!--input type="hidden" name="img_old" value="<?=$tool['gambar']?>"-->
                                                    <!-- ID -->
                                                    <input type="hidden" name="id_tool" value="<?=$tool['id_tool']?>">

                                            <div class="col-sm">
                                                <div class="form-group">                            
                                                    <label for="gambar">Gambar</label>
                                                    <!--img class="rounded mx-auto d-block" id='gambar' name='gambar' src="https://cdn3.iconfinder.com/data/icons/misc-file-formats/512/20-512.png" width="200"-->
                                                    <img class="rounded mx-auto d-block" id='gambar' name='img_old' src=<?= base_url("images/".$tool['gambar'])?> width='200'>
                                                    
                                                    <input type="file" name="gambar" class="form-control" id="gambar" onchange='readURL(event)'>
                                                    <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Tenda</label>
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
                                                    
                                                    
                                            </div>

                                            <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="jenis">Jenis</label>
                                                            <!--input type="text" name="id_jenis" class="form-control" id="id_jenis" value="<?= $tool['id_jenis'];?>"-->
                                                        <!--select name="id_jenis" id="id_jenis" class="form-control">
                                                            <?php 
                                                            foreach($jenis as $row){ 
                                                                echo '<option value="'.$row['id_jenis'].'">'
                                                                .$row['desc_'].'</option>';
                                                            }
                                                            ?>
                                                        </select-->
                                                        <select class="form-control" name="id_jenis">
                                                            <?php foreach($jenis as $row):?>
                                                                <option value="<?= $row['id_jenis']?>"
                                                                    <?php if ($row['id_jenis'] == 1/* Tenda */) : ?> 
                                                                    selected<?php endif; ?>
                                                                >
                                                                    <?= $row['desc_']?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                                                    </div>
                                                </div>

                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                    <label for="id_cap">Kapasitas</label>
                                                        <input type="text" name="id_cap" class="form-control" id="id_cap" value="<?= $tool['id_cap'];?>">
                                                        <!--select name="id_cap" id="id_cap" class="form-control">
                                                            <?php 
                                                            foreach($cap as $row){ 
                                                                echo '<option value="'.$row['id_cap'].'">'.$row['cap'].'</option>';
                                                            }
                                                            ?>
                                                        </select-->
                                                        <small class="form-text text-danger"><?= form_error('id_cap'); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="layer">Layer</label>
                                                        <input type="text" name="layer" class="form-control" id="layer" value="<?= $tool['layer'];?>">
                                                        <small class="form-text text-danger"><?= form_error('layer'); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="color">Color</label>
                                                        <input type="text" name="color" class="form-control" id="color" value="<?= $tool['color'];?>">
                                                        <small class="form-text text-danger"><?= form_error('color'); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="flysheet">Flysheet</label>
                                                        <input type="text" name="flysheet" class="form-control" id="flysheet" value="<?= $tool['flysheet'];?>">
                                                        <small class="form-text text-danger"><?= form_error('flysheet'); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="inner_">Inner</label>
                                                        <input type="text" name="inner_" class="form-control" id="inner_" value="<?= $tool['inner_'];?>">
                                                        <small class="form-text text-danger"><?= form_error('inner_'); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="floor">Floor</label>
                                                        <input type="text" name="floor" class="form-control" id="floor" value="<?= $tool['floor'];?>">
                                                        <small class="form-text text-danger"><?= form_error('floor'); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="poles">Poles</label>
                                                        <input type="text" name="poles" class="form-control" id="poles" value="<?= $tool['poles'];?>">
                                                        <small class="form-text text-danger"><?= form_error('poles'); ?></small>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="size">Dimensi</label>
                                                        <input type="text" name="size" class="form-control" id="size" value="<?= $tool['size'];?>">
                                                        <small class="form-text text-danger"><?= form_error('size'); ?></small>
                                                    </div>
                                                    </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label for="weight">Berat</label>
                                                        <input type="number" name="weight" class="form-control" id="weight" value="<?= $tool['weight'];?>">
                                                        <small class="form-text text-danger"><?= form_error('weight'); ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <label for="biaya">Biaya Sewa</label>
                                                    <input type="text" name="biaya" class="form-control" id="biaya" value="<?= $tool['biaya'];?>">
                                                    <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
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