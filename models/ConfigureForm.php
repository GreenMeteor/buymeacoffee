<?php

namespace humhub\modules\buymeacoffee\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.
 */
class ConfigureForm extends Model
{

    public $text;
    public $serverUrl;
    public $color;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'serverUrl', 'color'], 'safe'],
            ['text', 'string'],
            ['serverUrl', 'string'],
            ['color', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'text' => 'Text:',
            'serverUrl' => 'BuyMeACoffee Username:',
            'color' => 'Color:'
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'text' => 'Text',
            'serverUrl' => 'e.g: https://www.buymeacoffee.com/<strong>{username}</strong>',
            'color' => 'e.g: #xxxxxx',
        ];
    }

    public function loadSettings()
    {
        $this->text = Yii::$app->getModule('buymeacoffee')->settings->get('text');

        $this->serverUrl = Yii::$app->getModule('buymeacoffee')->settings->get('serverUrl');
        
        $this->color = Yii::$app->getModule('buymeacoffee')->settings->get('color');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('buymeacoffee')->settings->set('text', $this->text);

        Yii::$app->getModule('buymeacoffee')->settings->set('serverUrl', $this->serverUrl);

        Yii::$app->getModule('buymeacoffee')->settings->set('color', $this->color);

        return true;
    }

}
