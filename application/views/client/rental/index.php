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
    
  <div class="card-group">
                <div class="card text-white bg-info border border-dark m-1 text">
                    <a class="text-white" href="<?= base_url(); ?>client/rent/tenda">
                        <img class="card-img-top" src="<?= base_url(); ?>/images/admin/tenda.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h7 class="card-title">Tenda</h7>
                        </div>
                    </a>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <a class="text-white" href="<?= base_url(); ?>client/rent/carrier">
                        <img class="card-img-top" src="<?= base_url(); ?>/images/admin/carrier.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h7 class="card-title">Carrier</h7>
                        </div>
                    </a>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <a class="text-white" href="<?= base_url(); ?>client/rent/sb">
                        <img class="card-img-top" src="<?= base_url(); ?>/images/admin/sb.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h7 class="card-title">Sleeping Bag</h7>
                        </div>
                    </a>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                    <a class="text-white" href="<?= base_url(); ?>client/rent/matras">
                        <img class="card-img-top" src="<?= base_url(); ?>/images/admin/matras.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h7 class="card-title">Matras</h7>
                        </div>
                    </a>
                </div>
                </div>
                <div class="card-group">
                <div class="card text-white bg-info border border-dark m-1">
                <a class="text-white" href="<?= base_url(); ?>client/rent/kompor">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/kompor.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Kompor Portable</h7>
                    </div>
                    </a>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                <a class="text-white" href="<?= base_url(); ?>client/rent/gas">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/gas.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Tabung Gas Mini</h7>
                    </div>
                    </a>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                <a class="text-white" href="<?= base_url(); ?>client/rent/cook">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/nesting.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Nesting Cook Set</h7>
                    </div>
                    </a>
                </div>
                <div class="card text-white bg-info border border-dark m-1">
                <a class="text-white" href="<?= base_url(); ?>client/rent/lamp">
                    <img class="card-img-top" src="<?= base_url(); ?>/images/admin/lampu_kepala.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h7 class="card-title">Lampu Kepala</h7>
                    </div>
                    </a>
                </div>
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
