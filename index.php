<?php
// menghubungkan database
include "koneksi.php";

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container"> 

    <div class="mt-3">
    <h3 class = "text-center" > DATA MAHASISWA UNIVERSITAS MUSTIKA </h3>
    <h3 class = "text-center" > JL AHMAD YANI NO. 36A BLORA </h3>

    <div class="mt-3">
    <div class="card">
    <div class="card-header bg-primary text-white ">
        DATA MAHASISWA
    </div>
    <div class="card-body">

    
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          TAMBAH DATA
          </button>

          <!-- Awal Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" >
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <!-- awal isi modal/form isian data akan dikoneksikan ke file aksi-crud.php-->
                    <form method = "POST" action = "aksi_crud.php">
                        <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" class="form-control" name="tnim" placeholder="masukkan NIM anda!">
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="tname" placeholder="masukkan Nama lengkap anda!">
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Alamat Lengkap</label>
                        <textarea class="form-control" name="talamat" placeholder="masukkan Alamat lengkap anda!" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Prodi</label>
                        <select class="form-select" name="tprodi">
                            <option> </option>
                            <option value="D3 - Manajemen Informatika"> D3 - Manajemen Informatika </option>
                            <option value="S1 - Sistem Informasi"> S1 - Sistem Informasi </option>
                            <option value="S1 - Teknik Informatika"> S1 - Teknik Informatika </option>
                        </select>
                        </div>
             
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="bsimpan" >Save</button>  
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>

                    </form>
                     <!-- akhir isi modal/form isian -->
                </div>
              </div>
            </div>
            <!-- Akhir Modal -->

        <!-- awal tabel -->
        <div class="mt-3">
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>No. </th>
            <th>NIM </th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Jurusan </th>
            <th>Aksi</th>
          </tr>

          <?php
          // persiapan menampilkan data
          $no = 1;
          $tampil = mysqli_query($koneksi,"SELECT * FROM thms ORDER BY id_mhs DESC");
          while ($data = mysqli_fetch_array($tampil)) :
          
          
          ?>



          <tr>
              <td><?= $no++ ?></td>
              <td><?=$data['nim']?></td>
              <td><?=$data['nama']?></td>
              <td><?=$data['alamat']?></td>
              <td><?=$data['prodi']?></td>
              <td>
                <a href="#", class="btn btn-warning"> Ubah</a>
                <a href="#", class="btn btn-danger"> Hapus</a>
              </td>
          </tr>
         
              <?php endwhile; ?>
          </table>
          <!-- akhir tabel -->


        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>
    </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>