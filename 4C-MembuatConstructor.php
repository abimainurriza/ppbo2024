<?php

class Lingkaran
{
     const PHI = 3.14;
     public $jari_jari;

     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

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

     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

     public function getVolume() : float {
          $volume = (4/3)*self::PHI*pow($this->jari_jari,3);
          return $volume;
     }
}

class Tabung 
{
     const PHI = 3.14;
     public $jari_jari;

     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

     public function getVolume($tinggi) : float {
          $volume = self::PHI*pow($this->jari_jari,2)*$tinggi;
          return $volume;
     }    
}

class Kerucut
{
     const PHI = 3.14;
     public $jari_jari;

     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

     public function getVolume($tinggi) : float {
          $volume = (1/3)*self::PHI*pow($this->jari_jari,2)*$tinggi;
          return $volume;
     }
}


// perhitungan class lingkaran
$objek_lingkaran = new Lingkaran(8);
$luas_lingkaran = $objek_lingkaran->getLuas();
$keliling_lingkaran = $objek_lingkaran->getKeliling();
echo "PERHITUNGAN CLASS LINGKARAN"."\n";
echo "Nilai luas lingkaran adalah     : {$luas_lingkaran}"."\n";
echo "Nilai keliling lingkaran adalah : {$keliling_lingkaran}"."\n"."\n";

// perhitungan class bola
$objek_bola = new Bola(8);
$volume_bola = $objek_bola->getVolume();
echo "PERHITUNGAN CLASS BOLA"."\n";
echo "Nilai volume bola adalah    : {$volume_bola}"."\n"."\n";

// perhitungan class Tabung
$objek_tabung = new Tabung(12);
$volume_tabung = $objek_tabung->getVolume(12);
echo "PERHITUNGAN CLASS TABUNG"."\n";
echo "Nilai volume tabung adalah  : {$volume_tabung}"."\n"."\n";

// perhitungan class Kerucut
$objek_kerucut = new Kerucut(12);
$volume_kerucut = $objek_kerucut->getVolume(12);
echo "PERHITUNGAN CLASS KERUCUT"."\n";
echo "Nilai volume kerucut adalah : {$volume_kerucut}"."\n"."\n";

?>