<?php
include 'bomphd.php';

$init = new Bom();

echo "Nomor Target (pakai 62): ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan: ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
