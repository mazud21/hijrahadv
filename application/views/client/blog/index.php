<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

    <head>
    <?php $this->load->view("client/templates/head.php") ?>
    </head>

    <body>
    
    <?php $this->load->view("client/templates/header.php") ?>
                
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        <!-- Start Blog Page Section -->
        <div class="container">
            <div class="row">
                
                    
                    
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    
                    <!-- Start Blog post -->
                    
                    <div class="card">

                    <?php foreach ($blog as $blg) : ?>                        
                        <div class="blog-post">
                            <div class="post-img">
                                <img src="<?= base_url("images/".$blg['gambar']); ?>" class="img-responsive" alt="Blog image">
                            </div>
                            <h1 class="post-title"><a href="#"><?= $blg['judul']; ?></a></h1>
                            
                            <ul class="post-meta">
                                <li><i class="fa fa-clock-o"></i><?= $blg['tanggal_create']; ?></li>
                                <li><i class="fa fa-user"></i><a href="#">Super User</a></li>
                                <li><i class="fa fa-file"></i><a href="#">Blog</a></li>
                                <li><i class="fa fa-tags"></i><a href="#">Women Rights</a></li>
                                <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                            </ul>
                            
                            <p class="post-content"><?= substr($blg['isi'],0,299); ?>...</p>
                            <a href="<?= base_url(); ?>client/blog/detail/<?= $blg['id_blog']; ?>" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                    <!-- End Blog Post -->
                
                    <!-- Start Pagination -->
                    <nav>
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Start">Start</a></li>
                            <li class="disabled"><a href="#" aria-label="Previous">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">Next</a></li>
                            <li><a href="#">End</a></li>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                    
                </div>
                <!-- End Blog Body Section -->
                
                <!-- Start Sidebar Section -->
                <?php $this->load->view("client/templates/sidebar_blog.php") ?>
                <!-- End Sidebar Section -->
                
            </div>
        </div>
        <!-- End Blog Page Section -->
        
        <!-- Start Footer Section -->
        <?php $this->load->view("client/templates/footer.php") ?>
        <!-- End Footer Section -->
        
         <!-- Start Copyright Section -->
         <?php $this->load->view("client/templates/copyright.php") ?>
        <!-- End Copyright Section -->
        
        <!-- Sulfur JS File -->
        <?php $this->load->view("client/templates/js.php") ?>
 
    </body>
</html>