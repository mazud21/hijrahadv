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

    <div class="card-header bg-primary text-white">Category</div>
    <div class="card mb-5">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-angle-right"></i> Home</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="fas fa-angle-right"></i> Profile</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fas fa-angle-right"></i> Messages</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="fas fa-angle-right"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>