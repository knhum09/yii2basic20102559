<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comtype */

$this->title = 'Create Comtype';
$this->params['breadcrumbs'][] = ['label' => 'Comtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comtype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
