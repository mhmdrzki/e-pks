<?php
use yii\bootstrap4\ActiveForm;
?>

<div class="main">  	
	<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<?php $form = ActiveForm::begin(); ?>
				<label for="chk" aria-hidden="true">e-PKS LOGIN</label>
				<?php if (Yii::$app->session->hasFlash('success')): ?>
					<div class="alert alert-success alert-dismissable">
						<center><?= Yii::$app->session->getFlash('success') ?></center>
					</div>
				<?php endif; ?>
				<?php if($model->getErrors()){ ?>
					<center><p>Username atau password salah!</p></center>			
				<?php } ?>
				<?php if (Yii::$app->session->hasFlash('danger')): ?>
					<div class="alert alert-danger alert-dismissable">
						<center><?= Yii::$app->session->getFlash('danger') ?></center>
					</div>
				<?php endif; ?>
				<input type="text" name="LoginForm[username]" placeholder="Username" required="">
				<input type="password" name="LoginForm[password]" placeholder="Password" required="">
				
				<button>Login</button>
			<?php ActiveForm::end(); ?>
			
		</div>

		<div class="login">
			<form action="/e-pks/web/site/register" method="post">
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" name="User[username]" placeholder="Username" required="">
				<input type="text" name="User[nama]" placeholder="Nama Lengkap" required="">
				<input type="password" name="User[password]" placeholder="Password" required="">
				<button>Sign up</button>
			</form>
		</div>
</div>

<!-- <div class="container">
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
</div> -->
