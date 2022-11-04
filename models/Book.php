<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Book".
 *
 * @property int $id
 * @property int $id_author
 * @property string $name
 * @property int $numberOfPages
 *
 * @property Author $author
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_author', 'name', 'numberOfPages'], 'required'],
            [['id_author', 'numberOfPages'], 'integer'],
            [['name'], 'string', 'max' => 300],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => Author::class, 'targetAttribute' => ['id_author' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_author' => 'Id Author',
            'name' => 'Name',
            'numberOfPages' => 'Number Of Pages',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::class, ['id' => 'id_author']);
    }
}
