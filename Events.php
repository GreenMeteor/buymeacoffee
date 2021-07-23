<?php

namespace humhub\modules\buymeacoffee;

use Yii;
use yii\helpers\Url;
use yii\base\BaseObject;

class Events extends BaseObject
{
    public static function addBmcFrame($event)
    {
        $event->sender->addWidget(widgets\BMCFrame::class, []);
    }
}
