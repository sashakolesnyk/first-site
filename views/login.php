<?php include ROOT . '/views/header.php'; ?>

<hr>

<section>
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3">
				<h4>Авторизация позволит админить БД</h4>
	
				<!-- Если есть ошибки заполнения формы - показать -->
				<?php if (!empty($errors)) {
					foreach ($errors as $elem) {
						echo '<p>' . $elem . '</p>';
					}
				}?>
				
				<!-- при успешной регистрации выдать сообщение -->
				<?php if ($result) { echo '<h3 class="bg-success">Вы УСПЕШНО зарегистрированы - теперь войдите в кабинет</h3>' ;} ?>
				
				
				<!-- ФОРМА 2 В 1 = АВТОРИЗАЦИЯ И РЕГИСТРАЦИЯ -->
				
					<form action="" method="POST" role="form">
						<div class="form-group">
							<label for="login">Login</label>
							<input type="login" class="form-control" name="login" id="login" placeholder="input your login 4+ символов">
							<p class="help-block"></p>
						</div>
						
						<div id="regdisp" class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="По желанию">
							<p class="help-block">подсказка</p>
						</div>
						
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="input your password 6+ символов">
							<p class="help-block"></p>
						</div>
						
						<button type="submit" name="submitent" id="submitent" class="btn btn-success">Войти</button>
						<button type="submit" name="submitreg" id="submitreg" class="btn btn-success">Зарегистрироваться</button>

						<a href="#" id="reglinkreg" class="btn btn-info pull-right">Регистрация</a>
						<a href="#" id="reglinkaut" class="btn btn-info pull-right">Авторизация</a>
					</form>
		</div>
	</div>
</section>

<br>
	
<hr>
	
<?php include ROOT . '/views/footer.php'; ?>