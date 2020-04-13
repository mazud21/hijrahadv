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
            
                <div class="container">
                    
                        <div class="col-md-12">
                            <h1>About Us</h1>
                        </div>
                    
                </div>
            
        </div>
        <!-- End Header Section -->
        
        
        <!-- Start About Us Section -->
    <section id="about-section" class="about-section">
        <div class="container">
            <div class="row">
               <div class="col-md-5">
                   <div class="about-img">
                       <img src="asset/images/corporate1.jpg" class="img-responsive" alt="About images">
                       <div class="head-text">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis.</p>
                           <span>CEO, Themebean</span>
                       </div>
                   </div>
               </div>
               <div class="col-md-7">
                   <div class="about-text">
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                   </div>
                   
                   <div class="about-list">
                       <h4>Some important Feature</h4>
                       <ul>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing adipiscing.</li>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                       </ul>
                       
                       <h4>More Feature</h4>
                       <ul>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing adipiscing.</li>
                           <li><i class="fa fa-check-square"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan.</li>
                           <li><i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                       </ul>
                   </div>
                   
               </div>
                
                
                
            </div>
        </div>
    </section>        
        <!-- Start Call to Action Section -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow zoomIn" data-wow-duration="2s" data-wow-delay="300ms">
                    <p>Awesome Aires Template is ready for <br> Business, Agency, Landing or Creative Portfolio<br>Aires is Responsive and help you to grow your business</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call to Action Section -->
        
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