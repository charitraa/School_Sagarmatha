<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"?>

<body id="bg">
  <div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <?php include "./navbar.php"?>
    <div class="page-content bg-white">
      <!-- inner page banner -->
      <div class="page-banner ovbl-dark" style="background-image:url('./assets/images/slider/slide01.jpg');">
        <div class="container">
          <div class="page-banner-entry">
            <h1 class="text-white">CONTACT US</h1>
          </div>
        </div>
      </div>
      <!-- Breadcrumb row -->

      <!-- Breadcrumb row END -->

      <!-- inner page banner -->
      <div class="breadcrumb-row">
        <div class="container">
          <ul class="list-inline">
            <li><a href="index.php">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
      <div class="page-banner contact-page section-sp2">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 m-b30">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.062595026153!2d85.31443607532293!3d27.684460176195692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b5ad9b8dff%3A0x12a4b82675e789a3!2sPatan%20College%20For%20Professional%20Studies!5e0!3m2!1sen!2snp!4v1718599434319!5m2!1sen!2snp"
                width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-5 col-md-6 m-b30">
              <div class="bg-primary text-white contact-info-bx">
                <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                <p>Have a inquiry or some feedback for us? Fill out the form below to contact our team. please contact
                  us at
                  connect@patancollege.org</p>
                <div class="widget widget_getintuch">
                  <ul>
                    <li><i class="ti-location-pin"></i>Kandevtasthan, Lalitpur,Nepal</li>
                    <li><i class="ti-mobile"></i>Mobile: (+977) - 15181033 <br>
                      Mobile: (+977) - 15181198</li>
                    <li><i class="ti-email"></i>connect@patancollege.org</li>
                  </ul>
                </div>
                <h5 class="m-t0 m-b20">Follow Us</h5>
                <ul class="list-inline contact-social-bx">
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <form class="contact-bx ajax-form" action="assets/script/contact.php">
                <div class="ajax-message"></div>
                <div class="heading-bx left">
                  <h2 class="title-head">Get In <span>Touch</span></h2>
                  <p>Have a inquiry or some feedback for us? Fill out the form below to contact our team. please contact
                    us at
                    connect@patancollege.org</p>
                </div>
                <div class="row placeani">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="input-group">
                        <label>Your Name</label>
                        <input name="name" type="text" required class="form-control valid-character">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="input-group">
                        <label>Your Email Address</label>
                        <input name="email" type="email" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="input-group">
                        <label>Your Phone</label>
                        <input name="phone" type="text" required class="form-control int-value">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="input-group">
                        <label>Subject</label>
                        <input name="subject" type="text" required class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="input-group">
                        <label>Your Message</label>
                        <textarea name="message" rows="4" class="form-control" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="g-recaptcha" data-sitekey="" data-callback="verifyRecaptchaCallback"
                          data-expired-callback="expiredRecaptchaCallback">
                        </div>
                        <input class="form-control d-none" style="display:none;" data-recaptcha="true" required
                          data-error="Please complete the Captcha">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <button name="submit" type="submit" value="Submit" class="btn button-md"> Send
                      Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- inner page banner END -->
    </div>
    <!-- Content END-->
    <!-- Footer ==== -->
    <?php include './footer.php'?>
</body>

</html>