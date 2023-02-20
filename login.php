<?php
    include 'koneksi.php';
    session_start();
    @$username = $_POST['username'];
    @$password = $_POST['password'];
    if(isset($_POST['submit'])){
        $query = $conn->query("select * from petugas where username='$username' and password='$password'");
        $data = $query->fetch_array();
        if(isset($data['username']) and isset($data['password'])){
            $_SESSION['id_petugas'] = $data['id_petugas'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            header("location: dashboard.php");
        }else{
            echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Aplikasi Spp</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
        </style>
    </head>
  <body>
    <section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="draw2.svg"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form method="post" action="">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example13">Username</label>
                <input type="text"class="form-control form-control-lg" name="username" />
                
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example23">Password</label>
                <input type="password" id="form1Example23" class="form-control form-control-lg" name="password"/>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Sign in</button>
            </form>
        </div>
        </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>