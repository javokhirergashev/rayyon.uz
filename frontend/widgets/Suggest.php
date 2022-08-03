<?php
namespace app\widgets;

use yii\bootstrap4\Widget;

class Suggest extends Widget
{
    public function run()
    {
        return $this->render("suggest");
    }
}