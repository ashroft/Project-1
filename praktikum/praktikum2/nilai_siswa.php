<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Praktikum02</title>
</head>

<body>
    <h2 class="m-3">Form Nilai Siswa</h2>
    <hr>
    <div class="d-flex justify-content-center w-100">
        <form class="form-horizontal" method="POST" action="praktikum2.php">
            <div class="form-group row">
                <label for="" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control" aria-describedby="HelpBlock">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Mata Kuliah</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" placeholder="Mata Kuliah" class="custom-select" required="required" aria-describedby="select1HelpBlock">
                        <option value="DDP">Dasar-Dasar Pemrogaman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEBI">Pemrogaman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UTS</label>
                <div class="col-8">
                    <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required="required" aria-describedby="text2HelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai UAS</label>
                <div class="col-8">
                    <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required="required" aria-describedby="text3HelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label d-flex justify-content-end font-weight-bold">Nilai Tugas/Praktikum</label>
                <div class="col-8">
                    <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required" aria-describedby="text1HelpBlock">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button type="submit" value="Simpan" name="proses" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

<?php
$submit = isset ($_POST['proses']) ? $_POST['proses'] : '';
$nama_siswa = isset ($_POST['nama']) ? $_POST['nama'] : '';
$mata_kuliah = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
$nilai_uts = isset ($_POST['uts']) ? $_POST['uts'] : '';
$nilai_uas = isset ($_POST['uas']) ? $_POST['uas'] : '';
$nilai_tugas = isset ($_POST['tugas']) ? $_POST['tugas'] : '';


if (!empty($submit)) {
    echo 'Proses : ' . $submit;
    echo '</br>Nama : ' . $nama_siswa;
    echo '</br>Mata Kuliah : ' . $mata_kuliah;
    echo '</br>Nilai UTS : ' . $nilai_uts;
    echo '</br>Nilai UAS : ' . $nilai_uas;
    echo '</br>Nilai Tugas Praktikum: ' . $nilai_tugas;
}


if (!empty($nilai_uts & $nilai_uas & $nilai_tugas)) {
    $lulus = $nilai_uts * 30 / 100 + $nilai_uas * 35 / 100 + $nilai_tugas * 35 / 100;
    if ($lulus > 55) {
        echo '</br>Dinyatakan : Lulus';
    } else {
        echo '</br>Dinyatakan : Tidak Lulus';
    }

    if ($lulus >= 0 && $lulus <= 35) {
        echo '</br>Grade : ' . $grade = 'E';
    } elseif ($lulus >= 36 && $lulus <= 55) {
        echo '</br>Grade : ' . $grade = 'D';
    } elseif ($lulus >= 56 && $lulus <= 69) {
        echo '</br>Grade : ' . $grade = 'C';
    } elseif ($lulus >= 70 && $lulus <= 84) {
        echo '</br>Grade : ' . $grade = 'B';
    } elseif ($lulus >= 85 && $lulus <= 100) {
        echo '</br>Grade : ' . $grade = 'A';
    } else {
        echo '</br>Grade : ' . $grade = 'I';
    }

    switch ($grade) {
        case 'E':
            echo '</br>Predikat : ' . $predikat = 'Sangat Kurang';
            break;
        case 'D':
            echo '</br>Predikat : ' . $predikat = 'Kurang';
            break;
        case 'C':
            echo '</br>Predikat : ' . $predikat = 'Cukup';
            break;
        case 'B':
            echo '</br>Predikat : ' . $predikat = 'Memuaskan';
            break;
        case 'A':
            echo '</br>Predikat : ' . $predikat = 'Sangat Memuaskan';
            break;
        default:
            echo '</br>Predikat : ' . $predikat = 'Tidak Ada';
            break;
    }
} else {
    echo '</br>Dinyatakan : ';
    echo '</br>Grade : ';
    echo '</br>Predikat : ';
}