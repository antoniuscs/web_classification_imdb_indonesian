<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script language='JavaScript'>
        var txt="Pengolahan Bahasa Alami ";
        var speed=300;
        var refresh=null;
        function action() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("action()",speed);}action();
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon/favicon.ico">

    <!-- Bootstrap core CSS-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Klasifikasi Genre Film Berdasarkan Ringkasan Sinopsis</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Klasifikasi</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.php">
            <i class="fas fa-fw fa-child"></i>
            <span>Info Kelompok</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              Dashboard
            </li>
          </ol>

          <!-- Card Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-bookmark"></i>
              Klasifikasi Genre Film Berdasarkan Ringkasan Sinopsis</div>
            <div class="card-body">
            <h2>Abstract</h2>
            <p>Dunia perfilman saat ini sudah sangat berkembang dengan cepat, canggih, semakin banyak film yang sudah diproduksi dari berbagai macam Negara dan untuk masing-masing Negara mempunyai berbagai kriterianya sendiri-sendiri. Kemudian dari setiap Negara saat ini sudah semakin bergerak dengan cepat untuk berlomba-lomba dalam memberikan suatu produksi film yang terbaik dan mempunyai keunikannya tersendiri dalam setiap film yang akan dibuat. Kemudian dalam setiap film pasti mempunyai kriteria berdasarkan genre filmnya masing-masing dan setiap film mempunyai target penonton yang dikhususkan untuk filmnya. Dengan sudah majunya dunia perfilman saat ini, maka dengan adanya bantuan dari deskripsi sinopsis 
            film yang ada maka dibuatlah suatu klasifikasi dari suatu genre film tersebut.</p>
            
            <h2>Dataset Preparation</h2>
            <p>
              Dataset untuk projek ini bersumber berdasarkan website IMDB. Dimana dataset yang dipakai mengambil film berbahasa Indonesia. Pengumpulan dataset sendiri dilakukan dengan cara 
              menyortir film Indonesia berdasarkan film terpopuler dan film yang ditayangkan di Indonesia.
            </p>

            <p>
              Isi dataset lebih dari 1000 data sesuai dengan data film Indonesia yang populer
            </p>

            <h2>Model Evaluation</h2>
            <p>
              Algoritma yang digunakan klasifikasi film Indonesia ini adalah
              <ol>
                <li>Multinomial Naïve Bayes</li>
                <li>Support vector machines</li>
              </ol>
            </p>

            <p>
              Model algoritma untuk ekstrasi fiturnya yaitu
              <ol>
                <li>BOW</li>
                <li>TF-ID</li>
                <li>Advanced Words Vectorization</li>
              </ol>
            </p>

            <p>
              Hasil Akurasi, F1 Score, Precision dan Recall yang paling terbaik ditemukan dengan skor:
              <br />
              <img src="hasil.png" alt="Hasil" width="400px" height="auto">
            </p>

            <p>
              Hasil yang didapatkan menggunakan Algoritma Naïve Bayes dengan ekstrasi fitur BOW.
            </p>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Pengolahan Bahasa Alami 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="chart.js/Chart.min.js"></script>
    <script src="datatables/jquery.dataTables.js"></script>
    <script src="datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
  </body>

</html>
