<?php

use yii\helpers\Url;
use yii\bootstrap\Html;

return [
    //  [
    //    'class' => 'kartik\grid\CheckboxColumn',
    //  'width' => '20px',
    //],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'attribute' => 'tec',
    ],
    ['class' => 'yii\grid\ActionColumn',
        'template' => '{feedback}',
        'buttons' => [
            'feedback' => function ($url, $model, $key) {
                return Html::button('Sorteo', ['onclick' => "sorteo($model->id)", 'id' => "boton_sorteo$model->id"]);
            },
        ],
    ],
];
