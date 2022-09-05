<section>
    <div class="container">
        <ul id="filters">
            <li class="active" data-filter="*">All</li>
            <li data-filter=".branding" class="">Branding</li>
            <li data-filter=".packaging" class="">Packaging</li>
            <li data-filter=".web-design" class="">Web Design</li>
        </ul>
        <div class="wide three-col" id="works-grid" style="position: relative; height: 506.344px;">
            <?php if (!empty($models)) :?>
                <?php foreach ($models as $model):?>
                    <?php
                        $image = \common\models\StaticFunctions::getImage('tours_category',$model->id,$model->images)
                    ?>
                    <div class="work-item branding" style="position: absolute; left: 0px; top: 0px;">
                        <div class="work-detail">
                            <a href="portfolio-single-1.html">
                                <img src="<?=$image?>" alt="">
                                <div class="work-info">
                                    <div class="centrize">
                                        <div class="v-center">
                                            <h3><?=$model->getTitle()?></h3>
                                            <p><?=$model->getTitle()?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>