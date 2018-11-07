<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

$this->params['breadcrumbs'][] = $this->title;


/* @var $this yii\web\View */
/* @var $model app\models\Registro */

?>
<div class="registro-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
