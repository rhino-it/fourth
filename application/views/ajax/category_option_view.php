<?php 
foreach ($query_category as $item_category) {
	?>
	<li id="<?php echo $_SESSION['counter_medic']; ?>" value="<?php echo $item_category['id'];  ?>"><?php echo $item_category['name'].'';?> ( <span><?php echo $item_category['price'];  ?></span> сом )</li>	
	<?php 
	$_SESSION['counter_medic']++;
} ?>
<script type="text/javascript">
	list();	
</script>