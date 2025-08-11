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
            <h1 class="text-white">Intake Calender</h1>
          </div>
        </div>
      </div>
      <div class="breadcrumb-row">
        <div class="container">
          <ul class="list-inline">
            <li><a href="index.php">Home</a></li>
            <li>Intake Calender</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="page-content">
    <!-- Page Content Box ==== -->
    <div class="content-block">
        <!-- Intake Calendar-->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4">
                        <div class="themeum-scholarship-offer-wrapper bg-danger" onmouseover="this.style.backgroundColor='red'; this.style.color='white';" onmouseout="this.style.backgroundColor='#ffc107'; this.style.color='black';">
                            <div class="scholarship-offer-content-area">
                                <h3 class="scholarship-offer-title text-white h4 my-3">Jan-Feb Intake</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="themeum-scholarship-offer-wrapper bg-danger" onmouseover="this.style.backgroundColor='red'; this.style.color='white';" onmouseout="this.style.backgroundColor='#17a2b8'; this.style.color='black';">
                            <div class="scholarship-offer-content-area">
                                <h3 class="scholarship-offer-title text-white h4 my-3">Sept-Oct Intake</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Intake Calendar -->
        </div>
        <!-- Page Content Box END ==== -->
    </div>
</div>



  </div>


  <?php include './footer.php'?>
</body>
</html>