<?php

/**
 * This is the model class for table "campus".
 *
 * The followings are the available columns in table 'campus':
 * @property integer $id
 * @property string $name
 * @property integer $order_by
 * @property string $email
 * @property string $phone
 * @property string $locale
 * @property string $timezone
 * @property string $currency_symbol
 * @property string $checkin_login
 * @property string $checkin_password
 * @property string $giving_statement_message
 * @property string $pledge_statement_message
 * @property string $online_gift_message
 * @property string $index_page_text
 * @property string $meet_at_name
 * @property string $meet_at_street
 * @property string $meet_at_city
 * @property string $meet_at_state
 * @property string $meet_at_zip
 * @property string $meet_at_country_iso
 * @property string $mailing_name
 * @property string $mailing_street
 * @property string $mailing_city
 * @property string $mailing_state
 * @property string $mailing_zip
 * @property string $mailing_country_iso
 * @property string $mailing_latitude
 * @property string $mailing_longitude
 * @property string $default_state
 * @property integer $default_letter_margin_top
 * @property integer $default_letter_margin_bottom
 * @property integer $default_letter_margin_left
 * @property integer $default_letter_margin_right
 * @property string $pco_key
 * @property string $pco_secret
 * @property string $inactive
 * @property integer $creator_id
 * @property integer $modifier_id
 * @property string $date_created
 * @property string $date_modified
 */
class Campus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Campus the static model class
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
			array('index_page_text, date_modified', 'required'),
			array('order_by, default_letter_margin_top, default_letter_margin_bottom, default_letter_margin_left, default_letter_margin_right, creator_id, modifier_id', 'numerical', 'integerOnly'=>true),
			array('name, phone, checkin_login, meet_at_name, meet_at_city, mailing_name, mailing_city', 'length', 'max'=>50),
			array('email', 'length', 'max'=>128),
			array('locale, timezone, checkin_password, meet_at_state, mailing_state', 'length', 'max'=>20),
			array('currency_symbol, meet_at_zip, mailing_zip, mailing_latitude, mailing_longitude', 'length', 'max'=>10),
			array('giving_statement_message, pledge_statement_message, online_gift_message', 'length', 'max'=>255),
			array('meet_at_street, mailing_street', 'length', 'max'=>150),
			array('meet_at_country_iso, mailing_country_iso', 'length', 'max'=>2),
			array('default_state', 'length', 'max'=>3),
			array('pco_key, pco_secret', 'length', 'max'=>256),
			array('inactive', 'length', 'max'=>1),
			array('date_created', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, order_by, email, phone, locale, timezone, currency_symbol, checkin_login, checkin_password, giving_statement_message, pledge_statement_message, online_gift_message, index_page_text, meet_at_name, meet_at_street, meet_at_city, meet_at_state, meet_at_zip, meet_at_country_iso, mailing_name, mailing_street, mailing_city, mailing_state, mailing_zip, mailing_country_iso, mailing_latitude, mailing_longitude, default_state, default_letter_margin_top, default_letter_margin_bottom, default_letter_margin_left, default_letter_margin_right, pco_key, pco_secret, inactive, creator_id, modifier_id, date_created, date_modified', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'order_by' => 'Order By',
			'email' => 'Email',
			'phone' => 'Phone',
			'locale' => 'Locale',
			'timezone' => 'Timezone',
			'currency_symbol' => 'Currency Symbol',
			'checkin_login' => 'Checkin Login',
			'checkin_password' => 'Checkin Password',
			'giving_statement_message' => 'Giving Statement Message',
			'pledge_statement_message' => 'Pledge Statement Message',
			'online_gift_message' => 'Online Gift Message',
			'index_page_text' => 'Index Page Text',
			'meet_at_name' => 'Meet At Name',
			'meet_at_street' => 'Meet At Street',
			'meet_at_city' => 'Meet At City',
			'meet_at_state' => 'Meet At State',
			'meet_at_zip' => 'Meet At Zip',
			'meet_at_country_iso' => 'Meet At Country Iso',
			'mailing_name' => 'Mailing Name',
			'mailing_street' => 'Mailing Street',
			'mailing_city' => 'Mailing City',
			'mailing_state' => 'Mailing State',
			'mailing_zip' => 'Mailing Zip',
			'mailing_country_iso' => 'Mailing Country Iso',
			'mailing_latitude' => 'Mailing Latitude',
			'mailing_longitude' => 'Mailing Longitude',
			'default_state' => 'Default State',
			'default_letter_margin_top' => 'Default Letter Margin Top',
			'default_letter_margin_bottom' => 'Default Letter Margin Bottom',
			'default_letter_margin_left' => 'Default Letter Margin Left',
			'default_letter_margin_right' => 'Default Letter Margin Right',
			'pco_key' => 'Pco Key',
			'pco_secret' => 'Pco Secret',
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

		$criteria->compare('name',$this->name,true);

		$criteria->compare('order_by',$this->order_by);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('phone',$this->phone,true);

		$criteria->compare('locale',$this->locale,true);

		$criteria->compare('timezone',$this->timezone,true);

		$criteria->compare('currency_symbol',$this->currency_symbol,true);

		$criteria->compare('checkin_login',$this->checkin_login,true);

		$criteria->compare('checkin_password',$this->checkin_password,true);

		$criteria->compare('giving_statement_message',$this->giving_statement_message,true);

		$criteria->compare('pledge_statement_message',$this->pledge_statement_message,true);

		$criteria->compare('online_gift_message',$this->online_gift_message,true);

		$criteria->compare('index_page_text',$this->index_page_text,true);

		$criteria->compare('meet_at_name',$this->meet_at_name,true);

		$criteria->compare('meet_at_street',$this->meet_at_street,true);

		$criteria->compare('meet_at_city',$this->meet_at_city,true);

		$criteria->compare('meet_at_state',$this->meet_at_state,true);

		$criteria->compare('meet_at_zip',$this->meet_at_zip,true);

		$criteria->compare('meet_at_country_iso',$this->meet_at_country_iso,true);

		$criteria->compare('mailing_name',$this->mailing_name,true);

		$criteria->compare('mailing_street',$this->mailing_street,true);

		$criteria->compare('mailing_city',$this->mailing_city,true);

		$criteria->compare('mailing_state',$this->mailing_state,true);

		$criteria->compare('mailing_zip',$this->mailing_zip,true);

		$criteria->compare('mailing_country_iso',$this->mailing_country_iso,true);

		$criteria->compare('mailing_latitude',$this->mailing_latitude,true);

		$criteria->compare('mailing_longitude',$this->mailing_longitude,true);

		$criteria->compare('default_state',$this->default_state,true);

		$criteria->compare('default_letter_margin_top',$this->default_letter_margin_top);

		$criteria->compare('default_letter_margin_bottom',$this->default_letter_margin_bottom);

		$criteria->compare('default_letter_margin_left',$this->default_letter_margin_left);

		$criteria->compare('default_letter_margin_right',$this->default_letter_margin_right);

		$criteria->compare('pco_key',$this->pco_key,true);

		$criteria->compare('pco_secret',$this->pco_secret,true);

		$criteria->compare('inactive',$this->inactive,true);

		$criteria->compare('creator_id',$this->creator_id);

		$criteria->compare('modifier_id',$this->modifier_id);

		$criteria->compare('date_created',$this->date_created,true);

		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider('Campus', array(
			'criteria'=>$criteria,
		));
	}
}