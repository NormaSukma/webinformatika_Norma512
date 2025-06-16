<?php
$koneksi = mysqli_connect("localhost", "ihsanmoes", "maniskuh", "informatik");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}function tampildata($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $rows;
    }
    return $rows;

}