
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

<div id="tambah_modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white font-weight-bold">
                Form Tambah Data Matras
            </div>
                <div class="modal-body">
                    <!-- CONTENT -->
                    <div class="container">
                        <div style="color: red;"><i><?php echo (isset($message))? $message : ""; ?></i></div>
                            
                            <div class="row mt-3">
                                <div class="card">
                                    <div class="card-body">
                                        <?php echo form_open("server/tools/matras/tambah", array('enctype'=>'multipart/form-data')); ?>
                                        <form action="" method="post">
                                        
                                            <div class="col-sm centered">
                                                <div class="form-group">                            
                                                    <label for="gambar">Gambar</label>
                                                    <img class="rounded mx-auto d-block" id='gambar' name='gambar' src="https://img.icons8.com/material/96/000000/image.png" width="300"/>
                                                    <input type="file" name="gambar" class="form-control-file" id="gambar" onchange='readURL(event)'>
                                                    <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                                                </div>
                                            </div>

                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="nama">Nama Matras</label>
                                                    <input type="text" name="nama" class="form-control" id="nama" value="coba">
                                                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="merk">Brand</label>
                                                    <input type="text" name="merk" class="form-control" id="merk" value="coba">
                                                    <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="ket">Keterangan</label>
                                                    <textarea name="ket" id="ket" cols="30" rows="10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
                                                    <small class="form-text text-danger"><?= form_error('ket'); ?></small>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="jenis">Jenis</label>
                                                    <select name="id_jenis" id="id_jenis" class="form-control" readonly disable>
                                                        <option value="4">Matras</option>
                                                    </select>
                                                    <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="color">Color</label>
                                                    <input type="text" name="color" class="form-control" id="color" placeholder="-" value="coba">
                                                    <small class="form-text text-danger"><?= form_error('color'); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="outer_">Bahan</label>
                                                    <input type="text" name="outer_" class="form-control" id="outer_" placeholder="-" value="coba">
                                                    <small class="form-text text-danger"><?= form_error('outer_'); ?></small>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="stock_">Stock</label>
                                                    <input type="number" min="1" name="stock_" class="form-control" id="stock_" placeholder="-" value="1">
                                                    <small class="form-text text-danger"><?= form_error('stock_'); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label for="biaya">Biaya Sewa</label>
                                                <input type="text" name="biaya" class="form-control" id="biaya" value="300">
                                                <small class="form-text text-danger"><?= form_error('biaya'); ?></small>
                                            </div>
                                        
                                        <input type="submit" id="tambah" name="tambah" class="btn btn-primary float-right" value='Tambah Data'></button>
                                        </form>
                                        <?php echo form_close(); ?>            
                                    </div>
                                </div>
                    </div>
                    <!-- CONTENT END -->
                </div>
            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>