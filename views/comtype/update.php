<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comtype */

$this->title = 'Update Comtype: ' . $model->com_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Comtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->com_type_id, 'url' => ['view', 'id' => $model->com_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comtype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
