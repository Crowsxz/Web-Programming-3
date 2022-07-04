<?php
header("Content-Type:  application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=abc.xls"); //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pro-check-0");
header("Cache-Control: private", false);

?>



<h1>
    <center> Laporan Data Buku Perpustakaan Online</center>
</h1>

<table border="1" width="100%">
     <tr> 
        <th>No</th> 
        <th>Judul Buku</th> 
        <th>Pengarang</th>
        <th>Terbit</th>
        <th>Tahun Penerbit</th> 
        <th>ISBN</th> 
        <th>Stok</th> 
    </tr> 
    <?php 
    $no = 1; 
    foreach($buku as $b){ 
    ?> 
        <tr> 
            <td><?= $no++; ?></td>
            <td><?= $b['judul_buku']; ?></td> 
            <td><?= $b['pengarang']; ?></td> 
            <td><?= $b['penerbit']; ?></td> 
            <td><?= $b['tahun_terbit']; ?></td> 
            <td><?= $b['isbn']; ?></td> 
            <td><?= $b['stok']; ?></td> 
        </tr> 
    <?php 
    } 
    ?>                         
</table>