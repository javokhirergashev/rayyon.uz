<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tours_category".
 *
 * @property int $id
 * @property string $title
 * @property int|null $status
 * @property string $images
 */
class ToursCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tours_category';
    }
    public $translate_title;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['status'], 'integer'],
            [['title', 'images'], 'string', 'max' => 255],
            [['translate_title'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'translate_title'=>Yii::t('yii','Title'),
            'status' => 'Status',
            'images' => 'Images',
        ];
    }
    public function getTitle($language=null) # $language qayerdan keladi? paramsdan edi ok
    {
        $title = json_decode($this->title,true);

        if ($language) {
            if (isset($title[$language])) {
                return $title[$language];
            }else {
                return null;
            }
        }
        if (isset($title[Yii::$app->language])) {
            if ($title[Yii::$app->language]!='') {
                return $title[Yii::$app->language];
            }
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($title as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }

    public static function Categories(){
        $result = [];
        $categories = self::find()->all();
        foreach ($categories as $category){
            $result[$category->id] = $category->getTitle();
        }
        return $result;
    }
}
