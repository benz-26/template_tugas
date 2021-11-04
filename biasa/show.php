<?php

if (isset($_POST['lanjot'])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $agama = $_POST["agama"];
    $jurusan = $_POST["jurusan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $hobby = $_POST["hobby"];
    $alamat = $_POST["alamat"];
    $foto = $_FILES["foto"]["name"];
    $tmp_name = $_FILES["foto"]["tmp_name"];
    move_uploaded_file($tmp_name, "images/" . $foto);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biasa Benz</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <!-- sidebar -->
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href=""><img src="assets/images/logo/oni.png" alt="Logo" srcset="" style="height: auto; width:260px"></a>
                        </div>
                        <div class="toggler">
                            <a href="" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Home</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <!-- akhir sidebar -->

            <!-- main content -->
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pribadi</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            </nav>
                        </div>
                    </div>
                </div>
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">TAMPILAN DATA MAHASISWA</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="show.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Foto :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <img src="images/<?php print_r ($foto) ?>" style="width: 100px; height:auto"></img>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Nama :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['nama'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['email'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tempat Lahir :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['tempat_lahir'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Tanggal Lahir :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['tanggal_lahir'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Agama :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['agama'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jurusan :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['jurusan'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jenis Kelamin :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['jenis_kelamin'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Hobby :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['hobby'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Alamat :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <p><?php echo $_POST['alamat'] ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- akhir main -->




            <!-- footer -->
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy;Benz</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted by <a href="http://bennyfathur.dev">Muhammad Benny F</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/mazer.js"></script>

    <!-- akhir footer -->
</body>

</html>