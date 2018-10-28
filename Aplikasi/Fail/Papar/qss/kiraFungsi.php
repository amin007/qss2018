<?php
#-----------------------------------------------------------------------------------------------
function setNilaiAwal($bentukJadual01,$bentukJadual02)
{
	$respon = (isset($bentukJadual01['F0002'])) ? $bentukJadual01['F0002'] : null;
	$newss = (isset($bentukJadual01['newss'])) ? $bentukJadual01['newss'] : null;
	$nama_pertubuhan = (isset($bentukJadual01['nama_pertubuhan'])) ?
		$bentukJadual01['nama_pertubuhan'] : null;
	$msic2008 = (isset($bentukJadual01['msic2008'])) ? $bentukJadual01['msic2008'] : null;
	$F1201 = (isset($bentukJadual01['F1201'])) ? $bentukJadual01['F1201'] : null;
	# tatasusunan yang lain
	$fe = (isset($bentukJadual02['fe2018'])) ? $bentukJadual02['fe2018'] : null;
	$utama = (isset($bentukJadual02['bbu_sbu'])) ? $bentukJadual02['bbu_sbu'] : null;
	# gabung tatasusunan yang lain
	$kp = (isset($bentukJadual02['kp'])) ? $bentukJadual02['kp'] : null;
	$kp2 = (isset($bentukJadual02['msic2008'])) ? $bentukJadual02['msic2008'] : null;
	$subsektor = (isset($bentukJadual02['subsektor'])) ? $bentukJadual02['subsektor'] : null;
	$industri = $kp . '|' . $kp2 . '|' . $subsektor;
	$alamat1 = (isset($bentukJadual02['alamat1'])) ? $bentukJadual02['alamat1'] : null;
	$alamat2 = (isset($bentukJadual02['alamat2'])) ? $bentukJadual02['alamat2'] : null;
	$poskod = (isset($bentukJadual02['poskod'])) ? $bentukJadual02['poskod'] : null;
	$bandar = (isset($bentukJadual02['bandar'])) ? $bentukJadual02['bandar'] : null;
	$alamat = $industri . "\n" . $alamat1 . ' ' . $alamat2 . ' ' . $poskod . ' ' . $bandar;

	return array($respon,$newss,$nama_pertubuhan,$msic2008,$F1201,$fe,$utama,$subsektor,$alamat);
}
#-----------------------------------------------------------------------------------------------
function paparTR($bentukJadual01,$bentukJadual02)
{
	$ulang = array('kod_negeri'=>'Kod&nbsp;Negeri',
	'pusat_operasi'=>'Pusat&nbsp;Operasi',
	'strata'=>'Strata',
	);
	foreach ($ulang as $papar => $lihat):
		echo "\n\t\t" . '<tr><td bgcolor="#e9e7e9">' . $lihat . '</td><td>'
		. jumlah($bentukJadual01,$papar) . '</td></tr>';
	endforeach;
	$ulang = $papar = $lihat = null;
	$ulang = array(
		'kp'=>'Kod Survei',
		'msic_asal'=>'Kod&nbsp;Industri',
		'cara_terima'=>'Cara Terima Borang',
		);
	foreach ($ulang as $papar => $lihat):
		echo "\n\t\t" . '<tr><td bgcolor="#e9e7e9">' . $lihat . '</td><td>'
		. jumlah($bentukJadual02,$papar) . '</td></tr>';
	endforeach;
	//*/
}
#-----------------------------------------------------------------------------------------------
function jumlah($bentukJadual01,$papar)
{
	return (isset($bentukJadual01[$papar])) ?
	$bentukJadual01[$papar] : 0;
}
#-----------------------------------------------------------------------------------------------
function kiraJumlah($bentukJadual01,$key)
{
	$blnA = jumlah($bentukJadual01,$key . 'a');
	$blnB = jumlah($bentukJadual01,$key . 'b');
	$blnC = jumlah($bentukJadual01,$key . 'c');
	$kira = $blnA + $blnB + $blnC;
	$font = $key . '|<font color="red">' . $kira . '</font>';

	return $font;
}
#-----------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------
#-----------------------------------------------------------------------------------------------