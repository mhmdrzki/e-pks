<?php
use yii\bootstrap4\ActiveForm;

?>

<div class="container">
	<div class="screen">
		<div class="screen__content">
			<?php $form = ActiveForm::begin(['options' => [
								'class' => 'login'
							]]); ?>
				<div class="login__field">
					<h1>Login e-PKS</h1>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input name="LoginForm[username]" type="text" class="login__input" placeholder="Username">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input name="LoginForm[password]" type="password" class="login__input" placeholder="Password">
					<?php if($model->getErrors()){ ?>
						<p style="padding-top:20px"><b>Username atau password salah!</b></p>			
					<?php } ?>
				</div>
				<button class="button login__submit">
					<span class="button__text" type="submit">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
			<?php ActiveForm::end(); ?>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
