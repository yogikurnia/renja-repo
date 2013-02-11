<?php

/**
 * This is the model class for table "satuan_kerja".
 *
 * The followings are the available columns in table 'satuan_kerja':
 * @property integer $id_satuan_kerja
 * @property integer $kode_satuan_kerja
 * @property string $satuan_kerja
 * @property integer $parent_id
 * @property string $level
 *
 * The followings are the available model relations:
 * @property MasterDataKegiatan[] $masterDataKegiatans
 * @property MasterDataProgram[] $masterDataPrograms
 * @property User[] $users
 */
class SatuanKerja extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SatuanKerja the static model class
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
		return 'satuan_kerja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_satuan_kerja, satuan_kerja, parent_id, level', 'required'),
			array('kode_satuan_kerja, parent_id', 'numerical', 'integerOnly'=>true),
			array('satuan_kerja', 'length', 'max'=>50),
			array('level', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_satuan_kerja, kode_satuan_kerja, satuan_kerja, parent_id, level', 'safe', 'on'=>'search'),
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
			'masterDataKegiatans' => array(self::HAS_MANY, 'MasterDataKegiatan', 'penanggung_jawab'),
			'masterDataPrograms' => array(self::HAS_MANY, 'MasterDataProgram', 'id_satuan_kerja'),
			'users' => array(self::HAS_MANY, 'User', 'satuan_kerja'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_satuan_kerja' => 'Id Satuan Kerja',
			'kode_satuan_kerja' => 'Kode Satuan Kerja',
			'satuan_kerja' => 'Satuan Kerja',
			'parent_id' => 'Parent',
			'level' => 'Level',
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

		$criteria->compare('id_satuan_kerja',$this->id_satuan_kerja);
		$criteria->compare('kode_satuan_kerja',$this->kode_satuan_kerja);
		$criteria->compare('satuan_kerja',$this->satuan_kerja,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('level',$this->level,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}