<?php
$kode = [
    'Afghanistan' => 93,
    'Brazil' => 55,
    'Indonesia' => 62,
    'Malaysia' => 60,
    'Palestina' => 970
];

asort($kode);
print_r($kode);

arsort($kode);
echo '<br>';
print_r($kode);

ksort($kode);
echo '<br>';
print_r($kode);

krsort($kode);
echo '<br>';
print_r($kode);