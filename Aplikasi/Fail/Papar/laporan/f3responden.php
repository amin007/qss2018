<?php
include 'diatas.php';
	//$pegawai = senarai_kakitangan(); // kumpul nama fe
	$kp = isset($this->kp) ? $this->kp : null;
	$namaOrg['penyelia'] = 'Abdul Razak';
	$namaOrg['pegawai'] = $this->fe;
	//$namaOrg['batch'] = $this->batch;
	if (count($this->hasil)==0):
		$fields = null; 
		$rows = null; 
		$hasil = null; 
	else:
		$fields = count($this->hasil[0]); 
		$rows = count($this->hasil); 
		$hasil = $this->hasil;
	endif;
	$allRows = isset($this->kiraSemuaBaris) ? $this->kiraSemuaBaris : 1;
	$item = isset($this->item) ? $this->item : 30;
	$ms = isset($this->ms) ? $this->ms : 1;
	$baris = isset($this->baris) ? $this->baris : 30;
	/*# semak data
	echo '<pre>$hasilLaporan:'; print_r($this->hasil) . '</pre>';
	echo '<br>$allRows:' . $allRows . '';
	echo '<br>$baris:' . $rows . '|' . count($this->hasil) . '';
	echo '<br>$lajur:' . $fields . '|' . count($this->hasil[0]) . '';
	echo '<br>$kp:' . $kp . '<hr>' . "\r";
	//*/

if (count($this->hasil) == 0):
	echo 'Tiada data';
else:
	$jadual = new Aplikasi\Kitab\Perangkaan;
	echo "\n";
	?><table border="1" class="excel" width="100%" height="100%"><?php
	echo "\n";
	$jadual->kiraBarisDulu($kepala='FAlamat',$kp,$namaOrg,$rows,$fields,$this->hasil,$item,$ms,$baris);
	echo "\n"; 
	?></table><?php
endif; //*/
echo "\n"; ?>
</body>
</html>