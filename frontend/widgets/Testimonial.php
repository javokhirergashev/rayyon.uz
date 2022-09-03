<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Testimonial extends Widget
{
    public function run()
    {
        $models = \common\models\Testimonial::find()->where(["status"=>1])->orderBy(['id'=>SORT_DESC])->all();

        return $this->render('testimonial', compact("models"));
    }
}