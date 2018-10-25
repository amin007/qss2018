<?php
$respon = (isset($this->bentukJadual01[0]['F0002'])) ? $this->bentukJadual01[0]['F0002'] : null;
$newss = (isset($this->bentukJadual01[0]['newss'])) ? $this->bentukJadual01[0]['newss'] : null;
$nama_pertubuhan = (isset($this->bentukJadual01[0]['nama_pertubuhan'])) ? $this->bentukJadual01[0]['nama_pertubuhan'] : null;
$msic2008 = (isset($this->bentukJadual01[0]['msic2008'])) ? $this->bentukJadual01[0]['msic2008'] : null;
$F1201 = (isset($this->bentukJadual01[0]['F1201'])) ? $this->bentukJadual01[0]['F1201'] : null;
?>
<table width="961" align="center" height="20">
<tr><td height="20" colspan="4" align="left" >
	<p><div class="textdescrp"></div></p>
</td></tr>
<tr style="display:none;">
	<td colspan="4" align="left" height="20" >
		<input type="hidden" name="nosiri" id="nosiri" value="" />
		<input type="hidden" name="kod" id="kod" value="01" />
		Kod Respon<input type="text" name="kod_respon" id="kod_respon" size="4" />
		Status<input type="text" name="cara_terima" id="cara_terima" size="8" />
		<input  name="get_lang" id="get_lang" type="hidden" />
	</td>
</tr>
<tr height="30">
	<td width="600" align="left" valign="top" class="textdescrp2">No.&nbsp;Pendaftaran Syarikat/Perniagaan&nbsp;:</td>
	<td align="left" valign="top">
		<form class="mx-2 my-auto d-inline w-50" action="<?php echo URL ?>qss/temui/400/1/-16" method="POST">
			<input type="text" name="cari"
			value="<?php echo $newss ?>"
			placeholder="Cari Newss / Nama" class="form-control" />
		</form><!-- / class="form-inline" -->
		<!-- input type="text" name="no_ssm" id="no_ssm" value="" disabled="disabled" />
		<input type="hidden" name="iduser" id="iduser" value="" / -->
	</td>
	<td width="600" rowspan="4" align="left">
		<table width="108" align="center">
		<tr><td width="98" bgcolor="#FF0000"><div align="center"><em>Error</em></div></td></tr>
		<tr><td bgcolor="#bffcc0"><div align="center"><em>Force Accept</em></div></td></tr>
		<tr><td bgcolor="#87ceeb" align="center">Respon:<?php echo $respon ?></td></tr>
		</table><br>
		<table border="1" id="maklumat">
		<tr><td bgcolor="#e9e7e9">No Siri</td><td><?php echo $newss ?></td></tr>
		<tr><td bgcolor="#e9e7e9">Suku&nbsp;Tahun</td><td>1</td></tr>
		<tr><td bgcolor="#e9e7e9">Tahun</td><td>2018</td></tr>
		<tr><td bgcolor="#e9e7e9">BBU/SBU</td><td>SBU</td></tr>
		</table>
	</td>
	<td width="600" rowspan="4" align="left">
		<table border="1" id="maklumat"><?php
$ulang = array('kod_negeri'=>'Kod&nbsp;Negeri',
	'pusat_operasi'=>'Pusat&nbsp;Operasi',
	'strata'=>'Strata',
	//'F0002'=>'Respon',
	'msic2008'=>'Kod&nbsp;Industri',
	);
foreach ($ulang as $papar => $lihat):
	$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : null;
	echo "\n\t\t" . '<tr><td bgcolor="#e9e7e9">' . $lihat . '</td><td>'
	. $jumlah . '</td></tr>';
endforeach;

echo "\n\t\t" . '<tr><td bgcolor="#e9e7e9">Keterangan&nbsp;MSIC</td><td>'
. '<textarea cols="50" rows="2" style="resize:none;">' . $F1201
. '</textarea></td></tr>' . "\n\t\t";
?></table>
	</td>
</tr>
<tr>
	<td align="left" class="textdescrp2">Syarikat :</td>
	<td align="left"><input type="text" name="msic" value="<?php echo $nama_pertubuhan ?>"
	maxlength="70" size="70" disabled="disabled"></td>
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
<!-- tr>
	<td align="left" class="textdescrp2">&nbsp;</td>
	<td align="left"><textarea name="msic_desc" id="msic_desc" cols="70" rows="3" style="resize:none;" disabled="disabled"></textarea></td>
