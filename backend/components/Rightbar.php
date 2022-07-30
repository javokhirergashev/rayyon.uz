<?php

namespace backend\components;

use yii\bootstrap4\Widget;

class Rightbar extends Widget
{
    public function run()
    {
        return $this->render('rightbar');
    }
}