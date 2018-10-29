<table width="961" align="center" height="20">
<tr><td height="20" colspan="4" align="left" >
	<p><div class="textdescrp"></div></p>
</td></tr>
<tr style="display:none;">
	<td colspan="4" align="left" height="20" >
		<input type="hidden" name="nosiri" id="nosiri" value="" />
		<input type="hidden" name="kod" id="kod" value="01" />
		Kod Respon<input type="text" name="kod_respon" id="kod_respon" size="4"/>
		Status<input type="text" name="cara_terima" id="cara_terima" size="8" />
		<input  name="get_lang" id="get_lang" type="hidden" />
	</td>
</tr>
<tr height="0">
	<td width="400" align="left" valign="top" class="textdescrp2">No. SSM:</td>
	<td align="left" valign="top">
		<!-- input type="text" name="no_ssm" id="no_ssm" value="" disabled="disabled" />
		<input type="hidden" name="iduser" id="iduser" value="" / -->
		<form class="mx-2 my-auto d-inline w-50" action="<?php echo URL ?>qss/temui/400/1/-16" method="POST">
			No.&nbsp;Pendaftaran Syarikat /Perniagaan&nbsp;
			<input type="text" name="cari"
			value="<?php echo $newss ?>"
			placeholder="Cari Newss / Nama" class="form-control" />
		</form><!-- / class="form-inline" -->
	</td>
	<td width="400" rowspan="4" align="left">
		<table width="108" align="center">
		<!-- tr><td width="98" bgcolor="#FF0000"><div align="center"><em>Error</em></div></td></tr>
		<tr><td bgcolor="#bffcc0"><div align="center"><em>Force Accept</em></div></td></tr -->
		<tr><td bgcolor="#87ceeb" align="center">Respon:<?php echo $respon ?></td></tr>
		<tr><td bgcolor="#87ceeb" align="center">FE:<?php echo $fe ?></td></tr>
		</table><br>
		<table border="1" id="maklumat">
		<tr><td bgcolor="#e9e7e9">No Siri</td><td><?php echo $newss ?></td></tr>
		<tr><td bgcolor="#e9e7e9">Suku&nbsp;Tahun</td><td>1</td></tr>
		<tr><td bgcolor="#e9e7e9">Tahun</td><td>2018</td></tr>
		<tr><td bgcolor="#e9e7e9">BBU/SBU</td><td><?php echo $utama ?></td></tr>
		</table>
	</td>
	<td width="400" rowspan="4" align="left">
		<table border="1" id="maklumat"><?php
		paparTR($this->bentukJadual01[0],$this->bentukJadual02[0]);
		?></table>
	</td>
</tr>
<tr>
	<td align="left" class="textdescrp2">Syarikat :</td>
	<td align="left"><input type="text" name="msic" value="<?php echo $nama_pertubuhan ?>"
	maxlength="60" size="60" disabled="disabled"></td>
</tr>
<tr>
	<td align="left" class="textdescrp2">Kod Industri Asal :</td>
	<td align="left"><input type="text" name="msic" id="msic"
	value="<?php echo $msic2008 ?>"
	maxlength="60" size="60" disabled="disabled"></td>
</tr>
<tr>
	<td align="left" class="textdescrp2">Kod Industri Baru :</td>
	<td align="left"><input name="msic_baru" type="text"
	value="<?php echo $F1201 ?>"
	maxlength="60" size="60" disabled="disabled"></td>
</tr>
<tr>
	<td align="left" class="textdescrp2">&nbsp;</td>
	<td align="left"><textarea name="msic_desc" id="msic_desc" cols="70" rows="3" style="resize:none;"
	disabled="disabled"><?php echo $alamat ?></textarea></td>
</tr>
</table>
<!-- ************************************************************************************************************************************ -->
<form id="form1" name="form1" method="post" action="pengguna_dalam/kemaskini/borang/borangA_proses.php">
<!-- ************************************************************************************************************************************ -->
<table width="99%" border="0" align="center" id="tbl2">
<tr>
	<td colspan="10" bgcolor="#FFFF99"><div align="center">
	<b>BAHAGIAN E:  PERKHIDMATAN ATAS TALIAN DAN e-DAGANG</b><br>
	<i>PART E: ONLINE SERVICES AND e-COMMERCE</i>
	</b></div></td>
