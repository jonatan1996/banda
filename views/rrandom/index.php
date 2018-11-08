<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RrandomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Resultado de Sorteo');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);
?>

<div class="row">
    <div class="col-lg-6">
        <div class="rrandom-index">
            <div id="ajaxCrudDatatable">
                <?=
                GridView::widget([
                    'id' => 'crud-datatable',
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'pjax' => true,
                    'columns' => require(__DIR__ . '/_columns.php'),
                    'toolbar' => [
                        ['content' =>
                            Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['role' => 'modal-remote', 'title' => 'Create new Rrandoms', 'class' => 'btn btn-default']) .
                            Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax' => 1, 'class' => 'btn btn-default', 'title' => 'Reset Grid']) .
                            '{toggleData}' .
                            '{export}'
                        ],
                    ],
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'panel' => [
                        'type' => 'primary',
                        'heading' => '<i class="glyphicon glyphicon-list"></i> Lista Original',
                    ]
                ])
                ?>
            </div>
        </div>
        <?php
        Modal::begin([
            "id" => "ajaxCrudModal",
            "footer" => "", // always need it for jquery plugin
        ])
        ?>
        <?php Modal::end(); ?>

        <div class="col-lg-12">
            <?= Html::a('Realizar Sorteo', ['/rrandom/random'], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="rrandom-index">
            <div id="ajaxCrudDatatable">
                <?=
                GridView::widget([
                    'id' => 'crud-datatable',
                    'dataProvider' => $dataProvider1,
                    'filterModel' => $searchModel1,
                    'pjax' => true,
                    'columns' => require(__DIR__ . '/_columns_1.php'),
                    'toolbar' => [
                        ['content' =>
                            Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'], ['role' => 'modal-remote', 'title' => 'Create new Rrandoms', 'class' => 'btn btn-default']) .
                            Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''], ['data-pjax' => 1, 'class' => 'btn btn-default', 'title' => 'Reset Grid']) .
                            '{toggleData}' .
                            '{export}'
                        ],
                    ],
                    'striped' => true,
                    'condensed' => true,
                    'responsive' => true,
                    'panel' => [
                        'type' => 'primary',
                        'heading' => '<i class="glyphicon glyphicon-list"></i> Resultado de Sorteo',
                    ]
                ])
                ?>
            </div>
        </div>
    </div>
</div>