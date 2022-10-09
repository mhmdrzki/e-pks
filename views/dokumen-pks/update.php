<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DokumenPks $model */

$this->title = 'Update Dokumen : ' . $model->judul_pks;
$this->params['breadcrumbs'][] = ['label' => 'Dokumen Pks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dokumen-pks-update">

    <div class="card-header bg-white">
        <h3 class="card-title"><span class="text-lg text-primary"><?= Html::encode($this->title) ?></span></h3>
    </div>

    <div class="card-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>>

</div>
