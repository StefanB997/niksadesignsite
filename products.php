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

?>
<div class="products-container">
	<div class="products-content">
		<div class="categories-holder">
			<div class="categories">
				<ul class="produkti">
					<?php
						$sql = 'select * from p_kategorii';
	 					$query = $db->query($sql);
	  					$products = $query->fetchAll(PDO::FETCH_ASSOC);
						foreach ($products as $cat){
							echo '<li>'.$cat['ime'].'</li>';
						}
					?>
				</ul>
			</div>
		</div>
		<div class="products-holder">
			<div class="products">
				<?php 
					$sql = 'select * from p_produkti';
	  				$query = $db->query($sql);
	  				$products = $query->fetchAll(PDO::FETCH_ASSOC);

	  				foreach($products as $product){
	  					if($product % 2 == 0) { 
		  					echo '<div class="row"'.(floor($key/3)+1).'>';
	  					}
	  						echo '<div class="product"'.'>';
		  					echo '<img src="'.$product['image'].'">';
		  					echo '<div class="product-text"'.'>';
		  					echo '<p> Произведувач: '.$product['proizveduvac'].'</p>';
		  					echo '<p> Пакување: '.$product['pakuvanje'].'</p>';
		  					echo '<p class="cena"> Цена: '.$product['cena(mkd)'].'</p>';
		  					echo '</div>';
		  					echo '</div>';
	  					
	  				}
				?>
			</div>
		</div>
	</div>
</div>

</body>
</html>
