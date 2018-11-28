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
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">

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
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item active">
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
              <a href="index">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Klasifikasi</li>
          </ol>

          <!-- Card Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Klasifikasi Genre Film</div>
            <div class="card-body">
              <div class="form-group">
                <label for="ringkasan_sinopsis">Ringkasan Sinopsis :</label>
                <textarea class="form-control" rows="5" id="ringkasan_sinopsis" placeholder="Masukkan Ringkasan Sinopsis"></textarea>
                <input class="form-group" type="hidden" name="categoryPredict" id="category_predict" /> 
                <br/>
                <input type="submit" id="submit_text" class="btn btn-info" value="Masukkan">
              </div>
            </div>
            <div class="card-footer small text-muted">Genre Film - Ringkasan Sinopsis</div>
          </div>

          <!-- Card Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Kategori Genre Film</div>
            <div class="card-body">
              <div class="form-group">
                <label for="ringkasan_sinopsis">Hasil Genre Film :</label>
                <label for="genre_film" class="genreFilm" id="predictResult"></label>
              </div>
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
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="/js/demo/datatables-demo.js"></script>
    <script src="/js/demo/chart-area-demo.js"></script>
  
    <script src="https:/code.jquery.com/jquery-1.8.0.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit_text').click(function(){
                    $('#predictResult').empty();
                    var text=$('#ringkasan_sinopsis').val();
                    
                    $.ajax({
                    type: "POST",
                    url:"https:/classification-imdb-indonesia.herokuapp.com/input/task",
                    data:'{"ringkasanSinopsis":"'+text+'"}',
                    contentType: 'application/json; charset=utf-8',
                    dataType: "json",
                    success:function(data){
                        console.log(data);
                        var dataTemp=data['message'];
                        $('#predictResult').append(dataTemp);
                        $('#category_predict').val(dataTemp);
                    }
                });
            });
        });
    </script>
  </body>

</html>
