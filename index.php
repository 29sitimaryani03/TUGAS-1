<?php

echo "Animal <br>";
echo "<hr>";

class kucing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$omeng = new Kucing;
$omeng->jumlah_kaki = 4;
$omeng->bisa_terbang = "tidak bisa terbang";
$omeng->suara = "meoong";

echo "Omeng adalah kucing <br>";
echo "Punya kaki sebanyak: ".$omeng->jumlah_kaki. "<br>";
echo $omeng->bisa_terbang. "<br>";
echo "suaranya: ".$omeng->suara. "<br>";

echo "<hr>";

class Anjing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Doggi = new Anjing;
$Doggi->jumlah_kaki = 4;
$Doggi->bisa_terbang = "tidak bisa terbang";
$Doggi->suara = "guk guk guk";

echo "Doggi adalah anjing <br>";
echo "Punya kaki sebanyak: ".$Doggi->jumlah_kaki. "<br>";
echo $Doggi->bisa_terbang. "<br>";
echo "suaranya: ".$Doggi->suara. "<br>";

echo "<hr>";

class Elang{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Zya = new Elang;
$Zya->jumlah_kaki = 2;
$Zya->bisa_terbang = "Bisa terbang";
$Zya->suara = "Miippp miipp";

echo "Zya adalah Elang <br>";
echo "Punya kaki sebanyak: ".$Zya->jumlah_kaki. "<br>";
echo $Zya->bisa_terbang. "<br>";
echo "suaranya: ".$Zya->suara. "<br>";

echo "<hr>";

class Angsa{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Izi = new Angsa;
$Izi->jumlah_kaki = 2;
$Izi->bisa_terbang = "Bisa terbang";
$Izi->suara = "kwaaakkk";

echo "Izi adalah angsa <br>";
echo "Punya kaki sebanyak: ".$Izi->jumlah_kaki. "<br>";
echo $Izi->bisa_terbang. "<br>";
echo "suaranya: ".$Izi->suara. "<br>";
