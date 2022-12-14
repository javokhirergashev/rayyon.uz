<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tours */

$this->title = 'Create Tours';
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
