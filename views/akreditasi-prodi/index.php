<?php

use app\models\AkreditasiProdi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Akreditasi Prodi';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="akreditasi-prodi-index" style="
    background-color:rgb(6, 47, 92); /* Warna biru muda */
    border: 1px solid #b8daff;
    border-radius: 8px;
    padding: 20px;
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
">

    <h1 style="
        color:rgb(161, 255, 37);
        text-align: center;
        margin-bottom: 20px;
        font-family: 'Poppins', Arial, sans-serif;
        font-weight: 600;
    ">
        <?= Html::encode($this->title) ?>
    </h1>

    <p>
        <?= Html::a('Mengisi Akreditasi Prodi', ['create'], [
            'class' => 'btn btn-success',
            'style' => '
                background-color:rgb(179, 255, 47);
                border-color: #e0a800;
                color: #212529;
                font-weight: bold;
            ',
            'onmouseover' => "this.style.backgroundColor='#e0a800'; this.style.borderColor='#d39e00';",
            'onmouseout' => "this.style.backgroundColor='#ffc107'; this.style.borderColor='#e0a800';"
        ]) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-bordered',
            'style' => '
                width: 100%;
                margin-top: 20px;
                border-collapse: collapse;
                overflow: hidden;
            '
        ],
        'headerRowOptions' => ['style' => '
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
        '],
        'rowOptions' => function ($model, $key, $index, $grid) {
            return ['style' => $index % 2 === 0 
                ? 'background-color: #f9fafc;' 
                : 'background-color: #ffffff;',
                'onmouseover' => "this.style.backgroundColor='#d1ecf1';",
                'onmouseout' => "this.style.backgroundColor='';"
            ];
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_akreditasi',
            'id_prodi',
            'id_la',
            'histori_akreditasi',
            'tgl_mulai',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AkreditasiProdi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_akreditasi' => $model->id_akreditasi]);
                },
                'contentOptions' => [
                    'style' => '
                        text-align: center;
                    '
                ],
            ],
        ],
    ]); ?>

</div>

<!-- Import Font Poppins dari Google Fonts -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
</style>
