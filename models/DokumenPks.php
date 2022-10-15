<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokumen_pks".
 *
 * @property int $id
 * @property string $no_pks
 * @property string $nama_pks
 * @property string $jenis_pks
 * @property string $judul_pks
 * @property string $tgl_buat_pks
 * @property string|null $tgl_berakhir_pks
 * @property string $status_pks
 * @property string $tahun_pks
 * @property string $nama_file
 * @property string $bagian_pks
 * @property string $create_at
 * @property string $create_by
 */
class DokumenPks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokumen_pks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pks', 'nama_pks', 'jenis_pks', 'judul_pks', 'tgl_buat_pks', 'status_pks', 'tahun_pks', 'bagian_pks', 'create_at', 'create_by'], 'required'],
            [['tgl_buat_pks', 'tgl_berakhir_pks', 'create_at'], 'safe'],
            [['no_pks'], 'string', 'max' => 50],
            [['nama_pks', 'judul_pks'], 'string', 'max' => 150],
            [['jenis_pks', 'status_pks', 'bagian_pks'], 'string', 'max' => 2],
            [['tahun_pks', 'create_by'], 'string', 'max' => 4],
            [
                ['nama_file'] ,
                'file' ,
                'skipOnEmpty' => TRUE,
                'extensions'  => 'doc, docx, pdf',
                'maxSize'=> 1024 * 1024 * 2 
                
            ],
            [['nama_file'], 'string', 'max' => 255],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_pks' => 'No Pks',
            'nama_pks' => 'Nama',
            'jenis_pks' => 'Jenis',
            'judul_pks' => 'Judul',
            'tgl_buat_pks' => 'Tanggal Pembuatan',
            'tgl_berakhir_pks' => 'Tanggal Berakhir',
            'status_pks' => 'Status',
            'tahun_pks' => 'Tahun',
            'nama_file' => 'Nama File',
            'bagian_pks' => 'Bagian',
            'create_at' => 'Create At',
            'create_by' => 'Create By',
        ];
    }
}
