<?php

/**
 * This is the model class for table "page".
 *
 * The followings are the available columns in table 'page':
 * @property integer $page_id
 * @property string $page_name
 * @property string $page_content
 * @property string $created_by
 * @property string $created_on
 * @property integer $is_delete
 * @property string $page_image
 * @property integer $page_order
 * @property integer $is_featured
 *
 * The followings are the available model relations:
 * @property Category[] $categories
 */
class Page extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Page the static model class
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
		return 'page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_on', 'required'),
			array('is_delete, page_order, is_featured', 'numerical', 'integerOnly'=>true),
			array('page_name, page_image', 'length', 'max'=>255),
			array('created_by', 'length', 'max'=>25),
			array('page_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('page_id, page_name, page_content, created_by, created_on, is_delete, page_image, page_order, is_featured', 'safe', 'on'=>'search'),
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
			'categories' => array(self::HAS_MANY, 'Category', 'page_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'page_id' => 'Page',
			'page_name' => 'Page Name',
			'page_content' => 'Page Content',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'is_delete' => 'Is Delete',
			'page_image' => 'Page Image',
			'page_order' => 'Page Order',
			'is_featured' => 'Is Featured',
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

		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('page_name',$this->page_name,true);
		$criteria->compare('page_content',$this->page_content,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('is_delete',$this->is_delete);
		$criteria->compare('page_image',$this->page_image,true);
		$criteria->compare('page_order',$this->page_order);
		$criteria->compare('is_featured',$this->is_featured);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}