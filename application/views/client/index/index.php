<!DOCTYPE html>
<html lang="en">

<!-- START HEAD -->
<head>
    <?php $this->load->view("client/templates/head.php") ?>
</head>
<!-- END HEAD -->

<body>

  <!--START NAVIGATION -->
  <?php $this->load->view("client/templates/navigation.php") ?>
  <!--END NAVIGATION -->

  <!-- START PAGE HEADER -->
  <?php $this->load->view("client/templates/header.php") ?>
  <!-- END PAGE HEADER -->

  <!-- START MAIN CONTENT -->
  <div class="container">
    
          <a href="post.html">
            <h2 class="post-title">
              Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019</p>
        
        <hr>

        <!-- BUTTON PAGER -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
        <!-- BUTTON PAGER -->
      
  </div>
<!-- END MAIN CONTENT -->

  <!-- START FOOTER -->
  <?php $this->load->view("client/templates/footer.php") ?>
  <!-- END FOOTER -->

  <!--START BS CORE JS-->
  <?php $this->load->view("client/templates/js.php") ?>
  <!--END BS CORE JS-->

</body>

</html>
