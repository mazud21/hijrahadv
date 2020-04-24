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
    <div class="row m-3">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <?php foreach ($blog as $blg) : ?>
              <div class="post-preview">
                <img class="img-fluid mb-3" src="<?= base_url("images/".$blg['gambar']); ?>" alt="" width="100%">
                <a href="<?= base_url(); ?>client/blog/detail/<?= $blg['id_blog']; ?>">
                  <h2 class="post-title mt-3 mb-3 text-capitalize">
                    <?= $blg['judul']; ?>
                  </h2>
                </a>
                    <style>
                        h3.post-subtitle.post{
                            text-transform: lowercase;
                            font-weight : normal;
                            font-family: Arial, Helvetica, sans-serif;
                            font-size:20px;
                        }
                    </style>
                    <h3 class="post-subtitle post">
                            <?= substr($blg['isi'],0,299); ?>...
                    </h3>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on <?= $blg['tanggal_create']; ?> updated on <?= $blg['tanggal_update']; ?></p>
              </div>
                <hr>
            <?php endforeach;?>
            <!-- Pager -->
            <div class="clearfix">
              <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
      <!-- START SIDEBAR -->
        <?php $this->load->view("client/templates/sidebar_blog.php") ?>
      <!-- END SIDEBAR -->
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
