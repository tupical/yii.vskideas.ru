<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Airports</h1>
<ul>
<?php foreach ($airports as $airpor): ?>
    <li>
        <?= Html::encode("{$airpor->name}") ?>
    </li>
<?php endforeach; ?>
</ul> 

<?= LinkPager::widget(['pagination' => $pagination]) ?>   