<?php

function faktorialisasi ($n){
	$angka=1;
	$faktorial=1;
	while ($angka <= $n) {
		$faktorial = $faktorial*$angka;
		$angka = $angka + 1;
	}
	return $faktorial;
}

<form method="post">
<input type="number" name="faktorialisasi" required>
<button type="submit" name="hitung">Hitung Angka</button>
</form>
if (isset($_POST['hitung'])) {
	$n = $_POST['faktorialisasi'];
	echo "Hasilnya adalah" . faktorial($n);
}


  ?>