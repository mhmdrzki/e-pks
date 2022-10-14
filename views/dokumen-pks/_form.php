<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\DokumenPks $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dokumen-pks-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row mb-2">
        <div class="col-sm-2 ">
            <label><b>No. PKS</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model,'no_pks', ['options' => ['class' => 'mb-0']])->label(false)->textInput(['class'=>'form-control', 'maxlength' => 30, 'autocomplete'=>"off"]) ?>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-2 ">
            <label><b>Nama PKS</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model,'nama_pks', ['options' => ['class' => 'mb-0']])->label(false)->textInput(['class'=>'form-control', 'maxlength' => 30, 'autocomplete'=>"off"]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 ">
            <label><b>Jenis</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model, 'jenis_pks')->label(false)->dropDownList(Yii::$app->params['jenis_pks'],['prompt'=>'Pilih Bagian']);?>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-sm-2 ">
            <label><b>Judul PKS</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model,'judul_pks', ['options' => ['class' => 'mb-0']])->label(false)->textInput(['class'=>'form-control', 'maxlength' => 30, 'autocomplete'=>"off"]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 ">
            <label><b>Tanggal Pembuatan</b></label>
        </div>
        <div class="col-sm-10 ">
            <!-- <?= $form->field($model,'tgl_buat_pks', ['options' => ['class' => 'mb-0']])->label(false)->textInput(['class'=>'form-control', 'maxlength' => 30, 'autocomplete'=>"off"]) ?> -->

            <?= $form->field($model, 'tgl_buat_pks')->label(false)->widget(DatePicker::classname(), [
                               'name' => 'tgl_buat_pks',
                               'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                               'pluginOptions' => [
                                   'autoclose'=>true,
                                   'format' => 'yyyy-mm-dd'
                                ]]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 ">
            <label><b>Tanggal Berakhir</b></label>
        </div>
        <div class="col-sm-10 ">
            
            <?= $form->field($model, 'tgl_berakhir_pks')->label(false)->widget(DatePicker::classname(), [
                               'name' => 'tgl_buat_pks',
                               'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                               'pluginOptions' => [
                                   'autoclose'=>true,
                                   'format' => 'yyyy-mm-dd'
                                ]]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 ">
            <label><b>Status</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model, 'status_pks')->label(false)->dropDownList(Yii::$app->params['status_pks'],['prompt'=>'Pilih Bagian']);?>
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-sm-2 ">
            <label><b>Tahun</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model,'tahun_pks', ['options' => ['class' => 'mb-0']])->label(false)->textInput(['class'=>'form-control', 'maxlength' => 30, 'autocomplete'=>"off"]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 ">
            <label><b>Bagian</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model, 'bagian_pks')->label(false)->dropDownList(Yii::$app->params['bagian_pks'],['prompt'=>'Pilih Bagian']);?>
        </div>
    </div>

    <div class="row mb-1">
        <div class="col-sm-2 ">
            <label><b>Upload File</b></label>
        </div>
        <div class="col-sm-10 ">
            <?= $form->field($model, 'nama_file')->label(false)->fileInput(['accept' => '.pdf, .doc, .docx']) ?>

        </div>
    </div>

    

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success float-right']) ?>
        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-warning float-right  mr-3']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
