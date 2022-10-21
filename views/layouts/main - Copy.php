<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => 'e-PKS',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site'],'active' => in_array(\Yii::$app->controller->id, ['site'])],
            Yii::$app->user->isGuest ? ['label' => false]
            : ['label' => 'Dokumen', 'url' => ['/dokumen-pks'],'active' => in_array(\Yii::$app->controller->id, ['dokumen-pks'])],
            Yii::$app->user->isGuest ? ['label' => 'Login', 'url' => ['/site/login']]
            : '<li class="nav-item">'
                . Html::beginForm(['/site/logout'],'post')
                . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->nama . ')',
                ['class' => 'btn btn-link logout ml-1 pl-0']
                )
                . Html::endForm()
                . '</li>'
            ]
    ]);
    NavBar::end();
    ?>
</div>
<main id="main" class="flex-shrink-0" role="main">

    <div class="container">
        <!-- <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?> -->
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
        </main>
<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; e-PKS <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end">Powered by <a href="https://www.linkedin.com/in/mhmdrzki/" target="_blank">Bangkii</a></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
