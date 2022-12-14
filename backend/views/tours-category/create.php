<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ToursCategory */

$this->title = 'Create category';
$this->params['breadcrumbs'][] = ['label' => 'Tours Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
