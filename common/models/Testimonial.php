<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $images
 * @property int|null $status
 */
class Testimonial extends \yii\db\ActiveRecord
{
    public $translate_comment;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'comment', ], 'required'],
            [['comment'], 'string'],
            [['status'], 'integer'],
            [['name', 'email', ], 'string', 'max' => 255],
            [['translate_comment'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'comment' => 'Comment',
            'images' => 'Images',
            'status' => 'Status',
        ];
    }
    public function getTitle($language=null)
    {
        $title = json_decode($this->comment,true);

        if ($language) {
            if (isset($comment[$language])) {
                return $comment[$language];
            }else {
                return null;
            }
        }
        if (isset($comment[Yii::$app->language])) {
            if ($comment[Yii::$app->language]!='') {
                return $comment[Yii::$app->language];
            }
            $a = null;
            foreach ($comment as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($comment as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
