<?php

/**
 * This is the model class for table "campus".
 *
 * The followings are the available columns in table 'campus':
 * @property integer $id
 * @property string $locale
 * @property string $timezone
 * @property string $checkin_login
 * @property string $checkin_password
 * @property string $inactive
 * @property integer $creator_id
 * @property integer $modifier_id
 * @property string $date_created
 * @property string $date_modified
 */
class CheckinUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CheckinUser the static model class
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
		return 'campus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('checkin_login', 'length', 'max'=>50),
			array('locale, timezone, checkin_password', 'length', 'max'=>20),
			array('inactive', 'length', 'max'=>1),
			array('date_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, checkin_login, checkin_password, inactive, creator_id, modifier_id, date_created, date_modified', 'safe', 'on'=>'search'),
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
			'campus' => array(self::HAS_ONE, 'Campus', 'id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'locale' => 'Locale',
			'timezone' => 'Timezone',
			'currency_symbol' => 'Currency Symbol',
			'checkin_login' => 'Login',
			'checkin_password' => 'Password',
			'inactive' => 'Inactive',
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

		$criteria->compare('locale',$this->locale,true);

		$criteria->compare('timezone',$this->timezone,true);

		$criteria->compare('checkin_login',$this->checkin_login,true);

		$criteria->compare('checkin_password',$this->checkin_password,true);

		$criteria->compare('inactive',$this->inactive,true);

		$criteria->compare('creator_id',$this->creator_id);

		$criteria->compare('modifier_id',$this->modifier_id);

		$criteria->compare('date_created',$this->date_created,true);

		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider('CheckinUser', array(
			'criteria'=>$criteria,
		));
	}
}