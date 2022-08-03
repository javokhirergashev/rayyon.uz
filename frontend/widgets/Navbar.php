<?php
namespace app\widgets;

use yii\bootstrap4\Widget;

class Navbar extends Widget
{
    public function run()
    {
        return $this->render("navbar");
    }
}