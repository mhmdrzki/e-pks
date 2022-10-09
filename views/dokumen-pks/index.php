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
        'options' => ['style' => 'font-size:12px;'],
        'rowOptions' => function ($model) {
            $tglAkhir = $model->tgl_berakhir_pks;;
            $dateNow = date("Y-m-d");
            $time = strtotime($dateNow);
            $final = date("Y-m-d", strtotime("-4 day", $time));
            
            if ($tglAkhir >= $final && $tglAkhir <= $dateNow) {
                return ['class' => 'bg-warning'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'no_pks',
            'nama_pks',
            // 'jenis_pks',
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
            //'nama_file',
            // 'bagian_pks',
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
