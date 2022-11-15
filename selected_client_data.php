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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/apple-touch-icon-2.png" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-2">

                <div class="p-1">
                  <a href="view_table.php"><img src="assets/img/back-icon.png" alt="back" style="width: auto; height: 20px;"></a>
                 </div>

                <div class="card-body">
                 
                  <div class="pt-2 pb-1">
                    <h5 class="card-title text-center pb-0 fs-4">Client Details</h5>
                  </div>
                
                  <div id="pdf-content">
                     <!-- Client Drtails Table -->

                    <table class="table table-bordered text-center" style="background-color: white;">

                        <thead>
                          <tr class="text-center tr-client">
                            <th scope="col">#</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Client Project</th>
                            <th scope="col">About Project</th>
                            <th scope="col">Project Theam</th>
                            <th scope="col">Domain Name</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Domain Expiry</th>
                          </tr>
                        </thead>

                        <tbody>

                        <?php
                            include('action/config.php');

                            $obj = new config();//object creation

                            $conn = $obj->db_connection();

                              if(isset($_POST['view_data_btn']))

                              $view_data = $_POST['view_data'];
                              $view_data_im = implode(',' , $view_data);
                              $extract_data = explode(',' , $view_data_im);

                                  $count = count($extract_data);

                              for($i=0; $i<$count; $i++)
                              
                              {
                                $obj->db_selected_client_data($extract_data[$i]);
                                $res = $obj->db_execute();
                            
                        ?>
                                <?php
                                  while($row = mysqli_fetch_array($res))
                                  {
                                  ?>
                                    <tr>
                                      <th scope="row"><?php echo $row[0] ?></th>
                                      <td><?php echo $row[1] ?></td>
                                      <td><?php echo $row[2] ?></td>
                                      <td><?php echo $row[3] ?></td>
                                      <td><?php echo $row[4] ?></td>
                                      <td><?php echo $row[7] ?></td>
                                      <td><?php echo $row[5] ?></td>
                                      <td><?php echo $row[6] ?></td>
                                      <td><?php echo $row[8] ?></td>
                                    </tr>

                                <?php       
                                  }
                              }
                                  ?>

                        </tbody>

                    </table>
  
                    <!-- End Client Details Table -->
                  </div>
                      <div class="text-center">
                        <button class="btn btn-secondary" id="btn-generate">Create PDF</button></a> 
                      </div>
                </div>
              </div>

              <div class="credits">
                Designed by <a href="http://noscetech.in/">NOSCE</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- create PDF JS code -->
  <script>
    var buttonElement = document.querySelector("#btn-generate");
    buttonElement.addEventListener('click', function() {
      var pdfContent = document.getElementById("pdf-content").innerHTML;
      var windowObject = window.open();

      windowObject.document.write(pdfContent);

      windowObject.print();
      windowObject.close();
    });
  </script>
<!-- /create PDF JS code -->

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