<?php
include 'atas/diatas.php';
include 'atas/menu_atas.php';
?>


<hr><a target="_blank" href="https://ejob.stats.gov.my">Ejob</a><hr>

<pre>
Furmula:
Gaji Pokok X 12 bulan
-------------------------
(bil. hari bekerja dlm setahun) 313 X 8 (jam sehari)

Contoh
<font color="red">1500</font> X 12
--------------
313 x 8
</pre>
<hr>
<form class="container">
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputGaji">Gaji</label>
		<input type="email" class="form-control" id="gaji" placeholder="Gaji">
	</div>
	<div class="form-group col-md-6">
		<label for="inputBulan">Bulan</label>
		<input type="password" class="form-control" id="bulan" value="12" placeholder="12">
	</div>
</div>
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
    $('#texttwo').keyup(function(){
        var textone;
        var texttwo;
        textone = parseFloat($('#textone').val());
        texttwo = parseFloat($('#texttwo').val());
        var result = textone + texttwo;
        $('#result').val(result.toFixed(0));
    });
</script>

</body>
</html>
