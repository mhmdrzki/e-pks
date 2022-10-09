<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DokumenPks $model */

$this->title = 'Update Dokumen Pks: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dokumen Pks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dokumen-pks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
