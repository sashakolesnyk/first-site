<?php include ROOT . '/views/header.php'; ?>

<hr>
	
<?php if ($_SESSION['added']) {echo "Вы добавили позицию с идентификатором ".$_SESSION['added'];} ?>

<?php if ($_SESSION['deleted']) {echo "Вы удалили позицию с идентификатором ".$_SESSION['deletedId'];} ?>

<?php if ($redactedVariable) {echo "Вы изменили позицию с идентификатором ".$_SESSION['redactedId'];} ?>


<div class="container centered">
	<ul class="nav nav-tabs nav-justified" role="tablist">
		<li><a href="#add" role="tab" data-toggle="tab">Добавить</a></li>
		<li><a href="#red" role="tab" data-toggle="tab">Редактировать</a></li>
		<li><a href="#del" role="tab" data-toggle="tab">Удалить</a></li>
	</ul>

		<!-- Если есть ошибки (при заполнении форм) то отобразить -->
		<?php if (!empty($fails)) {
			foreach ($fails as $elem) {
				echo '<p>' . $elem . '</p>';
			}
		}?>
	
	<div class="tab-content"> <!-- Содержимое вкладок добавление, редактирование, удаление -->
	
	
<!-- КОД ДОБАВЛЕНИЯ -->
		
		<div role="tabpanel" class="tab-pane" id="add">
		
			<form action="" method="POST" enctype="multipart/form-data" role="form">
			
				<div class="form-group">
						<label for="title" class="col-lg-4">title</label>
					<div class="col-lg-8">
						<input type="text" class="form-control" name="title" id="title" placeholder="title: Terminator">
					</div>
				</div>
				
				<br><br><br>
				
				<div class="form-group">
						<label for="description" class="col-lg-4 control-label">description</label>
					<div class="col-lg-8">
						<textarea type="text" class="form-control" name="description" id="description" placeholder="description: Lorem Ipsum"></textarea>
					</div>
				</div>
				
				<br><br><br>
				
				<div class="form-group">
						<label for="image" class="col-lg-4 control-label">Загрузка изображения:</label>
					<div class="col-lg-8">
						<input type="file" name="image" id="image">
					</div>
				</div>
				
				<br><br><br>
				
				<div class="form-group">
						<label for="trailerFrame" class="col-lg-4" >trailerFrame</label>
					<div class="col-lg-8">
						<textarea type="text" class="form-control" name="trailerFrame" id="trailerFrame" placeholder='trailerFrame: <iframe width="560" height="315" src="https://www.youtube.com/embed/vusgM_1NR3I" frameborder="0" allowfullscreen></iframe>'></textarea>
					</div>
						<p class="help-block">from youtube</p>
				</div>
				
				<br><br><br>
				
				<div class="col-lg-6">
					<input  type="submit" name="add" id="addbtn" class="btn btn-success btn-lg btn-block" value="Добавить">
				</div>
				
			</form>
		
		</div>
		
		
<!-- КОД РЕДАКТИРОВАНИЯ --> 
		
		<div role="tabpanel" class="tab-pane" id="red">
		
		<?php $tableArray = Item::getAllItems(); ?>    <!-- Создаем таблицу из базы данных по всем позициям -->
			<!--<div class="table-responsive">-->
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>minifoto</th>
							<th>title</th>
							<th>description</th>
							<th>views</th>
							<th>createDate</th>
						</tr>
					</thead>
					<tbody>
					<?php for($i = 0, $j = count($tableArray); $i < $j; $i++): ?>
						<tr>
							<td><?php echo $tableArray[$i]['id']; ?></td>
							<td><img class="smsize" src="/img/<?php echo $tableArray[$i]['fotoName']; ?>"</td>
							<td><?php echo $tableArray[$i]['title']; ?></td>
							<td><?php echo $tableArray[$i]['description']; ?></td>
							
							<td><?php echo $tableArray[$i]['views']; ?></td>
							<td><?php echo $tableArray[$i]['createDate']; ?></td>
							<td><a href="/admin/red/<?php echo $tableArray[$i]['id']; ?>">Редактировать</a></td>
						</tr>
					<?php endfor; ?>
					</tbody>
				</table>
			<!--</div>-->
		</div>
		
		
<!-- КОД УДАЛЕНИЯ -->
		
		<div role="tabpanel" class="tab-pane" id="del">
		<!--<div class="table-responsive">-->
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>minifoto</th>
							<th>title</th>
							<th>description</th>
							<th>views</th>
							<th>createDate</th>
							<th>Удалить</th>
						</tr>
					</thead>
					<tbody>
					<?php for($i = 0, $j = count($tableArray); $i < $j; $i++): ?>
						<tr>
							<td><?php echo $tableArray[$i]['id']; ?></td>
							<td><img class="smsize" src="/img/<?php echo $tableArray[$i]['fotoName']; ?>"</td>
							<td><?php echo $tableArray[$i]['title']; ?></td>
							<td><?php echo $tableArray[$i]['description']; ?></td>
							<td><?php echo $tableArray[$i]['views']; ?></td>
							<td><?php echo $tableArray[$i]['createDate']; ?></td>
							<td>
							<form action="" method="POST">
							<button type="submit" name="del" id="delbtn" value="<?php echo $tableArray[$i]['id']; ?>" class="btn btn-link">Удалить</button>
							
							</form>
							</td>
						</tr>
					<?php endfor; ?>
					</tbody>
				</table>
			<!--</div>-->
		</div>
		
	</div>
</div>

<hr>
	
<?php include ROOT . '/views/footer.php'; ?>