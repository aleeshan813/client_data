<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NOSCE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/apple-touch-icon-2.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="view_table.php">
          <i class="bi bi-menu-button-wide"></i><span>Client Details</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="add_client.html">
          <i class="bi bi-person"></i>
          <span>Add New Client Details</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Client Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Client Details</li> 
        </ol>
      </nav>
      <div class="p-2">
            
        <div class="p-1" role="group" aria-label="Basic example">
          <a href="view_table.php"><button class="btn btn-secondary w-30 p-2" type="submit">Client Details</button></a>
        </div>

      </div>

    </div><!-- End Page Title -->
    
    <section class="section">

      <div class="row">
        <div class="col-lg-6">
          <div>
            <div>
               <!-- Client Drtails Table -->

              <form action="selected_client_data.php" method="post">
                  <table class="table table-bordered text-center" style="background-color: white;">

                    <thead>
                      <tr class="text-center tr-client">
                        <th scope="col">#</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Client Project</th>
                        <th scope="col">About Project</th>
                        <th scope="col">Project Theam</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Domain Name</th>
                        <th scope="col">Domain Expiry</th>
                        <th scope="col">
                            <button class="btn btn-success" type="submit"><a href="select_All_client_data.php" style="color:white;">Select All</a></button>
                        </th>
                      </tr>
                    </thead>

                    <tbody>

                        <?php
                          include('action/config.php');
                      
                          $obj = new config();//object creation
                      
                          $conn = $obj->db_connection();
                          if($conn == false)
                          {
                              die("Sorry,there is an error");
                          }
                      
                          $obj->db_select_client_details();
                          $res = $obj->db_execute();
                          while($row = mysqli_fetch_array($res))
                          {
                      ?>

                        <tr>
                          <th scope="row"><?php echo $row[0] ?></th>
                          <td><?php echo $row[1] ?></td>
                          <td><?php echo $row[2] ?></td>
                          <td><?php echo $row[3] ?></td>
                          <td><?php echo $row[4] ?></td>
                          <td><?php echo $row[5] ?></td>
                          <td><?php echo $row[6] ?></td>
                          <td><?php echo $row[7] ?></td>
                          <td><?php echo $row[8] ?></td>
                          <td >
                            <div class=" form-check p">
                                <input class="form-check-input bg-danger" name="view_data[]" type="checkbox" value="<?php echo $row[0] ?>" id="flexCheckDefault" checked>
                            </div>
                          </td>
                        </tr>

                        <?php
                        }
                        ?>
                          <tr>
                            <td colspan="9"></td>
                            <td>
                                <div class="d-grid gap-5 d-md-flex justify-content-md-end">
                                   <button class="btn btn-primary" name="view_data_btn" type="submit">View</button>
                                </div>
                            </td>
                          </tr>

                    </tbody>

                  </table>

              </form>
              
              <!-- End Client Details Table -->
            </div>
          </div>
        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer-view-table">
    <div class="copyright">
      &copy; Copyright <strong><span>NOSCE</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="http://noscetech.in/">NOSCE</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>