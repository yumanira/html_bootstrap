<?php
    // Koneksi database
    $server ="localhost";
    $user   ="root";
    $password ="";
    $database ="dbcrud_modal";


    // koneksinya
    $koneksi = mysqli_connect($server,$user,$password,$database) or die (mysqli_error($koneksi));


?>