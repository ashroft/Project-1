<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<table class="example display nowrap table-striped table-bordered table" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat (kg)</th>
            <th>Tinggi (cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
            </tr>
    </thead>
    <tbody>
    <div class="container-fluid">
        <div class="container d-flex justify-content-center py-5">
            <div class="col-md-12 col-12 p-3">
                <?php
                require_once 'class_BMI.php';

                $nomor = 1;
                $bb1 = new BMI("P001", "Ahmad", "L", 69.8, 169);
                $bb1->tanggal = "2022-01-10";
                $bb2 = new BMI("P002", "Rina", "P", 55.3, 165);
                $bb2->tanggal = "2022-01-10";
                $bb3 = new BMI("P003", "Lutfi", "L", 45.2, 171);
                $bb3->tanggal = "2022-01-11";

                $tanggal_periksa = isset ($_POST['tanggal_periksa']) ? $_POST['tanggal_periksa'] : '';
                $kode_pasien = isset ($_POST['kode_pasien']) ? $_POST['kode_pasien'] : '';
                $nama_pasien = isset ($_POST['nama_pasien']) ? $_POST['nama_pasien'] : '';
                $gender = isset ($_POST['gender']) ? $_POST['gender'] : '';
                $berat = isset ($_POST['berat']) ? floatval($_POST['berat']) : '';
                $tinggi = isset ($_POST['tinggi']) ? floatval($_POST['tinggi']) : '';

                $bb4 = new BMI ($kode_pasien, $nama_pasien, $gender, $berat, $tinggi);
                $bb4->tanggal = $tanggal_periksa;

                $array = [$bb1, $bb2, $bb3, $bb4];
    
                foreach ($array as $bb){
                echo '<tr><th>'.$nomor.'</th>';
                echo'<td>'.$bb->tanggal.'</td>';
                echo'<td>'.$bb->getKode().'</td>';
                echo'<td>'.$bb->getNama().'</td>';
                echo'<td>'.$bb->getGender().'</td>';
                echo'<td>'.$bb->getBerat().'</td>';
                echo'<td>'.$bb->getTinggi().'</td>';
                echo'<td>'.$bb->nilaiBMI().'</td>';
                echo'<td>'.$bb->statusBMI().'</td></tr>';
                $nomor ++;
                }
                ?>
            </div>
        </div>
    </div>
    </tbody>
    </table>
</body>
</html>