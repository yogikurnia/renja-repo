<?php

/**
 * This is the model class for table "sasaran_program".
 *
 * The followings are the available columns in table 'sasaran_program':
 * @property integer $id_sasaran_program
 * @property integer $id_program
 * @property string $sasaran_program
 *
 * The followings are the available model relations:
 * @property IkuProgram[] $ikuPrograms
 * @property MasterDataProgram $idProgram
 */
class SasaranProgram extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SasaranProgram the static model class
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
		return 'sasaran_program';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_program, sasaran_program', 'safe'),
			array('id_program', 'numerical', 'integerOnly'=>true),
			array('sasaran_program', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sasaran_program, id_program, sasaran_program', 'safe', 'on'=>'search'),
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
			'ikuPrograms' => array(self::HAS_MANY, 'IkuProgram', 'id_sasaran_program'),
			'idProgram' => array(self::BELONGS_TO, 'MasterDataProgram', 'id_program'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sasaran_program' => 'Id Sasaran Program',
			'id_program' => 'Id Program',
			'sasaran_program' => 'Sasaran Program',
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

		$criteria->compare('id_sasaran_program',$this->id_sasaran_program);
		$criteria->compare('id_program',$this->id_program);
		$criteria->compare('sasaran_program',$this->sasaran_program,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}