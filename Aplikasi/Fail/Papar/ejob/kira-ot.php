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
		<label for="inputEmail4">Email</label>
		<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
	</div>
	<div class="form-group col-md-6">
		<label for="inputPassword4">Password</label>
		<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
	</div>
</div>
<div class="form-group">
	<label for="inputAddress">Address</label>
	<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="form-group">
	<label for="inputAddress2">Address 2</label>
	<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		<label for="inputCity">City</label>
		<input type="text" class="form-control" id="inputCity">
	</div>
	<div class="form-group col-md-4">
		<label for="inputState">State</label>
		<select id="inputState" class="form-control">
		<option selected>Choose...</option>
		<option>...</option>
		</select>
	</div>
	<div class="form-group col-md-2">
		<label for="inputZip">Zip</label>
		<input type="text" class="form-control" id="inputZip">
	</div>
</div>
<div class="form-group">
	<div class="form-check">
		<input class="form-check-input" type="checkbox" id="gridCheck">
		<label class="form-check-label" for="gridCheck">Check me out</label>
	</div>
</div>
	<button type="submit" class="btn btn-primary">Sign in</button>
</form>

<?php include 'atas/dibawah.php'; ?>