</tr>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<tr>
	<td valign="top"><b>6.</b></td>
	<td colspan="9">
		<b>PERKHIDMATAN ATAS TALIAN DAN e-DAGANG</b><br>
		<i>ONLINE SERVICES AND e-COMMERCE</i>
	</td>
</tr>
<tr>
	<td valign="top"><b>6.1</b></td>
	<td colspan="9">
		<b>Adakah pertubuhan tuan melakukan transaksi (jualan / pembelian) menggunakan internet?</b><br>
		<i>Did your establishment conduct a transactions (sales / purchase) using the internet?</i>
		<table><tr>
			<td>F1501</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>YA</b> / <i>YES</i> <br> <b>Jika YA, sila ke Soalan 6.2</b> / <i>If YES, please go to Question 6.2</i></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>F1502</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>TIDAK</b> / <i>NO</i> <br> <b>Jika TIDAK, TAMAT di sini.</b> / <i>If NO, END here</i></td>
		</tr></table>
	</td>
</tr>
<tr>
	<td valign="top"><b>6.2</b></td>
	<td colspan="9">
		<b>Sila nyatakan jenis platform yang digunakan oleh pertubuhan tuan bagi urusniaga menggunakan internet. (Boleh pilih lebih daripada satu)</b><br>
		<i>Please indicate the type of platform of your establishment used for transactions using the internet. (May choose more than one)</i><br>
		<span class="badge badge-warning">
		<strong>Atas talian</strong>/<i>Online</i> :
		</span><!-- span class="badge badge-warning" -->
		<div class="row justify-content-between">
		<div class="col-4">
			<table><tr>
			<td>F1503</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b> Media social  (cth: Facebook, Instagram dan Blogs)</b><br>
			<i>Social media (e.g. Facebook, Instagram and Blogs)</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		<div class="col-4"></div><!-- class="col-4" -->
		</div><!-- class="row justify-content-between" -->
		<span class="badge badge-warning">
		<strong>e_Dagang</strong>/<i>e-Dagang / e-Commerce</i>:
		</span><!-- span class="badge badge-warning" -->
		<div class="row justify-content-between">
		<div class="col-4">
			<table><tr>
			<td>F1504</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b> Laman web kepunyaan sendiri</b><br>
			<i>Website owned by your establishment</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		<div class="col-5">
			<table><tr>
			<td>F1506</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b> Rangkaian persendirian yang ditetapkan (cth: extranet, EDI)</b><br>
			<i>Designated private network (e.g.: extranet, EDI)</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		</div><!-- class="row justify-content-between" -->
		<div class="row justify-content-between">
		<div class="col-4">
			<table><tr>
			<td>F1505</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>Pasaran e-Dagang atas talian (cth: Lazada, Zalora)</b><br>
			<i>Online e-Commerce marketplace (e.g.: Lazada, Zalora)</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		<div class="col-5">
			<table><tr>
			<td>F1507</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b> Aplikasi mudah alih (cth: Grab app, Lazada mobile app)</b><br>
			<i>Mobile app (e.g.: Grab app, Lazada mobile app) </i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		</div><!-- class="row justify-content-between" -->
	</td>
</tr>
<tr>
	<td valign="top"><b>6.3</b></td>
	<td colspan="9">
		<b>Sila nyatakan medium pembayaran yang digunakan oleh pertubuhan tuan bagi urusniaga menggunakan internet.  (Boleh pilih lebih daripada satu)</b><br>
		<i>Please indicate the method of payment of your establishment used for transactions using the internet. (May choose more than one)</i>
		<div class="row justify-content-between">
		<div class="col-4">
			<table><tr>
			<td>F1508</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>Perkhidmatan pembayaran elektronik</b><br>
			<i>Payment gateway</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		<div class="col-5">
			<table><tr>
			<td>F1509</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>Bayaran tunai</b><br>
			<i>Cash on Delivery</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		</div><!-- class="row justify-content-between" -->
	</td>
</tr>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
<tr><td colspan="10" bgcolor="#FFFF99" align="center">&nbsp;</td></tr>
<tr><td colspan="10" bgcolor="#FFFF99" align="center">&nbsp;</td></tr>
<tr>
	<td valign="top">&nbsp;</td>
	<td>
		<span class="badge badge-warning">
		<strong>Atas talian</strong>/<i>Online</i> :
		</span><!-- span class="badge badge-warning" -->
	</td>
