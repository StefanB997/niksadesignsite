<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
	<meta charset="UTF8">
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/products.css">
	<title></title>
</head>
<body>

<?php include 'header.php';
	  include 'general.php';
	  $sql = 'select * from p_kategorii';
	  $query = $db->query($sql);
	  $products = $query->fetchAll(PDO::FETCH_ASSOC);
?>
 



<div class="products-container">
	<div class="products-content">
		<div class="categories-holder">
			<div class="categories">
				<ul class="produkti">
				<?php
					foreach($products as $key => $pro) {
						echo '<li>'.$pro['ime'];'</li>';
					} 
				?>
				</ul>
			</div>
		</div>
		<div class="products-holder">
			<div class="products">
		

			</div>
		</div>
	</div>
</div>

</body>
</html>
