<?php

/**
 * This is the model class for table "master_data_program".
 *
 * The followings are the available columns in table 'master_data_program':
 * @property integer $id_program
 * @property integer $id_master_data
 * @property integer $id_satuan_kerja
 * @property integer $kode_program
 * @property string $program
 * @property integer $tahun_anggaran
 * @property integer $tahun_aktif
 * @property integer $id_referensi
 *
 * The followings are the available model relations:
 * @property MasterDataKegiatan[] $masterDataKegiatans
 * @property SatuanKerja $idSatuanKerja
 * @property TahunAnggaran $tahunAnggaran
 * @property MasterDataProgram $idReferensi
 * @property MasterDataProgram[] $masterDataPrograms
 * @property TahunAktif $tahunAktif
 * @property MasterData $idMasterData
 * @property SasaranProgram[] $sasaranPrograms
 */
class MasterDataProgram extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MasterDataProgram the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'master_data_program';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_master_data, id_satuan_kerja, kode_program, tahun_anggaran, tahun_aktif, id_referensi', 'numerical', 'integerOnly'=>true),
			array('program', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_program, id_master_data, id_satuan_kerja, kode_program, program, tahun_anggaran, tahun_aktif, id_referensi', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'masterDataKegiatans' => array(self::HAS_MANY, 'MasterDataKegiatan', 'id_program'),
			'idSatuanKerja' => array(self::BELONGS_TO, 'SatuanKerja', 'id_satuan_kerja'),
			'tahunAnggaran' => array(self::BELONGS_TO, 'TahunAnggaran', 'tahun_anggaran'),
			'idReferensi' => array(self::BELONGS_TO, 'MasterDataProgram', 'id_referensi'),
			'masterDataPrograms' => array(self::HAS_MANY, 'MasterDataProgram', 'id_referensi'),
			'tahunAktif' => array(self::BELONGS_TO, 'TahunAktif', 'tahun_aktif'),
			'idMasterData' => array(self::BELONGS_TO, 'MasterData', 'id_master_data'),
			'sasaranPrograms' => array(self::HAS_MANY, 'SasaranProgram', 'id_program'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_program' => 'Id Program',
			'id_master_data' => 'Id Master Data',
			'id_satuan_kerja' => 'Id Satuan Kerja',
			'kode_program' => 'Kode Program',
			'program' => 'Program',
			'tahun_anggaran' => 'Tahun Anggaran',
			'tahun_aktif' => 'Tahun Aktif',
			'id_referensi' => 'Id Referensi',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_program',$this->id_program);
		$criteria->compare('id_master_data',$this->id_master_data);
		$criteria->compare('id_satuan_kerja',$this->id_satuan_kerja);
		$criteria->compare('kode_program',$this->kode_program);
		$criteria->compare('program',$this->program,true);
		$criteria->compare('tahun_anggaran',$this->tahun_anggaran);
		$criteria->compare('tahun_aktif',$this->tahun_aktif);
		$criteria->compare('id_referensi',$this->id_referensi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}