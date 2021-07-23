<?php

namespace humhub\modules\buymeacoffee\widgets;

use Yii;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class BMCFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $text = Yii::$app->getModule('buymeacoffee')->getText();

        $url = Yii::$app->getModule('buymeacoffee')->getServerUrl();

        $color = Yii::$app->getModule('buymeacoffee')->getColor();

        return $this->render('bmcframe', ['text' => $text, 'bmcUrl' => $url, 'color' => $color]);
    }
}
