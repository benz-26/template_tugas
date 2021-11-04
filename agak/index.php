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
                        <li class="sidebar-item">
                            <a href="data.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Data</span>
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
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="data.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Nama :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="nama" placeholder="Nama" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control" name="email" placeholder="Email" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tempat Lahir :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-house-door"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tanggal Lahir :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="date" class="form-control" name="tanggal_lahir" value="date">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-calender"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Agama :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <fieldset class="form-group">
                                                                    <select class="form-select" id="agama" name="agama">
                                                                        <option style="text-align: center;" name="agama" value="islam">Islam</option>
                                                                        <option style="text-align: center;" name="agama" value="hindu">Hindu</option>
                                                                        <option style="text-align: center;" name="agama" value="buddha">Buddha</option>
                                                                        <option style="text-align: center;" name="agama" value="katholik">Kristen Katholik</option>
                                                                        <option style="text-align: center;" name="agama" value="protestan">Kristen Protestan</option>
                                                                    </select>
                                                                </fieldset>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-book"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jurusan :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <select name="jurusan" multiple size="4">
                                                                    <optgroup>
                                                                        <option value="Teknik Komputer">Teknik Komputer</option>
                                                                        <option value="Teknik Kimia">Teknik Kimia</option>
                                                                        <option value="Teknik Eletkro">Teknik Elektro</option>
                                                                        <option value="Akuntasi">Akuntasi</option>
                                                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Jenis Kelamin :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Laki-Laki
                                                                </label>
                                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Hobby :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <div class="form-check">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="mancing" class="form-check-input" name="hobby" value="mancing">
                                                                        <label for="checkbox3">Memancing</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="baca" class="form-check-input" name="hobby" value="baca">
                                                                        <label for="checkbox3">Baca Buku</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="joget" class="form-check-input" name="hobby" value="joget">
                                                                        <label for="checkbox3">Berjoget</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" id="lain" class="form-check-input" name="hobby" value="lain">
                                                                        <label for="checkbox3">Lain-lain</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-control-icon">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Alamat :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-house"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Foto :</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <div class="col-md-6 mb-1">
                                                                    <fieldset>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group mb-3">
                                                                            <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-upload"></i></label>
                                                                            <input type="file" class="form-control" id="foto" name="foto" value="foto" accept="images/*">
                                                                        </div>
                                                                    </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1" name="lanjot">Submit</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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