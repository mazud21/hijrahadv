<div class="card p-3">
    <div class="card-header bg-primary text-white font-weight-bold">Recent Post</div>
    
    <div class="card mb-5">
        <div class="card-body">
            <?php foreach ($blog as $blg) : ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col">
                            <img src="<?= base_url("images/".$blg['gambar']); ?>" alt="" width="100%">
                        </div>
                        <div class="col">
                            <a href="<?= base_url(); ?>client/blog/detail/<?= $blg['id_blog']; ?>">
                                <p class="card-title font-weight-bold mt-3 text-capitalize"><?= substr($blg['judul'],0,20); ?></p>
                            </a>
                                <p class="card-subtitle"><?= $blg['tanggal_update']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="card-header bg-primary text-white">dsdsdsdsd</div>
    <div class="card mb-5">
        <div class="card-body">
            <img src="https://images.unsplash.com/photo-1502759683299-cdcd6974244f?auto=format&fit=crop&w=440&h=220&q=60" alt="" width="100%">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>