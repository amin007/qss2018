<?php
include 'atas/diatas.php';
include 'atas/menu_atas.php';
?>
<hr><a target="_blank" href="https://ejob.stats.gov.my">Ejob</a><hr>
<form class="container">
<!-- ========================================================================================================= -->
<div class="form-row">
	<div class="form-group col-md-12"><pre>
		Furmula:
		Gaji Pokok X 12 bulan
		-------------------------
		(bil. hari bekerja dlm setahun) 313 X 8 (jam sehari)

		Contoh
		<font color="red">1500</font> X 12
		--------------
		313 x 8</pre>
	</div>
</div>
<!-- ========================================================================================================= -->
<div class="form-row">
	<div class="form-group col-md-3">
		<label for="inputBilStaf">Bil Staf</label>
		<input type="text" class="form-control" id="bilStaf" value="9">
	</div>
	<div class="form-group col-md-3">
		<label for="inputOtStaf">Jum OT Staf</label>
		<input type="text" class="form-control" id="jumOtStaf" value="307">
	</div>
	<div class="form-group col-md-3">
		<label for="inputJumGaji">Jum Gaji Staf</label>
		<input type="text" class="form-control" id="jumGajiStaf" value="17040">
	</div>
</div>
<!-- ========================================================================================================= -->
<div class="form-row">
	<div class="form-group col-md-3">
		<label for="inputBulan">Bulan</label>
		<input type="text" class="form-control" id="bulan" value="12" placeholder="12">
	</div>
	<div class="form-group col-md-3">
		<label for="inputGaji">Gaji</label>
		<input type="text" class="form-control" id="gaji" placeholder="Gaji">
	</div>
	<div class="form-group col-md-3">
		<label for="inputBulan">Gaji*Bulan</label>
		<input type="text" class="form-control" id="gajibulan">
	</div>
</div>
<!-- ========================================================================================================= -->
<div class="form-row">
	<div class="form-group col-md-3">
		<label for="inputHari">bil. hari bekerja dlm setahun</label>
		<input type="text" class="form-control" id="harisetahun" value="313" placeholder="harisetahun">
	</div>
	<div class="form-group col-md-3">
		<label for="inputJam">jam sehari</label>
		<input type="text" class="form-control" id="jamsehari" value="8" placeholder="jamsehari">
	</div>
</div>
<!-- ========================================================================================================= -->
<div class="form-row">
	<div class="form-group col-md-3">
		<label for="inpuTeksKira">Kira Jam OT</label>
		<input type="text" class="form-control" id="teksKira01">
	</div>
	<div class="form-group col-md-3">
		<label for="inpuTeksKira">Kira Bayaran OT</label>
		<input type="text" class="form-control" id="teksKira02">
	</div>
</div>
<!-- ========================================================================================================= -->
</form>

<?php echo "\n"; ?><!-- Footer
================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2016. Theme <?php
$theme = ( !isset($pilih) ) ? 'Asal Bootstrap Twitter' : $pilih;
echo $theme = (isset($theme)) ? $theme : null; ?>
		</span>
	</div>
</footer -->
<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="<?=JQUERY?>"></script>
<script type="text/javascript" src="<?=BOOTSTRAPJS411?>"></script>
<?php
if (isset($this->js))
{
    foreach ($this->js as $js)
    {
        echo "\n";
		?><script type="text/javascript" src="<?php echo $js ?>"></script><?php
    }
}
?>
<script>
$('#gaji').keyup(function(){
	var bilStaf;
	var jumOtStaf;
	var jumGajiStaf;
	bilStaf = parseFloat($('#bilStaf').val());
	jumOtStaf = parseFloat($('#jumOtStaf').val());
	jumGajiStaf = parseFloat($('#jumGajiStaf').val());
	var gajiSebulan = jumGajiStaf / bilStaf;
	/* ================================================================== */
	var bulan;
	bulan = parseFloat($('#bulan').val());
	var gajibulan = gajiSebulan * bulan; /* kira teks1 */
	/* ================================================================== */
	$('#gaji').val(gajiSebulan.toFixed(0));
	$('#gajibulan').val(gajibulan.toFixed(0));
});

$('#teksKira01').keyup(function(){
	var gaji; var bulan;
	var harisetahun; var jamsehari;
	var teks1; var teks2;
	gaji = parseFloat($('#gaji').val());
	bulan = parseFloat($('#bulan').val());
	teks1 = gaji * bulan; /* kira teks1 */
	harisetahun = parseFloat($('#harisetahun').val());
	jamsehari = parseFloat($('#jamsehari').val());
	teks2 = harisetahun * jamsehari; /* kira teks2 */
	/*var teksKira = (gaji * bulan)/(harisetahun * jamsehari);*/
	var teksKira01 = teks1 / teks2;
	/* ================================================================== */
	var jumOtStaf;
	jumOtStaf = parseFloat($('#jumOtStaf').val());
	var teksKira02 = teksKira01 * jumOtStaf;
	/* ================================================================== */
	$('#teksKira01').val(teksKira01.toFixed(0));
	$('#teksKira02').val(teksKira02.toFixed(0));
});

</script>
</body>
</html>
