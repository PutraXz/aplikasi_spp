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
                            <a href="data_spp.php" class="nav-link active">
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
                            <a href="data_transaksi.php" class="nav-link">
                            <i class="nav-icon fa-solid fa-money-bill"></i>
                            <p>
                                Transaksi
                            </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="data_history.php" class="nav-link">
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
                        <button class="btn btn-primary" onclick="document.getElementById('add-data-ruang').style.display='block'">Add Data spp</button>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Nominal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include '../koneksi.php';
                                    $page = @$_GET['page'];
                                    if($page=='hapus'){
                                        $id = $_GET['id'];
                                        $del = $conn->query("delete from spp where id_spp='$id'");
                                        if($del){
                                            echo "
                                            <script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Data Berhasil Disimpan',  
                                                showCancelButton: false,
                                                confirmButtonText: 'Ok',
                                            }).then((result) =>{
                                                window.location.href='data_spp.php';
                                            });
                                            </script>
                                            ";
                                        }
                                    };
                                    $no = 1;
                                    $query = $conn->query("select * from spp");
                                    while($data = $query->fetch_array()){ 
                                ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?>
                                        </td>
                                        <td>
                                            <?= $data['tahun']?>
                                        </td>
                                        <td>
                                            <?= $data['nominal']?>
                                        </td>
                                        <td>
                                        <button type="button" class="btn btn-primary btn-sm mx-2" data-toggle="modal" data-target="#modal-<?= $data['id_spp']?>"  style="width:30px"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <a href="data_spp.php?page=hapus&id=<?= $data['id_spp']?>" class="btn btn-primary btn-sm delete_data"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <!-- modal edit user -->
                        <?php
                            @$id = $_POST['id'];   
                            @$tahun = $_POST['tahun'];
                            @$nominal = $_POST['nominal'];
                            if(isset($_POST['edit'])){
                                $edit = $conn->query("update spp set tahun='$tahun',nominal='$nominal' where id_spp='$id'");
                                if($edit){
                                    echo "
                                        <script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Data Berhasil Diubah',  
                                            showCancelButton: false,
                                            confirmButtonText: 'Ok',
                                        }).then((result) =>{
                                            window.location.href='data_spp.php';
                                        });
                                        </script>
                                    ";
                                }
                            }
                            $query = $conn->query("select * from spp");
                            while($data = $query->fetch_array()){
                        ?>
                        <div class="modal fade" id="modal-<?= $data['id_spp']?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Data spp</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="" method="post">
                                            <div class="modal-body p-0">
                                                <input type="hidden" name="id" value="<?= $data['id_spp']?>">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Tahun</label>
                                                    <input type="number" class="form-control" value="<?= $data['tahun']?>" name="tahun">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nominal</label>
                                                    <input type="number" class="form-control" value="<?= $data['nominal']?>" name="nominal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <?php } ?>
                    <!-- /modal edit user -->
                    <!-- modal add user -->
                    <?php
                    @$tahun = $_POST['tahun'];
                    @$nominal = $_POST['nominal'];
                    if(isset($_POST['add'])){
                        $query2 = $conn->query("insert into spp set tahun='$tahun',nominal='$nominal'");
                        if($query2){
                            echo "
                            <script language = javascript>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Data Berhasil Disimpan',  
                                    showCancelButton: false,
                                    confirmButtonText: 'Ok',
                                }).then((result) =>{
                                    window.location.href='data_spp.php';
                                });
                            </script>
                          ";
                        }else{
                            echo "
                            <script language = javascript>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Data Gagal Disimpan',  
                                    showCancelButton: false,
                                    confirmButtonText: 'Ok',
                                }).then((result) =>{
                                    window.location.href='data_spp.php';
                                });
                        
                            </script>
                          ";
                        }
                    }
                    ?>
                    <div class="modal P-0" id="add-data-ruang" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-backdrop="">
                        <div class="modal-dialog">
                            <div class="modal-content" style="width:1">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Add Data spp</h5>
                                    <button type="button" class="btn-close btn-close-white" onclick="document.getElementById('add-data-ruang').style.display='none'"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Tahun</label>
                                            <input type="number" class="form-control" name="tahun" require>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nominal</label>
                                            <input type="number" class="form-control" name="nominal"  require>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('add-data-ruang').style.display='none'">Close</button>
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
    <script src="../logout.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
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