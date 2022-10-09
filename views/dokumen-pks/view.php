<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\DokumenPks $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dokumen Pks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dokumen-pks-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'no_pks',
            'nama_pks',
            'jenis_pks',
            'judul_pks',
            'tgl_buat_pks',
            'tgl_berakhir_pks',
            'status_pks',
            'tahun_pks',
            'nama_file',
            'bagian_pks',
            'create_at',
            'create_by',
        ],
    ]) ?>

</div>
