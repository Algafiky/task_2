<?php
    echo '<center><h2 style="color:blue"> Nota Pesanan </h2></center>';        
    echo 'Atas Nama: ';
    echo $_GET['nama'];
    echo '<br>';
    echo 'Pesanan Yang kamu pilih : ';
    echo $_GET['Pilih'];
    echo '<br>';
    echo 'Custom : ';
    echo $_GET['Request'];
    echo '<br>';
    echo 'Alamat Pengiriman : ';
    echo $_GET['Alamat'];

?>