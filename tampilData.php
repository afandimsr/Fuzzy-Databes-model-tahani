
      <?php 
        include "koneksi.php";
        $sql = "SELECT * FROM data_karyawan";
        $query = mysqli_query($conn,$sql);
        // var_dump($result);
        $number=1;
        while($ky = mysqli_fetch_assoc($query)){
           
        
      ?>
    <tr>
      <td scope="row"><?= $number++; ?></td>
      <td><?=$ky["nama"] ?></td>
      <td><?=$ky['umur'] ?></td>
      <td><?=$ky['masaKerja'] ?></td>
      <td><?=$ky['gaji'] ?></td>
     
    </tr>
            <?php  } ?>
 