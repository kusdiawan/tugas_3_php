<?php
echo "Tugas 3_2 php";
echo "<br>";
$tabungan_awal = 150000;
$bunga = 0.125;

$jum_bunga = ($tabungan_awal * $bunga);
$jum_tabungan = $tabungan_awal + $jum_bunga;

print_r("Tabungan Awal = Rp " . $tabungan_awal);
echo "<br>";
print_r("Bunga setahun = " . $bunga);
echo "<br>";
print_r("Total Tabungan Setahun = " . $jum_tabungan);
echo "<br>";
print_r("Jawaban Rp = " . $jum_bunga);
echo "<br>";

?>