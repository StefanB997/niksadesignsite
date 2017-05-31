<?php 
include "general.php";

$sql = '';

if(isset($_GET['scat']) && strlen(trim($_GET['scat'])) > 0){
	$sql = 'select * from p_produkti where podkategorii_id = :scat';
	$query = $db->prepare($sql);
	$query->bindValue(':scat', $_GET['scat'], PDO::PARAM_INT);
} else if(isset($_GET['cat']) && strlen(trim($_GET['cat'])) > 0){
	$sql = 'select p_produkti.* from p_produkti
		join p_podkategorii
		on p_produkti.podkategorii_id = p_podkategorii.id
		join p_kategorii
		on p_kategorii.id = p_podkategorii.id_parent
		where p_podkategorii.id_parent = :cat';
	$query = $db->prepare($sql);
	$query->bindValue(':cat', $_GET['cat'], PDO::PARAM_INT);
} else {
	$sql = 'select * from p_produkti order by rand() limit 9';
	$query = $db->prepare($sql);
}

$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>
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
	<div class="categories-holder">
	<div class="categories">
		<nav>
		    <div class="menu-item">
		      <h4><a href="?cat=1">Бои и Лакови</a></h4>
		      <ul>
		      	<li><a href="?scat=1">-Емајл Лак</a></li>
		      	<li><a href="?scat=2">-Премази</a></li>
		      	<li><a href="?scat=3">-Разредувачи</a></li>
		      </ul>
		    </div>
		      
		    <div class="menu-item">
		      <h4><a href="?cat=2">Железарија</a></h4>
		      <ul>
		        <li><a href="?scat=4">-Завртки</a></li>
		        <li><a href="?scat=5">-Жица</a></li>
		        <li><a href="?scat=6">-Четки</a></li>
		        <li><a href="?scat=7">-Брави</a></li>
		        <li><a href="?scat=8">-Алати</a></li>
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
	</div>
	<div class="products">
		<div class="procucts">
			<ul>
			<?php foreach($res as $row){ ?>
				<li>
					<?=$row['name'];?>
					<br/>
					<?=$row['proizveduvac'];?>
					<br/>
					<?=$row['cena'];?>
					<br/>
					<img src="<?=$row['image'];?>">
					<br/>
				</li>
			<?php } ?>
			</ul>
		</div>
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