</tr -->
</table>
<!-- ************************************************************************************************************************************ -->
<form id="form1" name="form1" method="post" action="pengguna_dalam/kemaskini/borang/borangA_proses.php">
<!-- ************************************************************************************************************************************ -->
<table width="99%" border="0" align="center" id="tbl2">
<tr>
	<td height="27" colspan="9" bgcolor="#FFFF99"><div align="center"><b>BAHAGIAN A: HASIL (Tidak termasuk CBP)</b></div></td>
</tr>
<tr>
	<td height="39" align="left" bgcolor="#FFFF99" class="textdescrp1"><strong>1. HASIL</strong></td>
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
	<td align="left" class="textdescrp2" >1.1 Hasil kendalian / Perolehan / Jualan
	<a href="nota/nota-1.php?a=315&b=01&c=49" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
	<i class="fas fa-info-circle"></i></a></td>
<?php
//$ulang = array('F0007a','F0007b','F0007c','F0007d','F0008a','F0008b','F0008c','F0008d');
$ulang = array('F0007a','F0007b','F0007c','F0007','F0008a','F0008b','F0008c','F0008');
foreach ($ulang as $papar):
$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : 0; ?>
	<td align="left"><?php echo $papar ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td align="left" class="textdescrp2">1.2 Pendapatan lain
	<a href="nota/nota-1-3.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
	<i class="fas fa-info-circle"></i></a></td>
<?php
//$ulang = array('F0009a','F0009b','F0009c','F0009d','F0010a','F0010b','F0010c','F0010d');
$ulang = array('F0009a','F0009b','F0009c','F0009','F0010a','F0010b','F0010c','F0010');
foreach ($ulang as $papar):
$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : 0; ?>
	<td align="left"><?php echo $papar ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td height="28" align="left" class="textdescrp1">1.3 JUMLAH HASIL</td>
<?php
//$ulang = array('F0011a','F0011b','F0011c','F0011d','F0012a','F0012b','F0012c','F0012d');
$ulang = array('F0011a','F0011b','F0011c','F0011','F0012a','F0012b','F0012c','F0012');
foreach ($ulang as $papar):
$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : 0; ?>
	<td align="left"><?php echo $papar ?><br>
		<input type="text" id="<?php echo $papar ?>" 
		style="width:120px;text-align:right;background-color:#e1e4e2;"
		value="<?php //echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999" readonly/>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td colspan="1" height="53" align="left" class="textdescrp2">
	1.4 Catatan<!-- Jika jumlah hasil yang dilaporkan untuk suku tahun ini meningkat<br>
	atau menurun sekurang-kurangnya 30% berbanding suku tahun<br>
	sebelumnya,	sila nyatakan sebab berlakunya perbezaan tersebut. -->
	</td>
	<td colspan="6" align="left">
		<textarea name="hasil_a" id="hasil_a" cols="100" rows="3"
		style="resize:none;" tabindex="9">KERETA SEDANG DI BAIK PULIH SEPANJANG BULAN MAC</textarea>
	</td>
</tr>
<tr>
	<td height="27" colspan="9" bgcolor="#FFFF99"><div align="center"><b>BAHAGIAN B: PERBELANJAAN (Tidak termasuk CBP)</b></div></td>
</tr>
<tr>
	<td height="39" align="left" bgcolor="#FFFF99" class="textdescrp1"><strong>2. PERBELANJAAN</strong></td>
	<!-- td width="202" bgcolor="#FFFF99"><div align="center">Suku Tahun (4S 2017)<br />1 Oktober - 31 Disember 2017</div></td -->
	<!-- td width="196" bgcolor="#FFFF99"><div align="center">Suku Tahun (1S 2018)<br />1 Januari - 31 Mac 2018</div></td -->
<?php foreach ($ulangSuku as $papar):?>
	<td bgcolor="#FFFF99" align="center"><?php echo $papar ?></td>
<?php endforeach; ?>
</tr>
<tr>
	<td align="left" class="textdescrp2">2.1 Perbelanjaan kendalian / Kos Jualan
		<a href="nota/nota-2-1.php?b=01" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
		<i class="fas fa-info-circle"></i></a>
	</td>
