<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ToursCategory */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-12">
                 <div class="card">
                        <?php
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
                                                    <?= $form->field($model, 'translate_title['.$language.']')->textInput(['maxlength' => true,])->label(Yii::t('yii','Title',null,$language)) ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <?= $form->field($model, 'status')->textInput() ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-6" >
                                                <div class="mb-3">
                                                    <?= $form->field($model, 'images')->label(false)->fileInput(['accept'=>'image/*','data-plugins'=>'dropify', 'data-height'=>'300', 'style'=>'background-image: url({})']) ?>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <?= Html::submitButton('Save', ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body -->
                            </div>
                        <?php $j++; } ?>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
    <?php ActiveForm::end(); ?>



</div>
<!---->
<!--    <ul class="nav nav-tabs">-->
<!--        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>-->
<!--        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>-->
<!--        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
<!--    </ul>-->
<!---->
<!--    <div class="tab-content">-->
<!--        <div id="home" class="tab-pane fade in active">-->
<!--            <h3>HOME</h3>-->
<!--            <p>Some content.</p>-->
<!--        </div>-->
<!--        <div id="menu1" class="tab-pane fade">-->
<!--            <h3>Menu 1</h3>-->
<!--            <p>Some content in menu 1.</p>-->
<!--        </div>-->
<!--        <div id="menu2" class="tab-pane fade">-->
<!--            <h3>Menu 2</h3>-->
<!--            <p>Some content in menu 2.</p>-->
<!--        </div>-->
<!--    </div>-->


