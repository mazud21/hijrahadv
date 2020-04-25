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

  <!-- END PAGE HEADER -->

  <!-- START MAIN CONTENT -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 h-100" src="https://www.lefthudson.com/wp-content/uploads/2019/11/4k-mountain-wallpaper-best-of-nature-mountain-forest-landscape-fog-lake-ultrahd-4k-wallpaper-wallpaper-for-you-of-4k-mountain-wallpaper.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100" src="https://images.wallpaperscraft.com/image/mountain_peak_summit_forest_summer_lake_day_landscape_48111_1920x1080.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 h-100" src="https://www.wallpaperup.com/uploads/wallpapers/2013/04/30/80652/fd32680dc94fa95bb6604ce8b5cdbaad.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- END MAIN CONTENT -->

  <!-- START FOOTER -->
  
  <!-- END FOOTER -->

  <!--START BS CORE JS-->
  <?php $this->load->view("client/templates/js.php") ?>
  <!--END BS CORE JS-->

</body>

</html>
