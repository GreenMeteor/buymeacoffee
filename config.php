<?php

namespace humhub\modules\buymeacoffee;

use humhub\modules\buymeacoffee\Events;
use humhub\modules\buymeacoffee\Module;
use humhub\modules\dashboard\widgets\Sidebar;
use humhub\modules\space\widgets\Sidebar as Spacebar;

return [
    'id' => 'buymeacoffee',
    'class' => Module::class,
    'namespace' => 'humhub\modules\buymeacoffee',
    'events' => [
        ['class' => Sidebar::class, 'event' => Sidebar::EVENT_INIT, 'callback' => [Events::class, 'addBmcFrame']],
        ['class' => Spacebar::class, 'event' => Spacebar::EVENT_INIT, 'callback' => [Events::class, 'addBmcFrame']],
    ]
];
?>
