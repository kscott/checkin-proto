<?php

/**
 * This is the model class for table "family".
 *
 * The followings are the available columns in table 'family':
 * @property integer $id
 * @property integer $sync_id
 * @property integer $owner_id
 * @property integer $status_id
 * @property string $name
 * @property string $picture
 * @property integer $picture_privacy_lvl
 * @property string $email
 * @property string $email_listed
 * @property integer $address_area_id
 * @property string $address_street
 * @property string $address_city
 * @property string $address_state
 * @property string $address_zip
 * @property string $address_country_iso
 * @property string $address_carrier_route
 * @property string $address_listed
 * @property integer $address_privacy_lvl
 * @property string $phone_area_code
 * @property string $phone
 * @property string $phone_listed
 * @property integer $phone_privacy_lvl
 * @property string $listed
 * @property integer $creator_id
 * @property integer $modifier_id
 * @property string $date_created
 * @property string $date_modified
 */
class Family extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Family the static model class
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
		return 'family';
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
			array('sync_id, owner_id, status_id, picture_privacy_lvl, address_area_id, address_privacy_lvl, phone_privacy_lvl, creator_id, modifier_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('picture', 'length', 'max'=>15),
			array('email', 'length', 'max'=>128),
			array('email_listed, address_listed, phone_listed, listed', 'length', 'max'=>1),
			array('address_street', 'length', 'max'=>150),
			array('address_city, address_carrier_route', 'length', 'max'=>30),
			array('address_state', 'length', 'max'=>5),
			array('address_zip', 'length', 'max'=>10),
			array('address_country_iso', 'length', 'max'=>2),
			array('phone_area_code', 'length', 'max'=>3),
			array('phone', 'length', 'max'=>50),
			array('date_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sync_id, owner_id, status_id, name, picture, picture_privacy_lvl, email, email_listed, address_area_id, address_street, address_city, address_state, address_zip, address_country_iso, address_carrier_route, address_listed, address_privacy_lvl, phone_area_code, phone, phone_listed, phone_privacy_lvl, listed, creator_id, modifier_id, date_created, date_modified', 'safe', 'on'=>'search'),
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
			'family_members' => array(self::HAS_MANY, 'Individual', 'family_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sync_id' => 'Sync',
			'owner_id' => 'Owner',
			'status_id' => 'Status',
			'name' => 'Name',
			'picture' => 'Picture',
			'picture_privacy_lvl' => 'Picture Privacy Lvl',
			'email' => 'Email',
			'email_listed' => 'Email Listed',
			'address_area_id' => 'Address Area',
			'address_street' => 'Address Street',
			'address_city' => 'Address City',
			'address_state' => 'Address State',
			'address_zip' => 'Address Zip',
			'address_country_iso' => 'Address Country Iso',
			'address_carrier_route' => 'Address Carrier Route',
			'address_listed' => 'Address Listed',
			'address_privacy_lvl' => 'Address Privacy Lvl',
			'phone_area_code' => 'Phone Area Code',
			'phone' => 'Phone',
			'phone_listed' => 'Phone Listed',
			'phone_privacy_lvl' => 'Phone Privacy Lvl',
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

		$criteria->compare('sync_id',$this->sync_id);

		$criteria->compare('owner_id',$this->owner_id);

		$criteria->compare('status_id',$this->status_id);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('picture',$this->picture,true);

		$criteria->compare('picture_privacy_lvl',$this->picture_privacy_lvl);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('email_listed',$this->email_listed,true);

		$criteria->compare('address_area_id',$this->address_area_id);

		$criteria->compare('address_street',$this->address_street,true);

		$criteria->compare('address_city',$this->address_city,true);

		$criteria->compare('address_state',$this->address_state,true);

		$criteria->compare('address_zip',$this->address_zip,true);

		$criteria->compare('address_country_iso',$this->address_country_iso,true);

		$criteria->compare('address_carrier_route',$this->address_carrier_route,true);

		$criteria->compare('address_listed',$this->address_listed,true);

		$criteria->compare('address_privacy_lvl',$this->address_privacy_lvl);

		$criteria->compare('phone_area_code',$this->phone_area_code,true);

		$criteria->compare('phone',$this->phone,true);

		$criteria->compare('phone_listed',$this->phone_listed,true);

		$criteria->compare('phone_privacy_lvl',$this->phone_privacy_lvl);

		$criteria->compare('listed',$this->listed,true);

		$criteria->compare('creator_id',$this->creator_id);

		$criteria->compare('modifier_id',$this->modifier_id);

		$criteria->compare('date_created',$this->date_created,true);

		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
