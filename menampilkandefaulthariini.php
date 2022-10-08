<?php

date_default_timezone_set('Asia/Jakarta');
setlocale(LC_ALL, 'id-ID', 'id_ID');

echo "Bahasa Inggris : ";
echo date('l');

echo"\n";

echo "Bahasa Indonesia : ";
echo strftime("%A");

?>