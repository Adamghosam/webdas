<?php
function cetak_ganjil($awal, $akhir)
{
    for ($i = $awal; $i < $akhir; $i++) {
        if ($i % 2 == 1) {
            echo "$i";
        }
    }
}

// pemangilan fungsi

$a = 10;
$b = 50;
echo "bilangan ganjil dari $a sampai $b: <br><br>";
Cetak_ganjil($a, $b);
