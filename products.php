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

					<!-- <li><a href="#" class="h1">Бои и Лакови</a></li> -->
<!-- 				<li><a href="#"></a></li>  // ZA PODKATEGORII
					<li><a href="#"></a></li> -->

					<!-- <li><a href="#" class="h1">Железарија</a></li> -->
<!-- 					<li><a href="#"></a></li>		
					<li><a href="#"></a></li> -->

					<!-- <li><a href="#" class="h1">Електрика</a></li>
					<li><a href="#"></a></li>	
					<li><a href="#"></a></li>
					<li><a href="#"></a></li> -->

					<!-- <li><a href="#" class="h1">Водовод</a></li> -->
<!-- 					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li> -->

					<!-- <li><a href="#" class="h1">Санитарија</a></li> -->
<!-- 					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li> -->

					<!-- <li><a href="#" class="h1">Градежни Материјали</a></li> -->
<!-- 					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li> -->
				</ul>
			</div>
		</div>
		<div class="products-holder">
			<div class="products">
				<ul>
					<li><div class="product"><a href="#"></a></div></li>
					<li><div class="product"><a href="#"></a></div></li>
					<li><div class="product"><a href="#"></a></div></li>
				</ul>
			</div>
		</div>
	</div>
</div>

</body>
</html>
