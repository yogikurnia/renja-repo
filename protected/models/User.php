<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id_user
 * @property integer $role
 * @property integer $satuan_kerja
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $jabatan
 *
 * The followings are the available model relations:
 * @property SatuanKerja $satuanKerja
 * @property Role $role0
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role, satuan_kerja, username, password, nama, jabatan', 'required'),
			array('role, satuan_kerja', 'numerical', 'integerOnly'=>true),
			array('username, nama, jabatan', 'length', 'max'=>20),
                     array('password, salt', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_user, role, satuan_kerja, username, password, nama, jabatan', 'safe', 'on'=>'search'),
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
			'satuanKerja' => array(self::BELONGS_TO, 'SatuanKerja', 'satuan_kerja'),
			'role0' => array(self::BELONGS_TO, 'Role', 'role'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id User',
			'role' => 'Role',
			'satuan_kerja' => 'Satuan Kerja',
			'username' => 'Username',
			'password' => 'Password',
			'nama' => 'Nama',
			'jabatan' => 'Jabatan',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('role',$this->role);
		$criteria->compare('satuan_kerja',$this->satuan_kerja);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jabatan',$this->jabatan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
       
       public function validatePassword($password) {
              return $this->hashPassword($password, $this->salt) === $this->password;
       }

       public function hashPassword($password, $salt) {
              return md5($salt . $password);
       }

       public function generateSalt() {
              return uniqid('', true);
       }

       public function rans() {
              $cc = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $rr = '';
              for ($i = 0; $i < 10; $i++)
                     $rr .= $cc[rand(0, strlen($cc))];
              return $rr;
       }
}