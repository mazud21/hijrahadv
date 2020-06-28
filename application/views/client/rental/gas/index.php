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

    <div class="row row-eq-height">
    <?php foreach ($tools as $tool) : ?>
      <div class="col-xs-1-12 m-3">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="<?= base_url("images/".$tool['gambar']); ?>" alt="">
          <div class="card-body">
            <h3 class="card-title"><?= $tool['nama']; ?></h3>
            <p class="card-text">Text</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    
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
