<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Process extends Widget
{
    public function run()
    {
        return $this->render("process");
    }
}