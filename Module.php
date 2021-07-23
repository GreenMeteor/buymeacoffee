<?php

namespace humhub\modules\buymeacoffee;

use Yii;
use yii\helpers\Url;
use humhub\components\Module as BaseModule;

class Module extends BaseModule
{
    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to(['/buymeacoffee/admin']);
    }

    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'https://www.buymeacoffee.com/';
        }
        return $url;
    }

    public function getColor()
    {
        $color = $this->settings->get('color');
        if (empty($color)) {
            return '';
        }
        return $color;
    }

    public function getText()
    {
        $text = $this->settings->get('text');
        if (empty($text)) {
            return '';
        }
        return $text;
    }
}
