<?php

/**
 * This is the model class for table "organization_application".
 *
 * The followings are the available columns in table 'organization_application':
 * @property integer $id
 * @property integer $owner_id
 * @property integer $contact_tech_1_id
 * @property integer $contact_tech_2_id
 * @property string $ccb_version_database
 * @property string $ccb_version_scripts
 * @property string $database_server
 * @property string $database_slave_server
 * @property string $database_name
 * @property string $app_prefix
 * @property string $mod_checkin_on
 * @property string $mod_checkin_old_style_barcode
 * @property string $mod_checkin_room_manage_on
 * @property string $mod_checkin_self
 * @property string $mod_checkin_multi_service
 * @property string $mod_group_structure_on
 * @property string $mod_multisite_on
 * @property string $demo_mode
 * @property integer $child_work_age
 * @property string $pref_child_work_approved_ma_only
 * @property string $private_ccbchurch_url_prefix
 * @property string $color_primary
 * @property string $color_secondary
 * @property string $color_table_row_light
 * @property string $color_table_row_dark
 * @property string $default_limited_access_user
 * @property string $default_listed
 * @property integer $default_picture_privacy_lvl
 * @property integer $default_mailing_privacy_lvl
 * @property integer $default_phone_contact_privacy_lvl
 * @property integer $default_phone_home_privacy_lvl
 * @property integer $default_phone_work_privacy_lvl
 * @property integer $default_phone_mobile_privacy_lvl
 * @property integer $default_phone_fax_privacy_lvl
 * @property integer $default_phone_pager_privacy_lvl
 * @property integer $default_phone_emergency_privacy_lvl
 * @property integer $default_birthday_privacy_lvl
 * @property integer $default_anniversary_privacy_lvl
 * @property integer $default_gender_privacy_lvl
 * @property integer $default_marital_status_privacy_lvl
 * @property integer $default_home_privacy_lvl
 * @property integer $default_work_privacy_lvl
 * @property integer $default_other_privacy_lvl
 * @property integer $default_allergies_privacy_lvl
 * @property integer $default_udf_privacy_lvl
 * @property integer $default_fit_privacy_lvl
 * @property integer $default_community_privacy_lvl
 * @property string $inactive
 */
class OrgSettings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return OrgSettings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection the associated database connection
	 */
    public function getDbConnection()  
    {  
        return Yii::app()->ccb; // select the connection you want  
    }  

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organization_application';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_implementation_1_id, contact_implementation_2_id, database_slave_server, database_name, index_page_text, date_modified', 'required'),
			array('id, owner_id, contact_tech_1_id, contact_tech_2_id, child_work_age, default_picture_privacy_lvl, default_mailing_privacy_lvl, default_phone_contact_privacy_lvl, default_phone_home_privacy_lvl, default_phone_work_privacy_lvl, default_phone_mobile_privacy_lvl, default_phone_fax_privacy_lvl, default_phone_pager_privacy_lvl, default_phone_emergency_privacy_lvl, default_birthday_privacy_lvl, default_anniversary_privacy_lvl, default_gender_privacy_lvl, default_marital_status_privacy_lvl, default_home_privacy_lvl, default_work_privacy_lvl, default_other_privacy_lvl, default_allergies_privacy_lvl, default_udf_privacy_lvl, default_fit_privacy_lvl, default_community_privacy_lvl', 'numerical', 'integerOnly'=>true),
			array('ccb_version_database', 'length', 'max'=>5),
			array('ccb_version_scripts', 'length', 'max'=>20),
			array('database_server, database_slave_server', 'length', 'max'=>15),
			array('database_name', 'length', 'max'=>22),
			array('mod_checkin_on, mod_checkin_old_style_barcode, mod_checkin_room_manage_on, mod_checkin_self, mod_checkin_multi_service, mod_group_structure_on, mod_multisite_on, demo_mode, pref_child_work_approved_ma_only, default_limited_access_user, default_listed, inactive', 'length', 'max'=>1),
			array('private_ccbchurch_url_prefix', 'length', 'max'=>50),
			array('color_primary, color_secondary, color_table_row_light, color_table_row_dark', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, inactive', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'owner_id' => 'Master Admin',
			'contact_tech_1_id' => 'Contact Tech 1',
			'contact_tech_2_id' => 'Contact Tech 2',
			'ccb_version_database' => 'Database Version',
			'ccb_version_scripts' => 'Script Version',
			'database_server' => 'Database Server',
			'database_slave_server' => 'Database Slave Server',
			'database_name' => 'Database Name',
			'private_ccbchurch_url_prefix' => 'CCB Prefix',
			'mod_checkin_on' => 'Mod Checkin On',
			'mod_checkin_old_style_barcode' => 'Mod Checkin Old Style Barcode',
			'mod_checkin_room_manage_on' => 'Mod Checkin Room Manage On',
			'mod_checkin_self' => 'Mod Checkin Self',
			'mod_checkin_multi_service' => 'Mod Checkin Multi Service',
			'mod_multisite_on' => 'Mod Multisite On',
			'demo_mode' => 'Demo Mode',
			'child_work_age' => 'Child Work Age',
			'pref_child_work_approved_ma_only' => 'Pref Child Work Approved Ma Only',
			'private_ccbchurch_url_prefix' => 'Private Ccbchurch Url Prefix',
			'name' => 'Name',
			'color_primary' => 'Primary Color',
			'color_secondary' => 'Secondary Color',
			'color_table_row_light' => 'Color Table Row Light',
			'color_table_row_dark' => 'Color Table Row Dark',
			'default_limited_access_user' => 'Default Limited Access User',
			'default_listed' => 'Default Listed',
			'default_picture_privacy_lvl' => 'Default Picture Privacy Lvl',
			'default_mailing_privacy_lvl' => 'Default Mailing Privacy Lvl',
			'default_phone_contact_privacy_lvl' => 'Default Phone Contact Privacy Lvl',
			'default_phone_home_privacy_lvl' => 'Default Phone Home Privacy Lvl',
			'default_phone_work_privacy_lvl' => 'Default Phone Work Privacy Lvl',
			'default_phone_mobile_privacy_lvl' => 'Default Phone Mobile Privacy Lvl',
			'default_phone_fax_privacy_lvl' => 'Default Phone Fax Privacy Lvl',
			'default_phone_pager_privacy_lvl' => 'Default Phone Pager Privacy Lvl',
			'default_phone_emergency_privacy_lvl' => 'Default Phone Emergency Privacy Lvl',
			'default_birthday_privacy_lvl' => 'Default Birthday Privacy Lvl',
			'default_anniversary_privacy_lvl' => 'Default Anniversary Privacy Lvl',
			'default_gender_privacy_lvl' => 'Default Gender Privacy Lvl',
			'default_marital_status_privacy_lvl' => 'Default Marital Status Privacy Lvl',
			'default_home_privacy_lvl' => 'Default Home Privacy Lvl',
			'default_work_privacy_lvl' => 'Default Work Privacy Lvl',
			'default_other_privacy_lvl' => 'Default Other Privacy Lvl',
			'default_allergies_privacy_lvl' => 'Default Allergies Privacy Lvl',
			'default_udf_privacy_lvl' => 'Default Udf Privacy Lvl',
			'default_fit_privacy_lvl' => 'Default Fit Privacy Lvl',
			'default_community_privacy_lvl' => 'Default Community Privacy Lvl',
			'inactive' => 'Inactive',
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

		$criteria->compare('inactive',$this->inactive,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}