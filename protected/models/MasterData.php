<?php

/**
 * This is the model class for table "master_data".
 *
 * The followings are the available columns in table 'master_data':
 * @property integer $id_master_data
 * @property integer $tahun_awal
 * @property integer $tahun_akhir
 *
 * The followings are the available model relations:
 * @property MasterDataKegiatan[] $masterDataKegiatans
 * @property MasterDataProgram[] $masterDataPrograms
 */
class MasterData extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MasterData the static model class
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
		return 'master_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tahun_awal, tahun_akhir', 'safe'),
			array('tahun_awal, tahun_akhir', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_master_data, tahun_awal, tahun_akhir', 'safe', 'on'=>'search'),
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
			'masterDataKegiatans' => array(self::HAS_MANY, 'MasterDataKegiatan', 'id_master_data'),
			'masterDataPrograms' => array(self::HAS_MANY, 'MasterDataProgram', 'id_master_data'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_master_data' => 'Id Master Data',
			'tahun_awal' => 'Tahun Awal',
			'tahun_akhir' => 'Tahun Akhir',
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

		$criteria->compare('id_master_data',$this->id_master_data);
		$criteria->compare('tahun_awal',$this->tahun_awal);
		$criteria->compare('tahun_akhir',$this->tahun_akhir);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}