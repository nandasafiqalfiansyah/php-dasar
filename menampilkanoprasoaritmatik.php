<?php
	$nilaiA = 4 ;
	$nilaiB = 4 ;
	$operator = '+';
	
	
		if ($operator == 'Pilih Operator'){
			echo "<span style='font-size:15px; color:red;'>anda belum memilih operator<br></span>";
			}
		if ($operator == '+') {
			$eksekusi=$nilaiA + $nilaiB;
			}
		if ($operator == '-') {
			$eksekusi=$nilaiA - $nilaiB;
			}
		if ($operator == '*') {
			$eksekusi=$nilaiA * $nilaiB;
			}
		if ($operator == '/') {
			$eksekusi=$nilaiA / $nilaiB;
			}
				
	echo "Hasil <br>";
	echo "$nilaiA ";
	echo "$operator ";
	echo "$nilaiB ";
	echo "= ";
	echo "$eksekusi";
?>