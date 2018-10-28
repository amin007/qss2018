<?php
#-----------------------------------------------------------------------------------------------
function setNilaiAwal($bentukJadual01,$bentukJadual02)
{
	$respon = (isset($bentukJadual01['F0002'])) ? $bentukJadual01['F0002'] : null;
	$newss = (isset($bentukJadual01['newss'])) ? $bentukJadual01['newss'] : null;
	$nama_pertubuhan = (isset($bentukJadual01['nama_pertubuhan'])) ? $bentukJadual01['nama_pertubuhan'] : null;
	$msic2008 = (isset($bentukJadual01['msic2008'])) ? $bentukJadual01['msic2008'] : null;
	$F1201 = (isset($bentukJadual01['F1201'])) ? $bentukJadual01['F1201'] : null;
	# tatasusunan yang lain
	$fe = (isset($bentukJadual02['fe'])) ? $bentukJadual02['fe'] : null;
	$kp = (isset($bentukJadual02['kp'])) ? $bentukJadual02['kp'] : null;
	$kp2 = (isset($bentukJadual02['msic2008'])) ? $bentukJadual02['msic2008'] : null;
	$subsektor = (isset($bentukJadual02['subsektor'])) ? $bentukJadual02['subsektor'] : null;
	$industri = $kp . '|' . $kp2 . '|' . $subsektor;
	$alamat1 = (isset($bentukJadual02['alamat1'])) ? $bentukJadual02['alamat1'] : null;
	$alamat2 = (isset($bentukJadual02['alamat2'])) ? $bentukJadual02['alamat2'] : null;
	$poskod = (isset($bentukJadual02['poskod'])) ? $bentukJadual02['poskod'] : null;
	$bandar = (isset($bentukJadual02['bandar'])) ? $bentukJadual02['bandar'] : null;
	$alamat = $industri . "\n" . $alamat1 . ' ' . $alamat2 . ' ' . $poskod . ' ' . $bandar;

	return array($respon,$newss,$nama_pertubuhan,$msic2008,$F1201,$fe,$subsektor,$alamat);
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