<?php $ulang = array('F0013a','F0013b','F0013c','F0013','F0014a','F0014b','F0014c','F0014');
foreach ($ulang as $papar):
$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : 0; ?>
	<td align="left" ><div align="left"><?php echo $papar ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/></div>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td align="left" class="textdescrp2">2.2 Perbelanjaan lain
		<a href="nota/nota-2-3.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
		<i class="fas fa-info-circle"></i></a>
	</td>
<?php $ulang = array('F0015a','F0015b','F0015c','F0015','F0016a','F0016b','F0016c','F0016');
foreach ($ulang as $papar):
$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : 0; ?>
	<td align="left" ><div align="left"><?php echo $papar ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/></div>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td align="left" class="textdescrp2">2.3 Jumlah Gaji & Upah
		<a href="nota/nota-2-4.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
		<i class="fas fa-info-circle"></i></a>
	</td>
<?php $ulang = array('F0017a','F0017b','F0017c','F0017','F0018a','F0018b','F0018c','F0018');
foreach ($ulang as $papar):
$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : 0; ?>
	<td align="left" ><div align="left"><?php echo $papar ?><br>
		<input type="text" id="<?php echo $papar ?>" style="width:120px;text-align:right;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/></div>
	</td>
<?php endforeach; ?>
</tr>
<tr>
	<td height="31" align="left" class="textdescrp1"><span class="textdescrp2">2.4 JUMLAH PERBELANJAAN</span></td>
<?php $ulang = array('F0019a','F0019b','F0019c','F0019','F0020a','F0020b','F0020c','F0020');
foreach ($ulang as $papar):
$jumlah = (isset($this->bentukJadual01[0][$papar])) ?
	$this->bentukJadual01[0][$papar] : 0; ?>
	<td align="left" ><div align="left"><?php echo $papar ?><br>
		<input type="text" id="<?php echo $papar ?>" 
		style="width:120px;text-align:right;background-color:#e1e4e2;"
		value="<?php echo $jumlah ?>"
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
     </div>
	</td>
<?php endforeach; ?>
</tr>
<tr>
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
<tr>
	<td height="27" colspan="9" bgcolor="#FFFF99"><div align="center"><b>BAHAGIAN C: BILANGAN PEKERJA (Pada akhir suku tahun)</b></div></td>
</tr>
<tr>
	<td height="39" align="left" bgcolor="#FFFF99" class="textdescrp1">&nbsp;</td>
	<td bgcolor="#FFFF99">Okt 2017</td><td bgcolor="#FFFF99">Nov 2017</td><td bgcolor="#FFFF99">Dis 2017</td>
	<!-- td width="202" bgcolor="#FFFF99"><div align="center">Suku Tahun (4S 2017)<br />1 Oktober - 31 Disember 2017</div></td -->
	<!-- td width="196" bgcolor="#FFFF99"><div align="center">Suku Tahun (1S 2018)<br />1 Januari - 31 Mac 2018</div></td -->
	<?php
foreach ($ulangSuku as $papar):?>
	<td bgcolor="#FFFF99" align="center"><?php echo $papar ?></td>
<?php endforeach; ?>
</tr>
<tr>
	<td height="27" align="left" class="textdescrp1"><strong>3. JUMLAH PEKERJA</strong> &nbsp;
		<a href="nota/nota-3.php" onClick="return hs.htmlExpand(this, { objectType: 'iframe' } )">
		<i class="fas fa-info-circle"></i></a>
	</td>
<?php for ($i = 1; $i <=3; $i++):?>
	<td align="left" ><div align="left">RM
		<input type="text" style="width:120px;text-align:right;" value="" 
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
		</div>
	</td>
<?php endfor; ?>
	<td>
		<input  name="f2122c_p" type="text" id="f2122c_p" 
		style="width:120px;text-align:right;" value="1" 
		tabindex="21" class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
		F0021</td>
<?php for ($i = 1; $i <=3; $i++):?>
	<td align="left" ><div align="left">RM
		<input type="text" style="width:120px;text-align:right;" value="" 
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
		</div>
	</td>
<?php endfor; ?>
	<td>
		<input  name="f2122c_c" type="text" id="f2122c_c" 
		style="width:120px;text-align:right;" value="1" tabindex="22"
		onblur="this.value=addCommas(this.value);info_pekerja_A();" 
		class="auto" data-v-max="999999999999" data-v-min="-9999999999999"/>
		F0022</td>
