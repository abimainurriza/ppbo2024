<?php

class Lingkaran
{
     const PHI = 3.14;
     public $jari_jari;

     public function getLuas() : float {
          return self::PHI*$this->jari_jari*$this->jari_jari;
     }

     public function getKeliling() : float {
          return 2*self::PHI*$this->jari_jari;
     }
}

class Bola
{
     const PHI = 3.14;
     public $jari_jari;

     public function getVolume() : float {
          $volume = (4/3)*self::PHI*pow($this->jari_jari,3);
          return $volume;
     }
}

class Tabung 
{
     const PHI = 3.14;
     public $jari_jari;

     public function getVolume($tinggi) : float {
          $volume = self::PHI*pow($this->jari_jari,2)*$tinggi;
          return $volume;
     }    
}

class Kerucut
{
     const PHI = 3.14;
     public $jari_jari;

     public function getVolume($tinggi) : float {
          $volume = (1/3)*self::PHI*pow($this->jari_jari,2)*$tinggi;
          return $volume;
     }
}


// perhitungan class lingkaran
$objek_lingkaran = new Lingkaran();
$objek_lingkaran->jari_jari = 8;
$luas_lingkaran = $objek_lingkaran->getLuas();
$keliling_lingkaran = $objek_lingkaran->getKeliling();
echo "*PERHITUNGAN CLASS LINGKARAN*"."\n";
echo "Nilai luas lingkaran adalah     : {$luas_lingkaran}"."\n";
echo "Nilai keliling lingkaran adalah : {$keliling_lingkaran}"."\n"."\n";

// perhitungan class bola
$objek_bola = new Bola();
$objek_bola->jari_jari = 10;
$volume_bola = $objek_bola->getVolume();
echo "*PERHITUNGAN CLASS BOLA*"."\n";
echo "Nilai volume bola adalah    : {$volume_bola}"."\n"."\n";

// perhitungan class Tabung
$objek_tabung = new Tabung();
$objek_tabung->jari_jari = 12;
$volume_tabung = $objek_tabung->getVolume(10);
echo "*PERHITUNGAN CLASS TABUNG*"."\n";
echo "Nilai volume tabung adalah  : {$volume_tabung}"."\n"."\n";

// perhitungan class Kerucut
$objek_kerucut = new Kerucut();
$objek_kerucut->jari_jari = 12;
$volume_kerucut = $objek_kerucut->getVolume(10);
echo "*PERHITUNGAN CLASS KERUCUT*"."\n";
echo "Nilai volume kerucut adalah : {$volume_kerucut}"."\n"."\n";








// // menampilkan setiap fungsi pada class bangun ruang
// $objek_bangun_ruang = new BangunRuang();
// $objek_bangun_ruang->jari_jari = 7;

// $vol_bola = $objek_bangun_ruang->bola();
// $vol_tabung = $objek_bangun_ruang->tabung(10);
// $vol_kerucut = $objek_bangun_ruang->kerucut(10);
// echo "Nilai volume bola adalah         : {$vol_bola}"."\n";
// echo "Nilai volume tabung adalah       : {$vol_tabung}"."\n";
// echo "Nilai volume kerucut adalah      : {$vol_kerucut}"."\n";

























// $nasi_tumpeng = new Kerucut();

// mengakses method volume
// $volume = $nasi_tumpeng->volume(4,10);
// echo "Volume Nasi Tumpeng Adalah : {$volume}";


?>
