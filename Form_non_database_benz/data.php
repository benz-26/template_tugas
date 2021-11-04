<?php

if (isset($_POST['lanjot'])) {
    $nim = $_POST["nim"];
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
    fputs($data, $nim . "\n");
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                                </svg>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="form.php" class='sidebar-link'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                                    <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
                                </svg>
                                <span>Form Data</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="formulir.php" class='sidebar-link'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-textarea-resize" viewBox="0 0 16 16">
                                    <path d="M0 4.5A2.5 2.5 0 0 1 2.5 2h11A2.5 2.5 0 0 1 16 4.5v7a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 0 11.5v-7zM2.5 3A1.5 1.5 0 0 0 1 4.5v7A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 13.5 3h-11zm10.854 4.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708l3-3a.5.5 0 0 1 .708 0zm0 2.5a.5.5 0 0 1 0 .708l-.5.5a.5.5 0 0 1-.708-.708l.5-.5a.5.5 0 0 1 .708 0z" />
                                </svg>
                                <span>Formulir Data</span>
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
                <h4 class="card-title text-center">DATA MAHASISWA</h4>


                <table id="table" class="table table-bordered table-striped">
                    <thead class="container-fluid">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">NIM</th>
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
                            $nim = fgets($data, 255);
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
                                <td class="text-center"><?php echo $nim; ?></td>
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
           <footer class="text-center">
                <div class="container p-2 pb-3  ">
                    <section class="mb-6">
                        <!-- jangan rubah bagian ini  -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="https://github.com/benz-26" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg></a>
                        <!-- sampai sini -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3F3351;" href="index.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                            </svg></a>
                    </section>
                </div>
                © 2021 Copyleft:
                <a class="text" href="https://github.com/benz-26">M Benny Fathurrahman</a>
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