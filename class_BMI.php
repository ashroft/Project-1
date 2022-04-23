<?php
require_once "class_pasien.php";

class BMI extends Pasien
{
    public $berat;
    public $tinggi;
    public $tanggal;

    public function __construct($kode_pasien, $nama_pasien, $gender, $berat, $tinggi){
        parent::__construct($kode_pasien, $nama_pasien, $gender, $berat, $tinggi);
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->tanggal = date("Y-m-d");
    }

    public function getBerat(){
        return $this->berat;
    }

    public function getTinggi(){
        return $this->tinggi;
    }

    public function nilaiBMI(){
        return number_format((float)$this->berat / ($this->tinggi / 100) ** 2, 1, '.', '');
    }

    public function statusBMI()
    {
        if ($this->nilaiBMI() <= 18.4) {
            return "Kekurangan Bobot";
        } elseif ($this->nilaiBMI() >= 18.5 && $this->nilaiBMI() <= 23.9) {
            return "Sehat";
        } elseif ($this->nilaiBMI() >= 24 && $this->nilaiBMI() <= 26.9) {
            return "Kelebihan Bobot";
        } elseif ($this->nilaiBMI() >= 27 && $this->nilaiBMI() <= 29.9) {
            return "Obesitas 1";
        } elseif ($this->nilaiBMI() >= 30) {
            return "Obesitas 2";
        }

        else{
            return;

        }
    }
}

