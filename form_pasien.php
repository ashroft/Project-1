<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Pasien</title>
</head>
<body>
<div class="container-fluid">
    <div class="container d-flex justify-content-center pt-5">
        <form class=" col-8" method="post" action="tugasBMI.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nama" name="nama_pasien" placeholder="Masukkan Nama Anda" type="text" required="required" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Kode Pasien</label> 
                <div class="col-8">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-key"></i>
                      </div>
                    </div> 
                    <input id="text1" name="kode_pasien" placeholder="Masukkan Kode Pasien Anda" type="text" required="required" class="form-control">
                  </div>
                </div>
              </div>
            <div class="form-group row">
                <label for="tgl" class="col-4 col-form-label">Tanggal Periksa</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-calendar"></i>
                    </div>
                    </div> 
                    <input id="tgl" name="tanggal_periksa" placeholder="Year-Month-Date" type="date" required="required" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmpt" class="col-4 col-form-label">Tempat Lahir</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-location-arrow"></i>
                    </div>
                    </div> 
                    <input id="tmpt" name="tmpt" placeholder="Masukkan Tempat Lahir Anda" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="kelamin_0" type="radio" class="custom-control-input" value="L" required="required"> 
                    <label for="kelamin_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="kelamin_1" type="radio" class="custom-control-input" value="P" required="required"> 
                    <label for="kelamin_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">E-mail</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div> 
                    <input id="email" name="email" placeholder="Masukan Email Anda" type="email" required="required" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
                <div class="col-6">
                <div class="input-group">
                    <input id="tb" name="tinggi" placeholder="Masukkan Tinggi Badan Anda" type="number" step="1" min="0" required="required" class="form-control"> 
                    <div class="input-group-append">
                    <div class="input-group-text">cm</div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-6">
                <div class="input-group">
                    <input id="bb" name="berat" placeholder="Masukkan Berat Badan Anda" type="number" step="1" min="0" required="required" class="form-control"> 
                    <div class="input-group-append">
                    <div class="input-group-text">kg</div>
                    </div>
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-auto">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>    

</body>
</html>