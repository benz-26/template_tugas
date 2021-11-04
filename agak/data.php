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

//simpan
$data = fopen("data_table.dat", "a");
fputs($data, $nama . "\n");
fputs($data, $email . "\n");
fputs($data, $tempat_lahir . "\n");
fputs($data, $tanggal_lahir . "\n");
fputs($data, $agama . "\n");
fputs($data, $jurusan . "\n");
fputs($data, $hobby . "\n");
fputs($data, $alamat . "\n");
fputs($data, $foto . "\n");
fputs($data, "*-*\n");
fclose($data);
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


<div class="card-body">
            <table id="table" class="table table-bordered table-striped">
                <thead class="container-fluid">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Tempat Lahir</th>
                        <th class="text-center">Tanggal Lahir</th>
                        <th class="text-center">Agama</th>
                        <th class="text-center">Jurusan</th>
                        <th class="text-center">Hobby</th>
                        <th class="text-center">Alamat</th>
                    </tr>
                </thead>

                <tbody class="container-fluid">
                <?php
$i = 1;
$data = fopen("data_table.dat", "r");
while (!feof($data)) {
    $nama = fgets($data, 255);
    $email = trim(fgets($data, 255));
    $tempat_lahir = trim(fgets($data, 255));
    $tanggal_lahir = trim(fgets($data, 255));
    $agama = trim(fgets($data, 255));
    $jurusan = trim(fgets($data, 255));
    $hobby = trim(fgets($data, 255));
    $alamat = trim(fgets($data, 255));
    $foto = trim(fgets($data, 255));

    while (!feof($data)) {
        $tmp = trim(fgets($data, 255));
        if ($tmp == "*-*")
            break;
    }
?>

                    <tr>
                        <td class="text-center"><?php echo $i++; ?></td>
                        <td class="text-center"> <img src="images/<?php print_r($foto) ?>" style="width: 100px; height:auto"></img></td>
                        <td class="text-center"><?php echo ($nama) ?></td>
                        <td class="text-center"><?php echo ($email) ?></td>
                        <td class="text-center"><?php echo ($tempat_lahir) ?></td>
                        <td class="text-center"><?php echo ($tanggal_lahir) ?></td>
                        <td class="text-center"><?php echo ($agama) ?></td>
                        <td class="text-center"><?php echo ($jurusan) ?></td>
                        <td class="text-center"><?php echo ($hobby) ?></td>
                        <td class="text-center"><?php echo ($alamat) ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

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