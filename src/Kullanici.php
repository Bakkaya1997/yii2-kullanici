<?php

namespace barisakkaya\kullanici;

/**
 * kullanici module definition class
 */
class Kullanici extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'vendor\modules\kullanici\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here

        $this->layout = 'myLayout';

        $this->setAliases([
            '@products-assets' => dirname(__DIR__). 'vendor/assets'
        ]);
    }
}

