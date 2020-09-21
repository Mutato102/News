<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $description
 * @property string $image
 * @property int $favorite
 * @property string|null $create_date
 * @property int $id_city
 *
 * @property Comment[] $comments
 * @property City $city
 * @property NewsTags[] $newsTags
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'info', 'description',  'favorite', 'id_city'], 'required'],
            [['description'], 'string'],
            [['favorite', 'id_city'], 'integer'],
            [['create_date'], 'safe'],
            [['name', 'info', 'image'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['id_city'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['id_city' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название новости',
            'info' => 'Краткое описание',
            'description' => 'Описание',
            'image' => 'Картинка',
            'favorite' => 'Favorite',
            'create_date' => 'Create Date',
            'id_city' => 'Id City',
        ];
    }

    public function getShortText($text){
        $length=strlen($text);
        $norm=3000-(int)$text;
        if($length<2550){
           return str_pad($text, $norm,"-", STR_PAD_RIGHT);
        }
        $text = mb_substr($text,0,2550);
        $firsPos = strripos($text,' ');
        $text = mb_substr($text, 0, $firsPos);
        return $text . '...';
    }

    public function getHeading($heading){
         return ucfirst($heading->name);
    }
    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id_news' => 'id']);
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'id_city']);
    }
    public function getCityName()
    {
        $city = $this->city;
        return $city ? $city->name : '';
    }
    /**
     * Gets query for [[NewsTags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsTags()
    {
        return $this->hasMany(NewsTags::className(), ['id_news' => 'id']);
    }

}
