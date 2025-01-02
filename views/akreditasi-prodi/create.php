<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AkreditasiProdi $model */

$this->title = 'Pengisian Akreditasi Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Akreditasi Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akreditasi-prodi-create" style="
    background-color: white; /* Background tetap putih */
    border: 2px solid rgb(6, 47, 92); /* Outline dengan warna biru muda */
    border-radius: 20px;
    padding: 20px;
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
">

    <h1 style="
        color:  rgb(6, 47, 92);
        text-align: center;
        margin-bottom: 20px;
        font-family: 'Poppins', Arial, sans-serif;
        font-weight: 600;
    ">
        <?= Html::encode($this->title) ?>
    </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<!-- Import Font Poppins dari Google Fonts -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    /* Memberikan border biru muda pada form input dan textarea */
    .form-control, .select2-container, input[type="text"], input[type="date"], input[type="number"], textarea {
        border: 2px solid rgb(6, 47, 92); /* Outline biru muda */
        border-radius: 20px;
        padding: 10px;
        margin-bottom: 15px;
        font-family: 'Poppins', Arial, sans-serif;
        box-sizing: border-box; /* Agar padding dan border tidak merubah ukuran total elemen */
    }

    /* Memberikan border biru muda pada label form */
    .form-label {
        color: rgb(6, 47, 92);
        font-weight: bold;
    }

    /* Memberikan outline pada elemen select2 */
    .select2-selection {
        border: 2px solid rgb(6, 47, 92); /* Outline biru muda */
    }

    /* Memberikan hover effect pada input dan select */
    .form-control:hover, .select2-container:hover {
        border-color: rgb(0, 3, 169); /* Warna hijau cerah saat hover */
    }
</style>
