<?php
// Contoh function yang sudah dibuat oleh php

// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH TIME 
// Detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()60*60*24*100);


// mktime
// membuat sendiri Detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,4,9,2022));


// strtotime
// echo date("l", strtotime("25 aug 1995"));

?>