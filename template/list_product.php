<?php
	require_once("/xampp/htdocs/lab03/template/Entities/product.class.php");	
?>
<?php
	include_once("header.php");
	$prods = Product::list_product();
	?>
<div class="container text-center">

<div class="row">
<?php
	foreach($prods as $item){
		?>
		<div class="col-sm-4">
			<img src="<?php echo "".$item["Picture"];?>" class="img-responsive" style="width:100%" alt="Image">
			<p class="text-danger"><?php echo $item["ProductName"];?></p>
			<p class-"text-info"><?php echo $item["Price"];?></p>
			<p>
			<button type="button" class="btn btn-primary">Mua hang</button>
			</p>
		</div>
	<?php } ?>
<?php	include_once("footer.php");
?>