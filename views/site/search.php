<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveForm;

/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">
    <?php $form = ActiveForm::beginField();
    
    $client = \Elasticsearch\ClientBuilder::create()->build();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>

    <?= $form->field($searchModel, 'nome') ?>

    <?= $form->field($searchModel, 'categoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Apply', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

