<?php

namespace App\Presentation\Web\Yii\views\site;

use App\Presentation\Web\Yii\Widget\HistoryList\HistoryList;

$this->title = 'Americor Test';
?>

<div class="site-index">
    <?= HistoryList::widget([]) ?>
</div>
