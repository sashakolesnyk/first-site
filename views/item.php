<?php include ROOT . '/views/header.php'; ?>

<hr>


<?php if (!$item): ?>
	<p> ТАКОГО ЭЛЕМЕНТА НЕ СУЩЕСТВУЕТ - ПЕРЕЙДИТЕ ПО ССЫЛКЕ ИЛИ ВВЕДИТЕ СУЩЕСТВУЮЩУЮ ПОЗИЦИЮ </p>
<?php else: ?>


<section>
	<div class="container">
	
		<div class="row">
		
			<div class="col-lg-6">
				<img src="/img/<?php echo $item['fotoName']; ?>">
			</div>
			
			<div class="col-lg-6 margintop">
			
					<p class="pull-left"><?php echo $item['createDate']; ?></p>
					<p class="pull-right"><i class="fa fa-eye" aria-hidden="true"></i><?php echo $item['views']; ?></p>
				
				<br><br><br>
				
				<div>
					<?php echo $item['description']; ?>
				</div>
				
				<br><br><hr><br>
				
				<div class="centered">
					<i class="fa fa-heart"></i>
					<h4>Advertisement</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet turpis sollicitudin, aliquet massa eget, viverra risus. Duis tempor sed nisl vitae tristique. Donec quis ante ultricies, rutrum est a, consectetur ex. Mauris ac est eu dui tristique ornare ut vel nunc. Donec pellentesque ut nunc eu varius. Nam feugiat orci nec lacus imperdiet convallis. Aenean vulputate rutrum dolor, sit amet sollicitudin mauris. Nunc scelerisque dolor at est tempor, dignissim tempor massa hendrerit. Suspendisse nec condimentum odio, quis varius justo.</p>
				</div>
							
			</div>
	
		</div>
	
	
		<div class="row">
			<div class="col-lg-12 margintop">
				<?php echo $item['trailerFrame']; ?>				
			</div>
		</div>
		
	</div>
</section>

<?php endif; ?>

<hr>
	
<?php include ROOT . '/views/footer.php'; ?>