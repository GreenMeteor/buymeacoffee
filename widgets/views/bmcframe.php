<?php

use humhub\libs\Html;

$urlJs = 'https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js';
$this->registerJsFile($urlJs, ['src' => '<?= $urlJs; ?>']);
?>

<div class="panel panel-default buymeacoffee-snippet" id="buymeacoffee-snippet">
    <?= Html::beginTag('div') ?>
    <?= Html::beginTag('script', ['src' => $urlJs]) ?><?= Html::endTag('script') ?>
    <script <?= Html::nonce() ?> data-name="BMC-Widget" data-cfasync="false" src="<? $urlJs; ?>" data-id="<?= $bmcUrl; ?>" data-description="<? $text; ?>" data-message="" data-color="<?= $color; ?>" data-position="Left" data-x_margin="18" data-y_margin="18"></script>
    <?= Html::endTag('div'); ?>
</div>
