<?php

// luas lingkaran
function luas_lingkaran($jari) : float {
     $luas = 3.14 * $jari * $jari;
     return $luas;
}

// keliling lingkaran (phi x diameter) 
function kel_lingkaran($diameter) : float {
     $keliling = 3.14 * $diameter;
     return $keliling;
}

// volume bola (4/3 x phi x r2)
function vol_bola($jari) : float {
     $volume = (4/3) * 3.14 * $jari * $jari;
     return $volume;
}

// volume tabung (phi x r2 x tinggi)
function vol_tabung($jari,$tinggi) : float {
     $volume = 3.14 * $jari * $jari * $tinggi;
     return $volume;
}

// volume kerucut (1/3 x phi x r2 x t)
function vol_kerucut($jari,$tinggi) : float {
     $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
     return $volume;
}

// menampilkan
$luas_lingkaran = luas_lingkaran(45);
echo "Luas lingkaran adalah     : {$luas_lingkaran}"."\n";

$keliling_lingkaran = kel_lingkaran(7);
echo "Keliling lingkaran adalah : {$keliling_lingkaran}"."\n";

$volume_bola = vol_bola(7);
echo "Volume Bola adalah        : {$volume_bola}"."\n";

$volume_tabung = vol_tabung(7,10);
echo "Volume Tabung adalah      : {$volume_tabung}"."\n";

$volume_kerucut = vol_kerucut(4,10);
echo "Volume Kerucut adalah     : {$volume_kerucut}"."\n";

?>