<?php

use yii\widgets\DetailView;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Registro */

$this->title = Yii::t('app', 'Registro Exitoso');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>

<center><h1>¡Registro exitoso!</h1></center>

<br>
<br>
<br>
<center><div class="registro-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tec',
            'responsable',
            'instructor',
        ],
    ]) ?>

</div></center>

<center><div class="col-lg-12">
  <?= Html::a('Nuevo Registro', ['/registro/create'], ['class'=>'btn btn-primary']) ?>
</div></center>
