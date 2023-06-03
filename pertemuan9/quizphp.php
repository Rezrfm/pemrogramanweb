<?php
    $gp = 2000000;
    $gb = 500000;
    $gt = $gp * 0.05;
    $pj = $gp * 0.1;
    echo "================================" . "<br>";
    echo "NIP = 100111"  . "<br>";
    echo "Nama pegawai = Reza Arif Maulana" . "<br>";
    echo "================================" . "<br>";
    echo "Gaji pokok = Rp." . $gp . "<br>";
    echo "Bonus = Rp." . $gb . "<br>";
    echo "Tunjangan = Rp." . $gt . "<br>";
    echo "Pajak = Rp." . $pj . "<br>";
    echo "================================" . "<br>";
    echo "Gaji yang harus dibayarkan Rp." . ($gp + $gb + $gt) - $pj;
?>