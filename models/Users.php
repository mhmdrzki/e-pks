<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $nama
 * @property string $password
 * @property string|null $level
 * @property string $created_at
 * @property string|null $created_by
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'nama', 'password', 'created_at'], 'required'],
            [['id'], 'integer'],
            [['created_at'], 'safe'],
            [['username', 'password', 'created_by'], 'string', 'max' => 50],
            [['nama'], 'string', 'max' => 255],
            [['level'], 'string', 'max' => 1],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'nama' => 'Nama',
            'password' => 'Password',
            'level' => 'Level',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
