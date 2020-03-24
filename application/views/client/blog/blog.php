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
                    <div class="blog-post">
                        <div class="post-img">
                            <img src="asset/images/blog/blog-01.jpg" class="img-responsive" alt="Blog image">
                        </div>
                        <h1 class="post-title"><a href="#">Nulla facilisi integer lacinia sollicitudin massa</a></h1>
                        
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>October 25 2014</li>
							<li><i class="fa fa-user"></i><a href="#">Super User</a></li>
							<li><i class="fa fa-file"></i><a href="#">Blog</a></li>
                            <li><i class="fa fa-tags"></i><a href="#">Women Rights</a></li>
							<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
						</ul>
                        
                        <p class="post-content">Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo.</p>
                        <a href="#" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Blog Post -->
                    
                    <!-- Start Blog post -->
                    <div class="blog-post">
                        <div class="post-img">
                            <img src="asset/images/blog/blog-02.jpg" class="img-responsive" alt="Blog image">
                        </div>
                        <h1 class="post-title"><a href="#">Quisque cursus metus vitae pharetra auctor sem massa</a></h1>
                        
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>October 25 2014</li>
							<li><i class="fa fa-user"></i><a href="#">Super User</a></li>
							<li><i class="fa fa-file"></i><a href="#">Blog</a></li>
							<li><i class="fa fa-tags"></i><a href="#">Elderly</a> <a href="#">Education</a></li>
							<li><i class="fa fa-comments"></i><a href="#">1 Comments</a></li>
						</ul>
                        
                        <p class="post-content">Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper.</p>
                        <a href="#" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Blog post -->
                    
                    
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
        <?php $this->load->view("client/templates/footer.php") ?>
 
    </body>
</html>