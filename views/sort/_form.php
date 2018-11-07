<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sort */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sort-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tec')->textInput() ?>

    <?= $form->field($model, 'responsable')->textInput() ?>

    <?= $form->field($model, 'instructor')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
