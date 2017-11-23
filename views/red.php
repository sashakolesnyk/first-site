<?php include ROOT . '/views/header.php'; ?>

<hr>
	
	<div class="container">
	
		<!-- new form ver_2 -->
		<form action="/admin" method="POST" enctype="multipart/form-data" role="form">
		
			<div class="form-group">
				<label for="title" class="col-lg-4">title</label>
				<div class="col-lg-8">
				<input type="text" class="form-control" name="title" id="title" value="<?php echo $infoToRed['title']; ?>">
				</div>
			</div>
			
			<br><br><br>
			
			<div class="form-group">
				<label for="description" class="col-lg-4 control-label">description</label>
				<div class="col-lg-8">
				<textarea type="text" class="form-control fixedHeight" name="description" id="description"><?php echo $infoToRed['description']; ?></textarea>
				</div>
			</div>
			
			<br><br><br>
			
			<!-- show old image -->
			<div class="row">
			
				<div class="col-lg-4">
					<img id="redimgold" src="/img/<?php echo $infoToRed['fotoName']; ?>">
					<input type="hidden" name="old-foto" value="<?php echo $infoToRed['fotoName']; ?>">
				</div>
			
				<div class="form-group centered vertalign">
						<label for="image" class="col-lg-4 control-label">Загрузите НОВОЕ изображение:</label>
					<div class="col-lg-4">
						<input type="file" name="image" id="image">
					</div>
				</div>
			
			</div>
			
			<br><br><br>
			
			<div class="form-group">
				<label for="trailerFrame" class="col-lg-4" >trailerFrame</label>
				<div class="col-lg-8">
					<textarea type="text" class="form-control" name="trailerFrame" id="trailerFrame"><?php echo $infoToRed['trailerFrame']; ?></textarea>
					<p class="help-block">from youtube</p>
				</div>
			</div>
			
			<br><br><br>
			
			<div class="col-lg-6">
				<input  type="hidden" name="id" value="<?php echo $infoToRed['id']; ?>">
				<input  type="submit" name="red" id="redbtn" class="btn btn-success btn-lg btn-block" value="Редактировать">
			</div>
			
		</form>
		
	</div>
	
<hr>
	
<?php include ROOT . '/views/footer.php'; ?>