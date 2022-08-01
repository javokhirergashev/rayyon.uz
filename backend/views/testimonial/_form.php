<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Testimonial */
/* @var $form yii\widgets\ActiveForm */

$js1 = <<<JS
    CKEDITOR.replace( 'testimonial-translate_comment-uz' );
    CKEDITOR.replace( 'testimonial-translate_comment-en' );
    CKEDITOR.replace( 'testimonial-translate_comment-ru' );
JS;
$this->registerJs($js1);
?>

<div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <?php
                // shu yerda ishlatyapman shunga kerak edi
                $languages = Yii::$app->params['languages'];
                $i = 0
                ?>
                <ul class="nav nav-tabs">
                    <?php foreach ($languages as $language => $label) { ?>
                        <li class="<?= ($i==0)?'active':'' ?>"><a data-bs-toggle="tab" aria-expanded="false" class="nav-link" href="#<?=$language?>"><?=$label?></a></li>
                        <?php $i++; } ?>
                </ul>
                <div class="tab-content">
                    <?php $j=0; foreach ($languages as $language => $label) { ?>
                    <div id="<?=$language?>" class="tab-pane  <?= ($j==0)?'active':''?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <?= $form->field($model, 'translate_comment['.$language.']')->textarea(['rows' => 6]) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <?= $form->field($model, 'images')->fileInput(['accept'=>'image/*','data-plugins'=>'dropify', 'data-height'=>'300', 'style'=>'background-image: url({})']) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
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

                            </div>
                        </div> <!-- end card-body -->
                    </div>

                    <?php $j++; } ?>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
    <?php ActiveForm::end(); ?>
</div>
