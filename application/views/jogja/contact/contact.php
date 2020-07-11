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
  <?php $this->load->view("jogja/templates/header.php") ?>
  <!-- END PAGE HEADER -->

  <!-- START MAIN CONTENT -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
        <h3>About <span>Us</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!

        </p>

          <h3>Contact <span>Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6078510801503!2d110.38079321873124!3d-7.935959978283421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c7adda1c34ef11a!2sSewa%20Alat%20Camping%20Jogja%20%7C%20Hijrah%20Adventure!5e0!3m2!1sen!2sid!4v1587821703121!5m2!1sen!2sid" width="100%" height="270" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
              <i class="fas fa-map-marked-alt"></i>
                <h4>Location:</h4>
                <p>Kemasan, Karangtengah, Imogiri, Bantul Regency, Special Region of Yogyakarta</p>
              </div>

              <div class="email">
              <i class="fas fa-envelope"></i>
                <h4>Email:</h4>
                <p>journeysiaofficial@gmail.com</p>
              </div>

              <div class="phone">
              <i class="fas fa-phone-alt"></i>
                <h4>Call:</h4>
                <p>+62 813 3435 8243</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
                <a href="#">
                  <button class="bg-primary" type="submit" width="100%">Send Message</button></div>
                </a>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
<!-- END MAIN CONTENT -->

  <!-- START FOOTER -->
  <?php $this->load->view("jogja/templates/footer.php") ?>
  <!-- END FOOTER -->

  <!--START BS CORE JS-->
  <?php $this->load->view("jogja/templates/js.php") ?>
  <!--END BS CORE JS-->

</body>

</html>
