<?php

namespace app\widgets;

use yii\bootstrap4\Widget;
use common\models\Tours;

class Tour extends Widget
{
    public function run()
    {
        $models = Tours::find()->where(['status'=>1])->orderBy(["id"=>SORT_DESC])->limit(6)->all();
        return $this->render('tours', compact('models'));
    }
}