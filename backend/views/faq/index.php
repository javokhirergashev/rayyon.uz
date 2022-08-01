<?php

use common\models\StaticFunctions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FaqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faqs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Faq', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute'=>'question',
                'value'=> function ($model) {
                    return $model->getQuestion();
                },
                'filter'=>$question,
            ],
            [
                'attribute'=>'answer',
                'value'=> function ($model) {
                    return $model->getAnswer();
                },
                'filter'=>$answer,
            ],

            [
                'class' => ActionColumn::className(),
                'header' => 'Amallar',
                'headerOptions' => ['style' => 'text-align:center'],
                'template' => '{buttons}',
                'contentOptions' => ['style' => 'min-width:150px;max-width:150px;width:150px', 'class' => 'v-align-middle'],
                'buttons' => [
                    'buttons' => function ($url, $model) {
                        $controller = Yii::$app->controller->id;
                        $code = <<<BUTTONS
                                <div class="btn-group flex-center">
                                    <a href="/{$controller}/update?id={$model->id}" class="btn btn-light"><i class="far fa-edit"></i></a>
                                    <a href="/{$controller}/delete?id={$model->id}" id="{$controller}{$model->id}" data-postID="{$model->id}" data-postType="{$controller}" class="btn btn-danger postRemove"><i class="far fa-trash-alt"></i></a>
                                </div>
BUTTONS;
                        return $code;
                    }

                ],
            ],
        ],
    ]); ?>


</div>
