<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="stylesheet" href="styles/products.css">
	<title></title>
</head>
<body>
<?php 
include ('header.php');
?> 
<div class="container">
	<div class="categories">
		<nav>
		    <div class="menu-item">
		      <h4><a href="#">Бои и Лакови</a></h4>
		      <ul>
		      	<li><a href="#">-Емајл Лак</a></li>
		      	<li><a href="#">-Премази</a></li>
		      	<li><a href="#">-Разредувачи</a></li>
		      </ul>
		    </div>
		      
		    <div class="menu-item">
		      <h4><a href="#">Железарија</a></h4>
		      <ul>
		        <li><a href="#">-Завртки</a></li>
		        <li><a href="#">-Жица</a></li>
		        <li><a href="#">-Четки</a></li>
		        <li><a href="#">-Брави</a></li>
		        <li><a href="#">-Алати</a></li>
		      </ul>
		    </div>
		      
		    <div class="menu-item">
		      <h4><a href="#">Електрика</a></h4>
		      <ul>
		        <li><a href="#">-Кабли</a></li>
		        <li><a href="#">-Прекинувачи</a></li>
		        <li><a href="#">-Греачи</a></li>
		        <li><a href="#">-Осигурачи</a></li>
		        <li><a href="#">-Сијалици</a></li>
		      </ul>
		    </div>
		      
		    <div class="menu-item">
		      <h4><a href="#">Водовод</a></h4>
		      <ul>
		        <li><a href="#">-Чешми</a></li>
		        <li><a href="#">-Цевки</a></li>
		        <li><a href="#">-Вентили</a></li>
		      </ul>
		    </div>

		    <div class="menu-item">
		      <h4><a href="#">Санитарија</a></h4>
		      <ul>
		        <li><a href="#">-Казанчиња</a></li>
		        <li><a href="#">-ВЦ Шољи</a></li>
		      </ul>
		    </div>

		   	<div class="menu-item">
		      <h4><a href="#">Градежни Материјали</a></h4>
		      <ul>
		        <li><a href="#">-Гипс Картон</a></li>
		        <li><a href="#">-Стиропор</a></li>
		        <li><a href="#">-Лепаци</a></li>
		        <li><a href="#">-Силикон</a></li>
		        <li><a href="#">-Поликолор</a></li>
		      </ul>
		    </div>
		</nav>
	</div>
	<div class="products">
	</div>
</div>

<?php
include ('footer.php');
?>
<script type="text/javascript">
	var menuItem = document.querySelectorAll('.menu-item');

	for(var i = 0; i < menuItem.length; i++){
		menuItem[i].addEventListener('mouseover', function(){
			var list = this.querySelectorAll('ul li');
			this.querySelector('ul').style.height = (list.length * 30) + 'px';
		});

		menuItem[i].addEventListener('mouseout', function(){
			this.querySelector('ul').style.height = '0px';
		});
	}

</script>
</body>
</html>