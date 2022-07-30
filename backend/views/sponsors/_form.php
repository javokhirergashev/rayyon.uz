<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sponsors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                            <div class="col-lg-6" >
                                <div class="mb-3 fdfdsf">
                                    <?= $form->field($model, 'images')->fileInput(['accept'=>'image/*','data-plugins'=>'dropify', 'data-height'=>'300', 'style'=>'background-image: url({})']) ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <?= $form->field($model, 'status')->textInput() ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                            </div>
                        </div> <!-- end card-body -->
                    </div>
                </div>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>