</tr>
<tr>
	<td colspan="1" height="60" align="left" class="textdescrp2">
	3.1 Jika jumlah pekerja yang dilaporkan untuk suku tahun ini meningkat<br>
	atau menurun sekurang-kurangnya 30% berbanding suku tahun<br>
	sebelumnya,	sila nyatakan sebab berlakunya perbezaan tersebut.
	</td>
	<td colspan="6" align="left">
		<textarea name="pekerja_c" id="pekerja_c" cols="90" rows="3" 
		style="resize:none;" tabindex="23"></textarea >
	</td>
</tr>
</table>


<div class='menu1' style='display: none'>
<button id="btnHide">X</button><br/>
Check number 0003 / 0005 <br/>
</div>
<div class='menu2' style='display: none'>
<button id="btnHide2">X</button><br/>
Check number 0010 / 0011 <br/>
</div>
<div class='menu3' style='display: none'>
<button id="btnHide3">X</button><br/>
Check number 0002 / 0004 <br/>
</div>
<div class='menu4' style='display: none'>
<button id="btnHide4">X</button><br/>
Check number 0012 / 0013 <br/>
</div>
<div class='menu5' style='display: none'>
Check number 0074 <br/>
</div>
<div class='error30percent' id="hasilkurang" style='display: none'>
Penurunan Jumlah Hasil kurang daripada 30% berbanding suku tahun sebelumnya.Sila nyatakan sebab berlakunya perbezaan tersebut. <br/>
</div>
<div class='error30percent' id="hasilmelebihi" style='display: none'>
Kenaikan Jumlah Hasil melebihi 30% berbanding suku tahun sebelumnya.Sila nyatakan sebab berlakunya perbezaan tersebut. <br/>
</div>
<div class='error30percent' id="belanjakurang" style='display: none'>
Penurunan Jumlah Perbelanjaan kurang daripada 30% berbanding suku tahun sebelumnya.Sila nyatakan sebab berlakunya perbezaan tersebut. <br/>
</div>
<div class='error30percent' id="belanjamelebihi" style='display: none'>
Kenaikan Jumlah Perbelanjaan melebihi 30% berbanding suku tahun sebelumnya.Sila nyatakan sebab berlakunya perbezaan tersebut. <br/>
</div>
<div class='error30percent' id="kerjakurang" style='display: none'>
Penurunan Jumlah Perbelanjaan kurang daripada 30% berbanding suku tahun sebelumnya.Sila nyatakan sebab berlakunya perbezaan tersebut. <br/>
</div>
<div class='error30percent' id="kerjamelebihi" style='display: none'>
Kenaikan Jumlah Pekerja melebihi 30% berbanding suku tahun sebelumnya.Sila nyatakan sebab berlakunya perbezaan tersebut. <br/>
</div>
<style>
.menu1 {
   
    position:fixed;
    border: 1px solid black;
    right:1%;
	padding:5px 5px;
	background-color:#bffcc0;
	color:black;
}
.menu2 {
   
    position:fixed;
    border: 1px solid black;
    background: #fff;
	margin-top:60px;
    right:1%;
	padding:5px 5px;
	background-color:#bffcc0;
	color:black;
	
}
.menu3 {
   
    position:fixed;
    border: 1px solid black;
    background: #fff;
	margin-top:120px;
    right:1%;
	padding:5px 5px;
	background-color:red;
	color:white;
	
}
.menu4 {
   
    position:fixed;
    border: 1px solid black;
    background: #fff;
	margin-top:180px;
    right:1%;
	padding:5px 5px;
	background-color:#bffcc0;
	color:black;
	
}
.menu5 {
   
    position:fixed;
    border: 1px solid black;
    background: #fff;
	margin-top:120px;
    right:1%;
	padding:5px 5px;
	background-color:red;
	color:white;
	
}
.error30percent
{
   
    position:relative;
    border: 1px solid black;
    background: #fff;
	margin-top:0px;
	text-align:center;
	padding:5px 5px;
	background-color:#7E0E0E;
	color:white;
	border-color:#F00;
	font-size:12px; font-weight:100;
	font-family: "Helvetica Neue", Arial, "Liberation Sans", FreeSans, sans-serif;
	
}

</style>
</form>