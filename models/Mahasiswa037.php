<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_037".
 *
 * @property int $Id
 * @property string $Nim
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 * @property string $Id_mahasiswa
 */
class Mahasiswa037 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_037';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nim', 'Nama', 'Kelas', 'Jurusan', 'Id_mahasiswa'], 'required'],
            [['Nim', 'Id_mahasiswa'], 'string', 'max' => 11],
            [['Nama', 'Jurusan'], 'string', 'max' => 256],
            [['Kelas'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nim' => 'No. Induk Mahasiswa',
            'Nama' => 'Nama Mahasiswa',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
            // 'Id_mahasiswa' => 'Id Mahasiswa',
        ];
    }
    public function getProfile037()
    {
        return $this->hasOne(Profile037::class, ['Id' => 'Id']);
    }
}
