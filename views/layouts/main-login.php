<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\AppAsset;
use app\assets\LoginAsset;

// LoginAsset::register($this);

$this->registerCssFile('@web/css/login/login-2.css');
$this->registerCssFile('@web/css/login/all.css');
$this->registerCssFile('@web/css/login/fontawesome.css');
$this->registerJsFile('@web/js/all.js');
// $this->registerJsFile('@web/js/bootstrap.min.js');
// $this->registerCssFile('@web/css/fontawesome.css');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= Html::encode('Login | e-PKS') ?></title>
    <!-- <link rel="shortcut icon" href="<?php echo Url::base(); ?>/app/images/favicon.ico" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= Url::to('@web/img/logo_rsud.png') ?>">
    <?php $this->head() ?>
</head>
<body style="height:100%">
    <?php $this->beginBody() ?>
        <?php echo $content; ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>