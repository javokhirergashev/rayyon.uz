<?php

use common\models\StaticFunctions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ToursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tours', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute'=>'title',
                'value'=> function ($model) {
                    return $model->getTitle();
                },
                'filter'=>$title,
            ],
            [
                'attribute'=>'description',
                'value'=> function ($model) {
                    return $model->getDescription();
                },
                'filter'=>$description,
            ],
            'category_id',
//            'body:ntext',
            'created_date',
            'updated_date',
            //'price',
            [
                'attribute' => 'images',
                'value' => function($data){
                    $image = StaticFunctions::getImage('tours',$data->id, $data->images);
                    return "<img src='$image' style='max-width: 120px; text-align: center!important;'>";
                },
                'format' => 'html'
            ],
            'status',
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
