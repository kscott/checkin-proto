<?php

/**
 * This is the model class for table "event_grouping".
 *
 * The followings are the available columns in table 'event_grouping':
 * @property integer $id
 * @property integer $owner_id
 * @property string $name
 * @property integer $order_by
 * @property string $editable
 * @property string $listed
 * @property integer $creator_id
 * @property integer $modifier_id
 * @property string $date_created
 * @property string $date_modified
 */
class AttendanceGrouping extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AttendanceGrouping the static model class
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
		return 'event_grouping';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_modified', 'required'),
			array('owner_id, order_by, creator_id, modifier_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>30),
			array('editable, listed', 'length', 'max'=>1),
			array('date_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, owner_id, name, order_by, editable, listed, creator_id, modifier_id, date_created, date_modified', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'owner_id' => 'Owner',
			'name' => 'Name',
			'order_by' => 'Order By',
			'editable' => 'Editable',
			'listed' => 'Listed',
			'creator_id' => 'Creator',
			'modifier_id' => 'Modifier',
			'date_created' => 'Date Created',
			'date_modified' => 'Date Modified',
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

		$criteria->compare('id',$this->id);

		$criteria->compare('owner_id',$this->owner_id);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('order_by',$this->order_by);

		$criteria->compare('editable',$this->editable,true);

		$criteria->compare('listed',$this->listed,true);

		$criteria->compare('creator_id',$this->creator_id);

		$criteria->compare('modifier_id',$this->modifier_id);

		$criteria->compare('date_created',$this->date_created,true);

		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider('AttendanceGrouping', array(
			'criteria'=>$criteria,
		));
	}
}