<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$product = mysqli_query($conn,"SELECT * FROM productstable ORDER BY productid ASC" );
if (!empty($product)) {
	foreach($product as $key =>$value){
?>
	<div class = "product-item">
		<form method="post" action="index.php?action=add&code=<?php echo $product[$key][$code]; ?> ">
		<img src="<?php echo $product[$key]["imagelink"]; ?>">
		<div class="product-title"><?php echo $product[$key]["productname"]; ?></div>
		<div class="product-price"><?php echo $product[$key]["price"]; ?></div>
		</form>
	</div>
<?php
	}
}
?>