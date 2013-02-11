<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $post_id
 * @property integer $category_id
 * @property string $post_name
 * @property string $post_content
 * @property string $created_on
 * @property string $created_by
 * @property integer $is_delete
 * @property string $post_image
 *
 * The followings are the available model relations:
 * @property Category $category
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, is_delete', 'numerical', 'integerOnly'=>true),
			array('post_name, created_on, created_by, post_image', 'length', 'max'=>255),
			array('post_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('post_id, category_id, post_name, post_content, created_on, created_by, is_delete, post_image', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'post_id' => 'Post',
			'category_id' => 'Category',
			'post_name' => 'Post Name',
			'post_content' => 'Post Content',
			'created_on' => 'Created On',
			'created_by' => 'Created By',
			'is_delete' => 'Is Delete',
			'post_image' => 'Post Image',
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

		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('post_name',$this->post_name,true);
		$criteria->compare('post_content',$this->post_content,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('is_delete',$this->is_delete);
		$criteria->compare('post_image',$this->post_image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}