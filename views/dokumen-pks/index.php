<?php

use app\models\DokumenPks;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
/** @var yii\web\View $this */
/** @var app\models\DokumenPksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'DOKUMEN | e-PKS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-pks-index">


    <p>
        <?= Html::a('Tambah Dokumen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        // 'rowOptions' => function ($model) {
        //     if ($model->id == '1') {
        //         return ['class' => 'bg-danger'];
        //     }
        // },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'no_pks',
            'nama_pks',
            // 'jenis_pks',
            [
                'label' => 'Jenis',
                'value' => function ($model) {
                        if ($model->jenis_pks == '1') {
                            return 'ADA';
                        }
                    }
            ],
            'judul_pks',
            'tgl_buat_pks',
            'tgl_berakhir_pks',
            [
                'label' => 'Status',
                'value' => function ($model) {
                        if ($model->status_pks == '1') {
                            return 'ADA';
                        }
                    }
            ],
            'tahun_pks',
            //'nama_file',
            // 'bagian_pks',
            [
                'label' => 'Bagian',
                'value' => function ($model) {
                        if ($model->bagian_pks == '1') {
                            return 'ADA';
                        }
                    }
            ],
            //'create_at',
            //'create_by',
            [
                'header'=>"Aksi", 
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DokumenPks $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                'headerOptions' => ['style' => 'width:90px'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{myButton}',  // the default buttons + your custom button
                'buttons' => [
                    'myButton' => function($url, $model, $key) {     // render your custom button
                        return Html::a('Unduh', ['dokumen-pks/unduh', 'id' => $model->id], ['class' => 'btn btn-sm btn-info', 'data-pjax'=>0]);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
