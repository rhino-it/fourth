<?php 
foreach ($data_patients as $d_p) {
?>
<div class="row">
	<div class="col rightside">Ф.И.О.</div>
	<div class="w-100"></div>
	<div class="col rightside">Возраст</div>
	<div class="w-100"></div>
	<div class="col rightside">Адрес</div>
	<div class="w-100"></div>
	<div class="col rightside">Телефон</div>
	<div class="w-100"></div>
	<div class="col rightside">Дата</div>
	<div class="w-100 border-top pt-3 mt-3"></div>
	<div class="col leftside"><?php echo $d_p['name']; ?></div>
	<div class="w-100"></div>
	<div class="col leftside" ><?php echo $d_p['birthday']; ?></div>
	<div class="w-100"></div>
	<div class="col leftside"><?php echo $d_p['address']; ?></div>
	<div class="w-100"></div>
	<div class="col leftside"><?php echo $d_p['phone_number']; ?></div>
	<div class="w-100"></div>
	<?php foreach ($last_data as $l_p) {
	 ?>
	 <div class="col leftside"><?php echo $l_p['data']; ?></div>
	<?php } ?>
</div>
<?php
} ?>