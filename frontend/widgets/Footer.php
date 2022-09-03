<?php

namespace app\widgets;

use common\models\Contacts;
use yii\bootstrap4\Widget;
use common\models\Menu;

class Footer extends Widget
{
    public function run()
    {
        $models = Contacts::find()->all();
        $links = Menu::find()->where(["status"=>1])->orderBy(["order_by"=>SORT_ASC])->all();
        return $this->render('footer', compact("models", "links"));
    }
}