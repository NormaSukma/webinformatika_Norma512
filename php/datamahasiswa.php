<?php

require 'function.php';
$query = "SELECT * FROM mahasiswa";
$rows = tampildata($query);

<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 40px;
    }
    table {
        width: 90%;
        border-collapse: collapse;
        margin: auto;
    }
    th, td {
        border: 1px solid #555;
        padding: 12px;
        text-align: center;
    }
    th {
        background-color: #ddd;
    }
</style>
</head>
<body>
    <h1 align="center" > Data Mahasiswa </h1>
    <hr width="50%" align="center" size="5px" color="darkgrey">

    <nav>
        <ul style="list-style-type: none; text-align: center; padding: 0%;">
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
                <a href="index.php">Home</a>
            </li>
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
                <a href="about.html">About</a>
            </li>   
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
            <a href="service.html">Services</a></li>
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
            <a href="contact.html">Contact</a></li>    
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
            <a href="login.html">Login</a></li>
            <li style="display: inline; margin: 0% 15px; text-decoration: none;">
            <a href="datamahasiswa.php">Data Mahasiswa</a></li>                                                  
        </ul>
    </nav>

    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr> 
        <?php 
        $i = 1;
        foreach($rows as $mhs) { ?>
        <tr>
            <td><?= $mhs["i"]; ?></td>
            <td><img src="images/mhs/<?= $mhs["foto"] ?>"alt=<?= $mhs["foto"] ?>" width="300px" /></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
            <td><?= $mhs["alamat"]; ?></td>
        </tr> 
        ?php $i++; } ?>
    </thead>
</table>


</body>
</html>