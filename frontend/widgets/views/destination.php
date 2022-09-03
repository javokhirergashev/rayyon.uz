<!-- Destination 1 -->
<section class="destination1 section-padding bg-lightnav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-subtitle"><?=Yii::t("app", "topdes")?></div>
                <div class="section-title"><?=Yii::t("app", "popular")?> <span><?=Yii::t("app", "popdes")?></span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel owl-theme">
                    <?php if (!empty($models)) :?>
                        <?php foreach ($models as $model) : ?>
                            <?php
                            $image = \common\models\StaticFunctions::getImage('tours_category',$model->id,$model->images);
                            ?>
                            <div class="item">
                                <div class="position-re o-hidden"><img src="<?=$image?>" alt=""></div> <span class="category"><a href="#0">New</a></span>
                                <div class="con">
                                    <h5><a href="tour-details.html"><i class="ti-location-pin"></i><?=$model["name_".Yii::$app->language];?></a></h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col col-md-8">
                                        </div>
                                        <div class="col col-md-4 text-right">
                                            <div class="permalink"><a href="<?=\yii\helpers\Url::to(["/category/view", "id"=>$model->id])?>"><?=Yii::t("app", "more")?> <i class="ti-arrow-right"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>