
      <?php 

        include "koneksi.php";
        include "functions.php";
        $sql = "SELECT id FROM data_karyawan ORDER BY id DESC";
        $query = mysqli_query($conn,$sql);
        $numq = $query->fetch_assoc();
        $result=$numq["id"]+1;

        echo  $result;
        die();
        $result = mysqli_fetch_assoc($query);
        $arayss = ["afandi","afadnid"];
        echo $arayss[1];
        echo $result["id"];
        var_dump($result);die();
       // Umur
    $yUmur =[0,0,0];
    // muda
    $umur=25;
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
      $sqlUmur ="INSERT INTO fuzzy_umur (id_karyawan,muda,parobaya,tua) VALUES('2','$yUmur[0]','$yUmur[1]','$yUmur[2]')";
      $queryUmur= mysqli_query($conn,$sqlUmur);
      if($queryUmur){
         //  Masa Kerja
         $masaKerja = 5;
        $yMasaKerja = [0,0];
        // baru
        if(0<=$masaKerja && $masaKerja<=15){
            $yMasaKerja[0]= trapesium($masaKerja,0,0,5,15);
        }
        // lama
        if(10 <=  $masaKerja && $masaKerja <=55){
            $yMasaKerja[1]= trapesium($masaKerja,10,25,55,55);
          }
          $sqlMasaKerja="INSERT INTO fuzzy_masa_kerja (id_karyawan,baru,lama) VALUES('2','$yMasaKerja[0]','$yMasaKerja[1]')";
          $queryMasaKerja = mysqli_query($conn,$sqlMasaKerja);


      }
        // $number=1;
        // // $kategori = ["muda","parobaya","tua"];
        // $yUmur =[0,0,0];
        // $i=0;
        // while($ky = mysqli_fetch_assoc($query)){
        //   $umur = $ky["umur"];
        //   // muda
        //   if(0 <= $umur && $umur<=50){
        //     $yUmur[0]= trapesium($umur,0,0,30,40);
            
        //   }
        //   // parobaya
        //   if(35 <= $umur && $umur <= 50){
        //     $yUmur[1]= segitiga($umur,35,45,50);
        //   }
        //   // tua
        //   if(40 <=  $umur && $umur <=55){
        //     $yUmur[2]= trapesium($umur,40,50,55,55);
          // }
          
          
      ?>
    
            <?php  //}
              print_r($yUmur);
            ;?>