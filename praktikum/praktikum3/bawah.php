<body>
    <h2 class="text-center">Form Nilai Siswa</h2>
    <hr>
    <div class="d-flex justify-content-center w-100">
        <form class="form-horizontal" method="POST" action="praktikum3.php">
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
</body>

<?php
include_once 'libfungsi.php';

$proses = isset ($_POST['proses']) ? $_POST['proses'] : '';
$nama_siswa = isset ($_POST['nama']) ? $_POST['nama'] : '';
$mata_kuliah = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
$nilai_UTS = isset ($_POST['uts']) ? $_POST['uts'] : '';
$nilai_UAS = isset ($_POST['uas']) ? $_POST['uas'] : '';
$nilai_tugas = isset ($_POST['tugas']) ? $_POST['tugas'] : '';

    echo 'Proses : ' . $proses;
    echo '<br>Nama Siswa : ' . $nama_siswa;
    echo '<br>Mata Kuliah : ' . $mata_kuliah;
    echo '<br>Nilai UTS : ' . $nilai_UTS;
    echo '<br>Nilai UAS : ' . $nilai_UAS;
    echo '<br>Nilai Tugas Praktikum : ' . $nilai_tugas;

$nilai_akhir = jumlah($nilai_UTS, $nilai_UAS, $nilai_tugas);
$grade_nilai = grade($nilai_akhir);

    echo "<br/>Nilai Akhir : $nilai_akhir";
    echo "<br/>Status : ", cek_lulus($nilai_akhir);
    echo "<br/>Grade Nilai : ", $grade_nilai;
    echo "<br/>Predikat Nilai : ", predikat($grade_nilai);
?>

<br>


</body>
</html>