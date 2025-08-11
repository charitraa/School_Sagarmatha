<!DOCTYPE html>
<html lang="en">
<?php include "./head.php"?>

<body id="bg">
  <div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <?php include "./navbar.php"?>
    <!-- header END ==== -->
    <!-- Inner Content Box ==== -->
    <div class="page-content bg-white">
      <!-- Page Heading Box ==== -->
      <div
        class="page-banner ovbl-dark"
        style="background-image: url(assets/images/slider/slide01.jpg)"
      >
        <div class="container">
          <div class="page-banner-entry">
            <h1 class="text-white">ACADEMIC PARTNERSHIP LETTER</h1>
          </div>
        </div>
      </div>
      <div class="breadcrumb-row">
        <div class="container">
          <ul class="list-inline">
            <li><a href="index.php">Home</a></li>
            <li><a href="approval-letters.php">Approval letter</a></li>
            <li>Academic Partnership letter</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
        
  <div class="container">
                <div class="heading-bx left">
                  <h2 class="title-head mt-3">Academic Partnership letter <span class="text-primary"></h2>
                </div>
                <div class="content-block">
    <div class="video-bx">
    <img src="assets\images\referral-letters\Academic-Partnership-letter.png" alt="" class="centered-image" />
    </div>
  </div>
  </div>
  
  
  <?php include './footer.php'?>

  <!-- Add CSS styles -->
  <style>
    .video-bx {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%; /* Ensure the container takes full height */
    }

    .centered-image {
      max-width: 100%; /* Optionally set maximum width */
      max-height: 100%; /* Optionally set maximum height */
      display: block; /* Ensures proper alignment */
      margin: auto; /* Centers the image horizontally */
    }
  </style>
</body>
</html>
