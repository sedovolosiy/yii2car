<?php

namespace app\modules\frontend;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\frontend\controllers';

    public function init()
    {
        parent::init();
        $this->layout = "main";

        // custom initialization code goes here
    }
}