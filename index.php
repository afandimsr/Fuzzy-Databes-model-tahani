<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Fuzzy tahani</title>
  </head>
  <body>
    <h1>Fuzzy tahani</h1>
    <h3>Aplikasi fuzzy  database </h3>
    <form id="Search" method="GET">
        
    
    </form>



     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahData">
    Tambah Data
  </button>
    <div class="container">
        <div class="input-data">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">umur</th>
                        <th scope="col">Masa Kerja</th>
                        <th scope="col">Gaji</th>
                    </tr>
                    </thead>
                    <tbody id="dataInput">
                    </tbody>
                </table>
        </div>

    </div>
   
  
  <!-- Modal -->
  <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahDataLabel">Form Tambah data Karyawan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="input-form"  method="POST" >
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama karyawan">
                </div>
                <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir </label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                </div>
                <div class="form-group">
                    <label for="tahunMasuk">Tahun masuk </label>
                    <input type="text" class="form-control" id="tahunMasuk" name="tahunMasuk" placeholder="Tahun Masuk">
                </div>
                <div class="form-group">
                    <label for="gaji">Gaji </label>
                    <input type="text" class="form-control" id="gaji" name="gaji" placeholder="Gaji">
                </div>
                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button name="btn-save" id="btn-save" class="btn btn-primary">Save Data</button>
            </form>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>