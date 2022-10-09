<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DokumenPks $model */

$this->title = 'Tambah Dokumen PKS';
$this->params['breadcrumbs'][] = ['label' => 'Dokumen PKS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-pks-create">
    <div class="card-header">
        <h3 class="card-title"><span class="text-lg text-secondary"><?= Html::encode($this->title) ?></span></h3>
    </div>

    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
