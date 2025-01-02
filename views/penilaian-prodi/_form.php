<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PenilaianProdi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_prodi')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Prodi::find()->all(), 'id_prodi', 'nama_prodi'),
    ['prompt' => 'Pilih Prodi']
    ) ?>

    <?= $form->field($model, 'id_indikator')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\models\Indikator::find()->all(), 'id_indikator', 'nama_indikator'),
    ['prompt' => 'Pilih Indikator']
    ) ?>

    <?= $form->field($model, 'skor_penilaian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_penilaian')->input('date') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
