<section class="tours3 section-padding bg-lightnav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle"><span><?=Yii::t("app", "choose")?></span></div>
                <div class="section-title"><?=Yii::t("app", "popular")?> <span><?=Yii::t("app", "poptours")?></span></div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($models)) :?>
                <?php foreach ($models as $model) : ?>
                    <?php
                    $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
                    if (is_file($image)){
                        $image = "images/no_photo.png";
                    }
                    ?>
                    <div class="col-md-4">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="<?=$image?>"> <span class="category"><a href="#0"><?=$model['title_'.Yii::$app->language];?></a></span>
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4><?=$model['title_'.Yii::$app->language];?></h4>
                                        <h6><?=$model->price?></h6>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2 bg-whitee" id="backwhite">
                                <div class="square-container2">
                                    <h4><?=$model['title_'.Yii::$app->language];?></h4>
                                    <h6><?=$model->price?></h6>
                                    <p><?=$model['description_'.Yii::$app->language];?></p>
                                    <div class="row tour-list mb-30">
                                        <div class="col col-md-6">
                                            <ul>
                                                <li><i class="ti-time"></i><?=$model->period?>;</li>
                                                <li><i class="ti-user"></i> 10+</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-line"><a href="<?=\yii\helpers\Url::to(["toursview/view", "id"=>$model->id])?>"><?=Yii::t("app", "more")?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif; ?>
        </div>
    </div>
</section>