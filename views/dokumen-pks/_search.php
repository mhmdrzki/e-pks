<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DokumenPksSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dokumen-pks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_pks') ?>

    <?= $form->field($model, 'nama_pks') ?>

    <?= $form->field($model, 'jenis_pks') ?>

    <?= $form->field($model, 'judul_pks') ?>

    <?php // echo $form->field($model, 'tgl_buat_pks') ?>

    <?php // echo $form->field($model, 'tgl_berakhir_pks') ?>

    <?php // echo $form->field($model, 'status_pks') ?>

    <?php // echo $form->field($model, 'tahun_pks') ?>

    <?php // echo $form->field($model, 'nama_file') ?>

    <?php // echo $form->field($model, 'bagian_pks') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
