<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $category_id
 * @property string $category_name
 * @property string $category_content
 * @property string $created_by
 * @property string $created_on
 * @property string $category_image
 * @property integer $is_delete
 * @property integer $page_id
 * @property integer $is_featured
 *
 * The followings are the available model relations:
 * @property Page $page
 * @property Post[] $posts
 */
class Category extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Category the static model class
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
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_delete, page_id, is_featured', 'numerical', 'integerOnly'=>true),
			array('category_name, created_by, category_image', 'length', 'max'=>255),
			array('category_content, created_on', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('category_id, category_name, category_content, created_by, created_on, category_image, is_delete, page_id, is_featured', 'safe', 'on'=>'search'),
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
			'page' => array(self::BELONGS_TO, 'Page', 'page_id'),
			'posts' => array(self::HAS_MANY, 'Post', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'category_id' => 'Category',
			'category_name' => 'Category Name',
			'category_content' => 'Category Content',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'category_image' => 'Category Image',
			'is_delete' => 'Is Delete',
			'page_id' => 'Page',
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

		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('category_content',$this->category_content,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('category_image',$this->category_image,true);
		$criteria->compare('is_delete',$this->is_delete);
		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('is_featured',$this->is_featured);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}