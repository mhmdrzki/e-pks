<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\DokumenPks $model */

$this->title = $model->no_pks." | e-Pks";
$this->params['breadcrumbs'][] = ['label' => 'Dokumen Pks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dokumen-pks-view">

    <h1><?= Html::encode($model->judul_pks) ?></h1>

    <p>
        <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-warning']) ?>
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
            // 'id',
            'no_pks',
            'nama_pks',
            [
                'label' => 'Jenis',
                'value' => function ($model) {
                                foreach(Yii::$app->params['jenis_pks'] as $key => $value){
                                    if ($key == $model->jenis_pks) {
                                        return $value;
                                    }
                                }
                            }
            ],
            'judul_pks',
            'tgl_buat_pks',
            'tgl_berakhir_pks',
            [
                'label' => 'Status',
                'value' => function ($model) {
                                foreach(Yii::$app->params['status_pks'] as $key => $value){
                                    if ($key == $model->status_pks) {
                                        return $value;
                                    }
                                }
                            }
            ],
            'tahun_pks',
            'nama_file',
            [
                'label' => 'Bagian',
                'value' => function ($model) {
                                foreach(Yii::$app->params['bagian_pks'] as $key => $value){
                                    if ($key == $model->bagian_pks) {
                                        return $value;
                                    }
                                }
                            }
            ],
            'create_at',
            'create_by',
        ],
    ]) ?>

</div>
