<?php
namespace app\widgets;

use yii\bootstrap4\Widget;

class Team extends Widget
{
    public function run()
    {
       return $this->render("team");
    }
}