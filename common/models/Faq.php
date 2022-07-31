<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property string $client_firstname
 * @property string $client_name
 * @property string $client_email
 * @property string|null $images
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $translate_question;
    public $translate_answer;
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'answer'], 'required'],
            [['question', 'answer'], 'string'],
            [['translate_question', 'translate_answer',], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question' => 'Question',
            'translate_question'=>Yii::t('yii','Question'),
            'translate_answer'=>Yii::t('yii','Answer'),
            'answer' => 'Answer',

        ];
    }
    public function getQuestion($language=null)
    {
        $question = json_decode($this->question,true);

        if ($language) {
            if (isset($title[$question])) {
                return $title[$question];
            }else {
                return null;
            }
        }
        if (isset($question[Yii::$app->language])) {
            if ($question[Yii::$app->language]!='') {
                return $question[Yii::$app->language];
            }
            $a = null;
            foreach ($question as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($question as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
    public function getAnswer($language=null)
    {
        $answer = json_decode($this->answer,true);

        if ($language) {
            if (isset($answer[$language])) {
                return $answer[$language];
            }else {
                return null;
            }
        }
        if (isset($answer[Yii::$app->language])) {
            if ($answer[Yii::$app->language]!='') {
                return $answer[Yii::$app->language];
            }
            $a = null;
            foreach ($answer as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }else{
            $a = null;
            foreach ($answer as $value) {
                if ($value!='') {
                    $a = $value;
                    break;
                }
            }
            return $a;
        }
    }
}
