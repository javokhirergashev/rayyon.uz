<?php
namespace app\widgets;

use yii\bootstrap4\Widget;

class Header extends Widget
{
    public function run()
    {
       return $this->render('header');
    }
}