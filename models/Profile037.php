<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile_037".
 *
 * @property int $Id
 * @property string $Id_mahasiswa
 * @property string $foto_profile
 */
class Profile037 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile_037';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_mahasiswa', 'foto_profile'], 'required'],
            [['Id_mahasiswa'], 'string', 'max' => 11],
            [['foto_profile'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_mahasiswa' => 'Id Mahasiswa',
            'foto_profile' => 'Foto Profile',
        ];
    }
}
