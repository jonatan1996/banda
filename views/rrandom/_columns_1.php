<?php

use yii\helpers\Url;

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
//    [
//        'class' => '\kartik\grid\DataColumn',
//        'attribute' => 'tec_backup',
//    ],
];
