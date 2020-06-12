<?php 
include "koneksi.php";
include "functions.php";

$nama = htmlspecialchars($_POST['nama']);
$tanggalLahir = htmlspecialchars($_POST['tanggalLahir']);
$exTgl = explode("-",$tanggalLahir);
$umur = (date('Y')- $exTgl[0]);
$tahunMasuk = htmlspecialchars($_POST["tahunMasuk"]);
$masaKerja = (date('Y')-$tahunMasuk);
$gaji = htmlspecialchars($_POST["gaji"]);
// var_dump($_POST);


// Umur
$yUmur =[0,0,0];
// muda
if(0 <= $umur && $umur<=50){
    $yUmur[0]= trapesium($umur,0,0,30,40);
    }
    // parobaya
    if(35 <= $umur && $umur <= 50){
    $yUmur[1]= segitiga($umur,35,45,50);
    }
    // tua
    if(40 <=  $umur && $umur <=55){
    $yUmur[2]= trapesium($umur,40,50,55,55);
    }

//  Masa Kerja
$yMasaKerja = [0,0];
// baru
if(0<=$masaKerja && $masaKerja<=15){
    $yMasaKerja[0]= trapesium($masaKerja,0,0,5,15);
}
// lama
if(10 <=  $masaKerja && $masaKerja <=55){
    $yMasaKerja[1]= trapesium($masaKerja,10,25,55,55);
    }

//Gaji
    $yGaji = [0,0,0];
// Rendah
if(0 <= $gaji && $gaji<=800000){
    $yGaji[0]= trapesium($gaji,0,0,300000,800000);
    }
    // Sedang
    if(500000 <= $gaji && $gaji <= 1500000){
    $yGaji[1]= segitiga($gaji,500000,1000000,1500000);
    }
    // Tinggi
    if(1000000 <=  $gaji && $gaji <=3000000){
    $yGaji[2]= trapesium($gaji,1000000,2000000,3000000,3000000);
    }
    $sqlView = "SELECT id FROM data_karyawan ORDER BY id DESC";
    $queryView = mysqli_query($conn,$sqlView);
    if(mysqli_num_rows($queryView)>0){
    $numId= $queryView->fetch_assoc();
    $resultId= $numId["id"]+1;
    }else{
        $resultId=1;
    }
    $sql = "INSERT INTO data_karyawan (nama,tanggalLahir,umur,tahunMasuk,masaKerja,gaji) VALUES('$nama','$tanggalLahir','$umur','$tahunMasuk','$masaKerja','$gaji')";

    $sqlUmur ="INSERT INTO fuzzy_umur (id_karyawan,muda,parobaya,tua) VALUES('$resultId','$yUmur[0]','$yUmur[1]','$yUmur[2]')";
    $query = mysqli_query($conn,$sql);
    $queryUmur= mysqli_query($conn,$sqlUmur);
    if($queryUmur){
        echo "fuzzy umur berhasil dimasukkan";
        $sqlMasaKerja="INSERT INTO fuzzy_masa_kerja (id_karyawan,baru,lama) VALUES('$resultId','$yMasaKerja[0]','$yMasaKerja[1]')";
        $queryMasaKerja = mysqli_query($conn,$sqlMasaKerja);
        if($queryMasaKerja){
            echo "fuzzy masa kerja  berhasil dimasukkan";
            $sqlGaji ="INSERT INTO fuzzy_gaji (id_karyawan,rendah,sedang,tinggi) VALUES('$resultId','$yGaji[0]','$yGaji[1]','$yGaji[2]')";
            $queryGaji = mysqli_query($conn,$sqlGaji);
            if($queryGaji){
                echo"fuzzy gaji berhsail dimasukkan";
            }
        }
    }else{
        echo mysqli_connect_error();
    }
      
      

      

?>