<?php 
//$ulangSuku = array('Okt 2017','Nov 2017','Dis 2017','&nbsp;4S 2017','Jan 2018','Feb 2018','Mac 2018','&nbsp;1S 2018');
//$ulangSuku = array('Jan 2018','Feb 2018','Mac 2018','&nbsp;1S 2018','Apr 2018','Mei 2018','Jun 2018','&nbsp;2S 2018');
$ulangSuku = array('Apr 2018','Mei 2018','Jun 2018','&nbsp;2S 2018','Jul 2018','Ogo 2018','Sep 2018','&nbsp;3S 2018');
//$ulangSuku = array('Jul 2018','Ogo 2018','Sep 2018','&nbsp;3S 2018','Okt 2018','Nov 2018','Dis 2018','&nbsp;4S 2018');
foreach ($ulangSuku as $papar):?>
	<td align="center"><?php echo $papar ?></td>
<?php endforeach; ?>
</tr>
<tr>
	<td><b>6.4</b></td>
	<td align="left" class="textdescrp2">
		<b>Jumlah hasil yang diperoleh melalui transaksi atas talian</b><br>
		<i>Total revenue earned from the online transactions</i>
	</td>
<?php $ulang = array('F1510a','F1510b','F1510c','F1510','F1511a','F1511b','F1511c','FF1511');
foreach ($ulang as $papar):
$jumlah = jumlah($this->bentukJadual01[0],$papar);
$suku = ( in_array($papar,array($ulang[3],$ulang[7])) ) ?
	kiraJumlah($this->bentukJadual01[0],$papar) : $papar;
?>
	<td align="left"><?php echo $suku ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td><b>6.5</b></td>
	<td align="left" class="textdescrp2">
		<b>Jumlah perbelanjaan melalui transaksi  atas talian</b><br>
		<i>Total expenditure through online transactions</i>
	</td>
<?php $ulang = array('F1512a','F1512b','F1512c','FF1512','F1513a','F1513b','F1513c','F1513');
foreach ($ulang as $papar):
$jumlah = jumlah($this->bentukJadual01[0],$papar);
$suku = ( in_array($papar,array($ulang[3],$ulang[7])) ) ?
	kiraJumlah($this->bentukJadual01[0],$papar) : $papar;
?>
	<td align="left"><?php echo $suku ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td valign="top">&nbsp;</td>
	<td>
		<span class="badge badge-warning">
		<strong>e_Dagang</strong>/<i>e-Dagang / e-Commerce</i>:
		</span><!-- span class="badge badge-warning" -->
	</td>
	<td colspan="8">&nbsp;</td>
</td>
<tr>
	<td><b>6.6</b></td>
	<td align="left" class="textdescrp2">
		<b>Jumlah hasil yang diperoleh melalui transaksi e-Dagang</b><br>
		<i>Total revenue earned from the e-Commerce transactions</i>
	</td>
<?php $ulang = array('F1514a','F1514b','F1514c','F1514','F1515a','F1515b','F1515c','F1515');
foreach ($ulang as $papar):
$jumlah = jumlah($this->bentukJadual01[0],$papar);
$suku = ( in_array($papar,array($ulang[3],$ulang[7])) ) ?
	kiraJumlah($this->bentukJadual01[0],$papar) : $papar;
?>
	<td align="left"><?php echo $suku ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td><b>6.6</b></td>
	<td align="left" class="textdescrp2">
		<b>Jumlah perbelanjaan melalui transaksi e-Dagang</b><br>
		<i>Total expenditure through e-Commerce transactions</i>
	</td>
<?php 
$ulang = array('F1516a','F1516b','F1516c','F1516','F1517a','F1517b','F1517c','F1517');
foreach ($ulang as $papar):
$jumlah = jumlah($this->bentukJadual01[0],$papar);
$suku = ( in_array($papar,array($ulang[3],$ulang[7])) ) ?
	kiraJumlah($this->bentukJadual01[0],$papar) : $papar;
?>
	<td align="left"><?php echo $suku ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
	</td>
<?php endforeach; ?>
</tr>
</table>
<!-- ************************************************************************************************************************************ -->
</form>
<br><br><br><br><br>