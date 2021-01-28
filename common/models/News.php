<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id_news
 * @property string $judul
 * @property string $konten
 * @property int $status
 * @property string $tanggal_pembuatan
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
            [['judul', 'konten', 'status', 'tanggal_pembuatan'], 'required'],
            [['judul', 'konten', 'tanggal_pembuatan'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_news' => Yii::t('app', 'Id News'),
            'judul' => Yii::t('app', 'Judul'),
            'konten' => Yii::t('app', 'Konten'),
            'status' => Yii::t('app', 'Status'),
            'tanggal_pembuatan' => Yii::t('app', 'Tanggal Pembuatan'),
        ];
    }
}
