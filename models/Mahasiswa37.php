<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa37".
 *
 * @property int $id037
 * @property string $nim037
 * @property string $nama037
 * @property string $kelas037
 * @property string $status037
 */
class Mahasiswa37 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa37';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim037', 'nama037', 'kelas037', 'status037'], 'required'],
            [['nim037'], 'string', 'max' => 25],
            [['nama037'], 'string', 'max' => 225],
            [['kelas037'], 'string', 'max' => 10],
            [['status037'], 'string', 'max' => 50],
            [['nim037'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id037' => 'ID',
            'nim037' => 'No. Induk Mahasiswa',
            'nama037' => 'Nama Mahasiswa',
            'kelas037' => 'Kelas',
            'status037' => 'Status',
        ];
    }
}
