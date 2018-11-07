<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rbackup */
?>
<div class="rbackup-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tec',
            'responsable',
            'instructor',
        ],
    ]) ?>

</div>
