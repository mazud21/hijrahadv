<!DOCTYPE html>
<html lang="en">

<!-- START HEAD -->
<head>
    <?php $this->load->view("jogja/templates/head.php") ?>
</head>
<!-- END HEAD -->

<body>

  <!--START NAVIGATION -->
  <?php $this->load->view("jogja/templates/navigation.php") ?>
  <!--END NAVIGATION -->

  <!-- START PAGE HEADER -->
  
  <!-- END PAGE HEADER -->

  <!-- START MAIN CONTENT -->
  
  <div class="container-fluid mt-5 centered">
    <div class="card-deck mt-5">
      <?php foreach ($adv as $a) : ?>
        <div class="col-xs-1-10 m-3">
          <div class="card" style="width: 35rem;">
            <img class="card-img-top" src="https://wallpaperplay.com/walls/full/7/8/1/237062.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $a['judul']; ?></h5>
              </a>
              <p class="card-text"><?= $a['price']; ?></p>
              <p class="card-text"><small class="text-muted"><?= $a['destinasi']; ?></small></p>
            </div>
          </div>
        </div>
      <?php endforeach;?>
    </div>
  </div>

  <!-- END MAIN CONTENT -->

  <!-- START FOOTER -->
  <?php $this->load->view("jogja/templates/footer.php") ?>
  <!-- END FOOTER -->

  <!--START BS CORE JS-->
  <?php $this->load->view("jogja/templates/js.php") ?>
  <!--END BS CORE JS-->

</body>

</html>
