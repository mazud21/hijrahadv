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
        <div class="banner">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Welcome To The <span>Great Sulfur</span></h1>
                        <p>Generate a flood of new business with the <br> power of a digital media platform</p>
                        <a href="#feature" class="page-scroll btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        <!-- Start Footer Section -->
        <?php $this->load->view("client/templates/footer.php") ?>
        <!-- End Footer Section -->
        
        <!-- Start CCopyright Section -->
        <?php $this->load->view("client/templates/copyright.php") ?>
        <!-- End CCopyright Section -->
        
    <!-- Sulfur JS File -->
    <?php $this->load->view("client/templates/js.php") ?>    
        
    
    </body>
</html>