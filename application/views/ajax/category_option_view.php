<?php 
$i=0;
foreach ($query_category as $item_category) {
	?>
	<li id="pp<?php echo $i;?>" value="<?php echo $item_category['id'];  ?>"><?php echo $item_category['name'].'';?> ( <span><?php echo $item_category['price'];  ?></span> сом )</li>	
	<?php 
	$i++;
} ?>
<script type="text/javascript">
	list();	
</script>