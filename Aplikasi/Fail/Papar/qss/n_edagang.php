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
	<td><b>6.</b><br><i>6.</i></td>
	<td colspan="8">
		<b>PERKHIDMATAN ATAS TALIAN DAN e-DAGANG</b><br>
		<i>ONLINE SERVICES AND e-COMMERCE</i>
	</td>
</tr>
<tr>
	<td valign="top"><b>6.1</b></td>
	<td colspan="8">
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
	<td colspan="8">
		<b>Sila nyatakan jenis platform yang digunakan oleh pertubuhan tuan bagi urusniaga menggunakan internet. (Boleh pilih lebih daripada satu)</b><br>
		<i>Please indicate the type of platform of your establishment used for transactions using the internet. (May choose more than one)</i><br>
		<b>Atas talian</b>/<i>Online</i>
		<div class="row justify-content-between">
		<div class="col-4">
			<table><tr>
			<td>F1503</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>Perkhidmatan pembayaran elektronik</b><br>
			<i>Payment gateway</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		<div class="col-4"></div><!-- class="col-4" -->
		</div><!-- class="row justify-content-between" -->
		<b>e_Dagang</b>/<i>e-Dagang / e-Commerce: </i>
		<div class="row justify-content-between">
		<div class="col-4">
			<table><tr>
			<td>F1504</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>Perkhidmatan pembayaran elektronik</b><br>
			<i>Payment gateway</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		<div class="col-4">
			<table><tr>
			<td>F1506</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>Perkhidmatan pembayaran elektronik</b><br>
			<i>Payment gateway</i></td>
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
			<td><b>Perkhidmatan pembayaran elektronik</b><br>
			<i>Payment gateway</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		<div class="col-4">
			<table><tr>
			<td>F1507</td>
			<td>
				<table border="1"><tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr></table>
			</td>
			<td><b>Perkhidmatan pembayaran elektronik</b><br>
			<i>Payment gateway</i></td>
			</tr></table>
		</div><!-- class="col-4" -->
		</div><!-- class="row justify-content-between" -->

	</td>
</tr>
<tr>
	<td valign="top"><b>6.3</b></td>
	<td colspan="8">
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
		<div class="col-4">
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
<tr>
	<td colspan="10" bgcolor="#FFFF99"><div align="center"><b>6.4</b></div></td>
</tr>
<tr bgcolor="#FFFF99">
	<td>&nbsp;</td>
	<td align="left" class="textdescrp1"><strong>2. PERBELANJAAN</strong></td>
	<!-- td width="202" bgcolor="#FFFF99"><div align="center">Suku Tahun (4S 2017)<br />1 Oktober - 31 Disember 2017</div></td -->
	<!-- td width="196" bgcolor="#FFFF99"><div align="center">Suku Tahun (1S 2018)<br />1 Januari - 31 Mac 2018</div></td -->
<?php 
//$ulangSuku = array('Okt 2017','Nov 2017','Dis 2017','&nbsp;4S 2017','Jan 2018','Feb 2018','Mac 2018','&nbsp;1S 2018');
//$ulangSuku = array('Jan 2018','Feb 2018','Mac 2018','&nbsp;1S 2018','Apr 2018','Mei 2018','Jun 2018','&nbsp;2S 2018');
$ulangSuku = array('Apr 2018','Mei 2018','Jun 2018','&nbsp;2S 2018','Jul 2018','Ogo 2018','Sep 2018','&nbsp;3S 2018');
//$ulangSuku = array('Jul 2018','Ogo 2018','Sep 2018','&nbsp;3S 2018','Okt 2018','Nov 2018','Dis 2018','&nbsp;4S 2018');
foreach ($ulangSuku as $papar):?>
	<td bgcolor="#FFFF99" align="center"><?php echo $papar ?></td>
<?php endforeach; ?>
</tr>
<tr>
	<td>&nbsp;</td>
	<td align="left" class="textdescrp2">2.1 Perbelanjaan kendalian / Kos Jualan
		<a href="nota/nota-2-1.php?b=01" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
		<i class="fas fa-info-circle"></i></a>
	</td>
<?php $ulang = array('F0013a','F0013b','F0013c','F0013','F0014a','F0014b','F0014c','F0014');
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
	<td>&nbsp;</td>
	<td align="left" class="textdescrp2">2.2 Perbelanjaan lain
		<a href="nota/nota-2-3.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
		<i class="fas fa-info-circle"></i></a>
	</td>
<?php $ulang = array('F0015a','F0015b','F0015c','F0015','F0016a','F0016b','F0016c','F0016');
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
	<td>&nbsp;</td>
	<td align="left" class="textdescrp2">2.3 Jumlah Gaji & Upah
		<a href="nota/nota-2-4.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
		<i class="fas fa-info-circle"></i></a>
	</td>
<?php $ulang = array('F0017a','F0017b','F0017c','F0017','F0018a','F0018b','F0018c','F0018');
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
	<td>&nbsp;</td>
	<td height="31" align="left" class="textdescrp1"><span class="textdescrp2">2.4 JUMLAH PERBELANJAAN</span></td>
<?php 
$ulang = array('F0019a','F0019b','F0019c','F0019','F0020a','F0020b','F0020c','F0020');
foreach ($ulang as $papar):
$jumlah = jumlah($this->bentukJadual01[0],$papar);
$suku = ( in_array($papar,array($ulang[3],$ulang[7])) ) ?
	kiraJumlah($this->bentukJadual01[0],$papar) : $papar;
?>
	<td align="left"><?php echo $suku ?><br>
		<input type="text" id="<?php echo $papar ?>" 
		style="width:120px;text-align:right;background-color:#e1e4e2;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td>&nbsp;</td>
	<td colspan="1" height="60" align="left" class="textdescrp2">
	2.5 Jika jumlah perbelanjaan yang dilaporkan untuk suku tahun ini meningkat<br>
	atau menurun sekurang-kurangnya 30% berbanding suku tahun<br>
	sebelumnya,	sila nyatakan sebab berlakunya perbezaan tersebut.
	</td>
	<td colspan="6" align="left">
		<textarea name="perbelanjaan_b" id="perbelanjaan_b" cols="100" rows="3" 
		style="resize:none;" tabindex="20">KERETA SEDANG DI BAIK PULIH SEPANJANG BULAN MAC</textarea>
	</td>
</tr>
</table>
<!-- ************************************************************************************************************************************ -->
</form>