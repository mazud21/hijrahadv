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
                            <h1>Blog Item</h1>
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
                        <div class="single-blog-post">
                            <div class="card">
                            <div class="post-img">
                            <img src="<?= base_url('./images/'.$blog['gambar'])?>" class="img-responsive" alt="Blog image">
                            </div>
                            <h1 class="post-title"><a href="#"><?= $blog['judul']; ?></a></h1>
                            
                            <div class="post-meta">
                                <ul class=" pull-left">
                                    <li><i class="fa fa-clock-o"></i><?= $blog['tanggal_create']; ?></li>
                                    <li><i class="fa fa-user"></i><a href="#">Super User</a></li>
                                    <li><i class="fa fa-file"></i><a href="#">Blog</a></li>
                                    <li><i class="fa fa-tags"></i><a href="#">Women Rights</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                                <ul class="pull-right">
                                    <li>font-size<i class="fa fa-minus-circle"></i><i class="fa fa-plus-circle"></i></li>
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Email</a></li>
                                </ul>
                            </div>
                            
                            
                            <p class="post-content"><?= $blog['isi']; ?></p>
                            
                            <div class="item-content-footer">
                                <ul>
                                    <li>Read 286 times</li>
                                    <li class="rating">
                                        Rate this item 
                                        <span class="active"><i class="fa fa-star-o"></i></span>
                                        <span class="active"><i class="fa fa-star-o"></i></span>
                                        <span class="active"><i class="fa fa-star-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Blog Post -->
                    
                    <!-- Start Blog Author Section -->
                    <div class="blog-author">
                        <h3>About The Author</h3>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="<?= base_url() ?>assets/images/user.png" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Super User</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Author Section -->
                    
                    <!-- Start Comments Section -->
                    <div id="comments">
                        <h2 class="comments-title">4 comments</h2>
                        <ol class="comments-list">
                            <li>
                                <div class="comment-box clearfix">
                                    <div class="avatar"><img alt="" src="<?= base_url() ?>assets/images/user-2.png"></div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <span class="comment-by">fghfghjfghj</span>
                                            <span class="reply-link pull-right"><a href="#">Comment Link</a></span>
                                        </div>
                                        <span class="comment-date">Sunday, 15 February 2015 at 20:39</span>
                                        <p>Dette er en besked</p>
                                    </div>
                                </div>
     
                                <ul>
                                    <li>
                                        <div class="comment-box clearfix">
                                            <div class="avatar"><img alt="" src="<?= base_url() ?>assets/images/user-2.png"></div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <span class="comment-by">sdfaasdfb</span>
                                                    <span class="reply-link pull-right"><a href="#">Comment Link</a></span>
                                                </div>
                                                <span class="comment-date">Sunday, 15 February 2015 20:39</span>
                                                <p>sdfadasdfawefasdf a</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
  
                            <li>
                                <div class="comment-box clearfix">
                                    <div class="avatar"><img alt="" src="<?= base_url() ?>assets/images/user-2.png"></div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <span class="comment-by">sa</span>
                                            <span class="reply-link pull-right"><a href="#">Comment Link</a></span>
                                        </div>
                                        <span class="comment-date">Tuesday, 03 February 2015 06:41</span>
                                        <p>daaass</p>
                                    </div>
                                </div>
                                
                                <ul>
                                    <li>
                                        <div class="comment-box clearfix">
                                            <div class="avatar"><img alt="" src="<?= base_url() ?>assets/images/user-2.png"></div>
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <span class="comment-by">xc zc</span>
                                                    <span class="reply-link pull-right"><a href="#">Comment Link</a></span>
                                                </div>
                                                <span class="comment-date">Wednesday, 10 December 2014 11:42</span>
                                                <p>fsfsfs</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
 
                        </ol>
                        
                        <!-- Start Respond Form -->
                        <div id="respond">
                            <h2 class="respond-title">Leave a comment</h2>
                            <span class="form-caution">Make sure you enter the (*) required information where indicated. HTML code is not allowed.</span>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="author">Name<span class="required">*</span></label>
                                        <input id="author" name="author" type="text" size="30" aria-required="true">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email">Email<span class="required">*</span></label>
                                        <input id="email" name="author" type="text" size="30" aria-required="true">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="url">Website<span class="required">*</span></label>
                                        <input id="url" name="url" type="text" size="30" aria-required="true">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="comment">Add Your Comment</label>
                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                        <input name="submit" type="submit" id="submit" class="btn btn-primary" value="Submit Comment">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End Respond Form -->

                    </div>
                    <!-- End Comments Section -->
                    
                </div>
                <!-- End Blog Body Section -->
                
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
                        
                        <?php foreach ($blg as $b) : ?>
                        <div class="media">
                            <div class="media-left">
                                <a href="<?= base_url(); ?>client/blog/detail/<?= $b['id_blog']; ?>">
                                    <img class="media-object" src="<?= base_url("images/".$b['gambar']); ?>">
                                </a>
                            </div>
                            
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?= $b['judul']; ?></a></h4>
                                <ul>
                                    <li><a href="#">Super User</a></li>
                                    <li><?= $b['tanggal_create']; ?></li>
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