<?php
require 'include/header.php';
?>

<body data-col="2-columns" class=" 2-columns ">
  <div class="layer"></div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <?php include('main.php'); ?>
    <!-- Navbar (Header) Ends-->

    <div class="main-panel">
      <div class="main-content">
        <div class="content-wrapper">
          <!--Statistics cards Starts-->

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">Dashboard</h4>

                </div>
                <div class="card-body" style="padding:10px;">
                  <div class="row" matchheight="card">

                    <div class="col-xl-6 col-lg-6 col-12">
                      <div class="card">
                        <a href="productlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 success"><?php echo $con->query("select * from product")->num_rows; ?></h3>
                                  <span>Total Products</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-basket-loaded success font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12">
                      <div class="card">
                        <a href="order.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 danger"><?php echo $con->query("select * from orders where status='pending'")->num_rows; ?></h3>
                                  <span>Pending Orders</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-handbag danger font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12">
                      <div class="card">
                        <a href="order.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 warning"><?php echo $con->query("select * from orders where status='cancelled'")->num_rows; ?></h3>
                                  <span>Cancelled Orders</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-handbag warning font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12">
                      <div class="card">
                        <a href="riderlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 primary"><?php echo $con->query("select * from rider")->num_rows; ?></h3>
                                  <span>Total Delivery Boy</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="fa fa-motorcycle primary font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

            </div>
          </div>
          <style>
            .col-xl-6.col-lg-6.col-12>.card {
              background: aliceblue;
            }
          </style>
          <?php
          require 'include/js.php';
          ?>

</body>

</html>