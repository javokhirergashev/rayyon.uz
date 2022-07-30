<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tours".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $category_id
 * @property string|null $body
 * @property string $created_date
 * @property string $updated_date
 * @property string|null $price
 * @property string|null $images
 * @property int|null $status
 */
class Tours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $translate_title;
    public $translate_description;
    public $translate_body;
    public static function tableName()
    {
        return 'tours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'created_date', 'updated_date'], 'required'],
            [['category_id', 'status'], 'integer'],
            [['body'], 'string'],
            [['created_date', 'updated_date'], 'safe'],
            [['title', 'description', 'price', 'images'], 'string', 'max' => 255],
            [['translate_title', 'translate_description', 'translate_body'], 'safe']
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
            'description' => 'Description',
            'translate_description'=>Yii::t('yii','Description'),
            'category_id' => 'Category ID',
            'body' => 'Body',
            'translate_body'=>Yii::t('yii','Body'),
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'price' => 'Price',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
    public function getTitle($language=null)
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
    public function getDescription($language=null)
    {
        $description = json_decode($this->description,true);

        if ($language) {
            if (isset($description[$language])) {
                return $description[$language];
            }else {
                return null;
            }
        }
        if (isset($description[Yii::$app->language])) {
            if ($description[Yii::$app->language]!='') {
                return $description[Yii::$app->language];
            }
            $a = null;
            foreach ($description as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($description as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
