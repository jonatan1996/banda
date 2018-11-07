<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */


$this->title = 'SORTEO DE PARTICIPACIÒN';
$this->params['breadcrumbs'][] = $this->title;
CrudAsset::register($this);

?>
<div class="site-index">

    <center><div class="jumbotron">
      <br>
      <h1>Sorteo de Participación</h1>

        <p class="lead">V Encuentro Regional Estudiantil de Escoltas y Bandas de Guerras Zona Sur.</p>

        <p><a class="btn btn-lg btn-success" href="/registro/create">Registro</a></p>

    </div></center>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-10">




            </div>
        </div>

    </div>
</div>
