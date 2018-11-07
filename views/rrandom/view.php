<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rrandom */
?>
<div class="rrandom-view">

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
