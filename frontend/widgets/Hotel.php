<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Hotel extends Widget
{
    public function run()
    {
        return $this->render('hotel');
    }
}