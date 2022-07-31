<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<<div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'addres')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'first_phone')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'second_phone')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'third_phone')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <?= $form->field($model, 'tweetter_link')->textInput(['maxlength' => true]) ?>
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
