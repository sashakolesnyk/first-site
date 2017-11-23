<?php include ROOT . '/views/header.php'; ?>

<hr>
	
	<!-- СЛАЙДЕР ИЗ БД -->
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="slider">
					<?php for ($i = 0, $j = count($itemsArray); $i < $j; $i++): ?>
						<div><a href="/item/<?php echo $itemsArray[$i]['id']; ?>" alt=""><img src="img/<?php echo $itemsArray[$i]['fotoName']; ?>"></a></div>
					<?php endfor; ?>
				</div>
			</div>	
		</div>		
	</div>
	
	<div class="container">
		<div class="row">
			<hr>
		</div>
	</div>
	
	
	<!-- ПОСЛЕДНИЕ ДОБАВЛЕННЫЕ ТРЕЙЛЕРЫ ИЗ БД -->
	<?php for ($i = 0; $i < 3; $i++): ?>
	<div class="sectionmovie">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 margintop">
					<?php echo $itemsArray[$i]['trailerFrame']; ?>
					
				</div>
				<div class="col-lg-6 margintop">
					<p><?php echo $itemsArray[$i]['description']; ?></p>
					<p class="pull-right"><a href="/item/<?php echo $itemsArray[$i]['id']; ?>">Подробнее...</a></p>
				</div>
			</div>
		</div>
	</div>
	<?php endfor; ?>
	
	
	
	<div class="container">
		<div class="row">
			<hr>
		</div>
	</div>	
	
	<div class="container advert">
		<div class="row centered">
			<br><br>
			<div class="col-lg-4">
				<i class="fa fa-heart"></i>
				<h4>Advertisement</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet turpis sollicitudin, aliquet massa eget, viverra risus. Duis tempor sed nisl vitae tristique. Donec quis ante ultricies, rutrum est a, consectetur ex. Mauris ac est eu dui tristique ornare ut vel nunc. Donec pellentesque ut nunc eu varius. Nam feugiat orci nec lacus imperdiet convallis. Aenean vulputate rutrum dolor, sit amet sollicitudin mauris. Nunc scelerisque dolor at est tempor, dignissim tempor massa hendrerit. Suspendisse nec condimentum odio, quis varius justo.</p>
			</div>
			<div class="col-lg-4">
				<i class="fa fa-heart"></i>
				<h4>Advertisement</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet turpis sollicitudin, aliquet massa eget, viverra risus. Duis tempor sed nisl vitae tristique. Donec quis ante ultricies, rutrum est a, consectetur ex. Mauris ac est eu dui tristique ornare ut vel nunc. Donec pellentesque ut nunc eu varius. Nam feugiat orci nec lacus imperdiet convallis. Aenean vulputate rutrum dolor, sit amet sollicitudin mauris. Nunc scelerisque dolor at est tempor, dignissim tempor massa hendrerit. Suspendisse nec condimentum odio, quis varius justo.</p>
			</div>
			<div class="col-lg-4">
				<i class="fa fa-heart"></i>
				<h4>Advertisement</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet turpis sollicitudin, aliquet massa eget, viverra risus. Duis tempor sed nisl vitae tristique. Donec quis ante ultricies, rutrum est a, consectetur ex. Mauris ac est eu dui tristique ornare ut vel nunc. Donec pellentesque ut nunc eu varius. Nam feugiat orci nec lacus imperdiet convallis. Aenean vulputate rutrum dolor, sit amet sollicitudin mauris. Nunc scelerisque dolor at est tempor, dignissim tempor massa hendrerit. Suspendisse nec condimentum odio, quis varius justo.</p>
			</div>
		</div>
		
		<br><br>
		
	</div>
	
<hr>
	
<?php include ROOT . '/views/footer.php'; ?>