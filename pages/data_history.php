<?php
session_start();
	if(@$_SESSION['level'] == "admin"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Widgets</title>

    <!-- bootstrap -->
    
    <script src="../plugins/jquery/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <!-- Preloader -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link logout_now"  href="../logout.php" >
                    Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="../dashboard.php" class="nav-link ">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_user.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_spp.php" class="nav-link">
                            <i class="nav-icon fas fa-comments-dollar"></i>
                            <p>
                                Spp
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_kelas.php" class="nav-link">
                            <i class="nav-icon fas fa-school"></i>
                            <p>
                                Kelas
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_siswa.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_transaksi.php" class="nav-link ">
                            <i class="nav-icon fa-solid fa-money-bill"></i>
                            <p>
                                Transaksi
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_history.php" class="nav-link active">
                            <i class="nav-icon fa-solid fa-clock-rotate-left"></i>
                            <p>
                                History Transaksi
                            </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard v2</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
                
            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h3 class="">Generate Laporan</h3>
                        <button onclick="window.location='data_history.php'" class="btn btn-primary mb-2">Reset</button>
                        <form action="cetak.php" method="post">
                            <select name="tahun" id="tahun">
                                <option value="">Pilih Tahun</option>
                                <option value="all">All</option>
                                <?php 
                                    for ($t=2000; $t<date('Y')+3; $t++){
                                ?>
                                    <option value="<?= $t ?>"><?= $t ?></option>
                                <?php } ?>
                            </select>
                            <div id="generate-laporan">
                                
                            </div>
                        </form>
                        <script type="text/javascript">
                            $('#tahun').change(function() { 
                                var tahun = $(this).val();
                                $.ajax({
                                    type: 'POST', 
                                    url: 'ajax_data.php?page=laporan', 
                                    data: 'tahun=' + tahun, 
                                    success: function(response) { 
                                            $('#generate-laporan').html(response);
                                        
                                    }
                                });
                            });
                    
                        </script>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include '../koneksi.php';
                                    $no = 1;
                                    $query = $conn->query("select * from pembayaran inner join petugas ON petugas.id_petugas=pembayaran.id_petugas inner join siswa ON siswa.nisn = pembayaran.nisn inner join kelas ON kelas.id_kelas = siswa.id_kelas inner join spp ON spp.id_spp = pembayaran.id_spp");
                                    while($data = $query->fetch_array()){ 
                                ?>
                                    <tr>
                                        <td>
                                            <a  data-toggle="modal" data-target="#modal-<?= $data['id_pembayaran']?>"  style="width:30px;cursor: pointer;">
                                                <?= $no++ ?>  
                                            </a>  
                                        </td>
                                        <td>
                                            <a  data-toggle="modal" data-target="#modal-<?= $data['id_pembayaran']?>"  style="width:30px;cursor: pointer;">
                                            <?= $data['nisn']?>
                                            </a>
                                        </td>
                                        <td>
                                            <a  data-toggle="modal" data-target="#modal-<?= $data['id_pembayaran']?>"  style="width:30px;cursor: pointer;">
                                                <?= $data['nama']?>
                                            </a>
                                        </td>
                                        <td>
                                            <a  data-toggle="modal" data-target="#modal-<?= $data['id_pembayaran']?>"  style="width:30px;cursor: pointer;">
                                                <?= $data['nama_kelas']?>
                                            </a>
                                            <div class="modal fade" id="modal-<?= $data['id_pembayaran']?>">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Details Data Transaksi</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="" method="post">
                                                                <div class="modal-body p-0">
                                                                    <table class="table table-bordered table-striped">
                                                                        <thead>
                                                                            <th>Nisn</th>
                                                                            <th>Nama</th>
                                                                            <th>Kelas</th>
                                                                            <th>Nominal Pembayaran</th>
                                                                            <th>Bulan Dibayar</th>
                                                                            <th>Tahun Dibayar</th>
                                                                            <th>Petugas</th>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                                $get = $conn->query("select pembayaran.nisn,siswa.nama,kelas.nama_kelas,spp.nominal, petugas.nama_petugas, siswa.id_kelas, pembayaran.id_spp,pembayaran.bulan_dibayar,pembayaran.tahun_dibayar,pembayaran.id_petugas from pembayaran inner join siswa on siswa.nisn=pembayaran.nisn inner join kelas on kelas.id_kelas=siswa.id_kelas inner join spp on spp.id_spp=pembayaran.id_spp inner join petugas on petugas.id_petugas=pembayaran.id_petugas order by tgl_bayar desc");
                                                                                while($data = $get->fetch_array()){ 
                                                                            ?>
                                                                                <tr>
                                                                                    <td><?= $data['nisn'] ?></td>
                                                                                    <td><?= $data['nama'] ?></td>
                                                                                    <td><?= $data['nominal'] ?></td>
                                                                                    <td><?= $data['nama_kelas'] ?></td>
                                                                                    <td><?= $data['bulan_dibayar'] ?></td>
                                                                                    <td><?= $data['tahun_dibayar'] ?></td>
                                                                                    <td><?= $data['nama_petugas'] ?></td>
                                                                                </tr>
                                                                            <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            <div class="modal-footer ">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <!-- modal add user -->
                    <?php
                    if(isset($_POST['add'])){
                        @$id_petugas = $_SESSION['id_petugas'];
                        @$nisn = $_POST['nisn'];
                        @$tgl_bayar = date('Y-m-d');
                        @$bulan_dibayar = $_POST['bulan_dibayar'];
                        @$tahun_dibayar = $_POST['tahun_dibayar'];
                        @$id_spp = $_POST['id_spp'];
                        @$jumlah_bayar = $_POST['jumlah_bayar'];
                        $c_pembayaran = $conn->query("select * from pembayaran where nisn='$nisn' and bulan_dibayar='$bulan_dibayar' and tahun_dibayar='$tahun_dibayar'")->num_rows;
                        if($c_pembayaran < 1){
                            $query2 = $conn->query("insert into pembayaran set id_petugas='$id_petugas', nisn='$nisn', tgl_bayar='$tgl_bayar', bulan_dibayar='$bulan_dibayar', tahun_dibayar='$tahun_dibayar', id_spp='$id_spp', jumlah_bayar='$jumlah_bayar'");
                            if($query2){
                                echo "
                                <script language = javascript>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Data Berhasil Ditambahkan',  
                                        showCancelButton: false,
                                        confirmButtonText: 'Ok',
                                    }).then((result) =>{
                                        window.location.href='data_transaksi.php';
                                    });
                                </script>
                            ";
                            }
                        }else{
                            echo "
                                <script language = javascript>
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Pembayaran Sudah Pernah Dilakukan',  
                                        showCancelButton: false,
                                        confirmButtonText: 'Ok',
                                    }).then((result) =>{
                                        window.location.href='data_transaksi.php';
                                    });
                                </script>
                             ";
                        }
                        
                    }
                    ?>
                    <div class="modal P-0 overflow-auto" id="add-data-transaksi" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="">
                        <div class="modal-dialog">
                            <div class="modal-content" style="width:1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Data Transaksi</h5>
                                    <button type="button" class="btn-close btn-close-white" onclick="document.getElementById('add-data-transaksi').style.display='none'"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">NISN</label>
                                            <input list="nisn_list" id="nisn" class="form-control" name="nisn"  require>
                                                <datalist id="nisn_list">
                                                    <?php
                                                    $q_nisn = $conn->query('select nisn from siswa');
                                                    while ($nisn = $q_nisn->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $nisn['nisn'];?>">
                                                    <?php
                                                    }
                                                    ?>
                                                </datalist>
                                        </div>
                                        <div id="details-pembayaran">

                                        </div>
                                        <script type="text/javascript">
                                            $('#nisn').change(function() { 
                                            var nisn = $(this).val(); 
                                            $.ajax({
                                                type: 'POST', 
                                                url: 'ajax_data.php?page=nisn', 
                                                data: 'nisn=' + nisn, 
                                                success: function(response) { 
                                                    console.log(response);
                                                $('#details-pembayaran').html(response); 
                                                }
                                            });
                                            });
                                        
                                        </script>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('add-data-transaksi').style.display='none'">Close</button>
                                        <button type="submit" class="btn btn-primary" name="add">Add Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /modal add user -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <script src="../logout.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../dist/js/adminlte.min.js"></script>
    <script>
        $('.delete_data').on('click',function(){
            var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
    </script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>
<?php
	}else{
		echo "
			<script>
				alert('anda tidak memiliki akses ke halam ini');
				window.location.href='../login.php';
			</script>
		";
	}
?>