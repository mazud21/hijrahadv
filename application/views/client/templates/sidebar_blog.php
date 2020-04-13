<!-- Start Sidebar Section -->
<div class="col-md-4 sidebar right-sidebar">
                    
                    
    <!-- Start Flickr Widget -->
    <div class="widget flickr-widget">
        
        <div class="section-heading-2">
            <h3 class="section-title">
                <span>Flickr Stream</span>
            </h3>
        </div>
        
        <ul class="flickr-list">
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/8.jpg" data-lightbox="picture-1">
                    <img src="<?= base_url() ?>assets/images/flickr/8.jpg" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/7.jpg" data-lightbox="picture-2">
                    <img src="<?= base_url() ?>assets/images/flickr/7.jpg" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/6.jpg" data-lightbox="picture-3">
                    <img src="<?= base_url() ?>assets/images/flickr/6.jpg" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/5.jpg" data-lightbox="picture-4">
                    <img src="as<?= base_url() ?>assets/images/flickr/5.jpg" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/4.jpg" data-lightbox="picture-5">
                    <img src="<?= base_url() ?>assets/images/flickr/4.jpg" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/3.jpg" data-lightbox="picture-6">
                    <img src="<?= base_url() ?>assets/images/flickr/3.jpg" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/2.jpg" data-lightbox="picture-7">
                    <img src="as<?= base_url() ?>assets/images/flickr/2.jpg" alt="" class="img-responsive">
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>assets/images/flickr/1.jpg" data-lightbox="picture-8">
                    <img src="<?= base_url() ?>assets/images/flickr/1.jpg" alt="" class="img-responsive">
                </a>
            </li>
        </ul>
    </div>
    <!-- End Flickr Widget -->
    
    
    <!-- Start Recent Post Widget -->
    <div class="widget widget-recent-post">
        
        <div class="section-heading-2">
            <h3 class="section-title">
                <span>Recent Post</span>
            </h3>
        </div>
        
        <?php foreach ($blog as $blg) : ?>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="<?= base_url("images/".$blg['gambar']); ?>">
                </a>
            </div>
            
            <div class="media-body">
                <h4 class="media-heading"><a href="#"><?= $blg['judul']; ?></a></h4>
                <ul>
                    <li><a href="#">Super User</a></li>
                    <li><?= $blg['tanggal_create']; ?></li>
                </ul>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <!-- End Recent Post Widget -->
    
    
    <!-- Start Blog categories widget -->
    <div class="widget widget-categories">
        
        <div class="section-heading-2">
            <h3 class="section-title">
                <span>Blog Categories</span>
            </h3>
        </div>
        
        <ul>
            <li>
                <i class="fa fa-angle-double-right"></i>
                <a href="#">Blog</a>
                <a href="#" class="cat-counter">(4)</a>
            </li>
            <li>
                <i class="fa fa-angle-double-right"></i>
                <a href="#">News</a>
                <a href="#" class="cat-counter">(0)</a>
            </li>
            <li>
                <i class="fa fa-angle-double-right"></i>
                <a href="#">Charity</a>
                <a href="#" class="cat-counter">(0)</a>
            </li>
            <li>
                <i class="fa fa-angle-double-right"></i>
                <a href="#">Fashion</a>
                <a href="#" class="cat-counter">(0)</a>
            </li>
        </ul>
        
    </div>
    <!-- End Blog categories widget -->
    
    
    <!-- Start Tag Cloud Widget -->
    <div class="widget widget-tags">
        
        <div class="section-heading-2">
            <h3 class="section-title">
                <span>Popular Tags</span>
            </h3>
        </div>
        
        <div class="tagcloud">
            <a href="#">Charity</a>
            <a href="#">Children</a>
            <a href="#">Education</a>
            <a href="#">Elderly</a>
            <a href="#">Humanity</a>
            <a href="#">Women Rights</a>
        </div>
        
    </div>
    <!-- End Tag Cloud Widget -->
    
    
    
</div>
<!-- End Sidebar Section -->