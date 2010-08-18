<?php

/**
 * This is the model class for table "individual".
 *
 * The followings are the available columns in table 'individual':
 * @property integer $id
 * @property integer $campus_id
 * @property string $mailing_longitude
 * @property integer $sync_id
 * @property string $checkin_barcode
 * @property string $token_doc
 * @property string $token_rss
 * @property string $token_access
 * @property string $token_ics
 * @property integer $owner_id
 * @property integer $family_id
 * @property string $family_position
 * @property string $login
 * @property string $password
 * @property string $login_date_created
 * @property integer $login_creator_id
 * @property string $limited_access_user
 * @property string $name_prefix
 * @property string $name_first
 * @property string $name_middle
 * @property string $name_last
 * @property string $name_suffix
 * @property string $name_legal
 * @property string $picture
 * @property integer $picture_privacy_lvl
 * @property string $email_list_general
 * @property string $pref_default_messages
 * @property string $pref_default_comments
 * @property string $pref_default_digest
 * @property string $pref_default_text
 * @property string $email_primary
 * @property string $email_primary_listed
 * @property string $email_secondary
 * @property string $email_secondary_listed
 * @property integer $mailing_area_id
 * @property string $mailing_name
 * @property string $mailing_street
 * @property string $mailing_city
 * @property string $mailing_state
 * @property string $mailing_zip
 * @property string $mailing_country_iso
 * @property string $mailing_carrier_route
 * @property string $mailing_listed
 * @property integer $mailing_privacy_lvl
 * @property string $phone_contact_area_code
 * @property string $phone_contact
 * @property string $phone_contact_ext
 * @property integer $phone_contact_privacy_lvl
 * @property string $phone_home_area_code
 * @property string $phone_home
 * @property string $phone_home_ext
 * @property string $phone_home_listed
 * @property integer $phone_home_privacy_lvl
 * @property string $phone_work_area_code
 * @property string $phone_work
 * @property string $phone_work_ext
 * @property string $phone_work_listed
 * @property integer $phone_work_privacy_lvl
 * @property string $phone_mobile_area_code
 * @property string $phone_mobile
 * @property string $phone_mobile_ext
 * @property string $phone_mobile_listed
 * @property integer $phone_mobile_privacy_lvl
 * @property integer $phone_mobile_sms_carrier_id
 * @property string $phone_fax_area_code
 * @property string $phone_fax
 * @property string $phone_fax_ext
 * @property string $phone_fax_listed
 * @property integer $phone_fax_privacy_lvl
 * @property string $phone_pager_area_code
 * @property string $phone_pager
 * @property string $phone_pager_ext
 * @property string $phone_pager_listed
 * @property integer $phone_pager_privacy_lvl
 * @property string $phone_emergency_area_code
 * @property string $phone_emergency
 * @property string $phone_emergency_ext
 * @property string $phone_emergency_listed
 * @property integer $phone_emergency_privacy_lvl
 * @property string $emergency_contact_name
 * @property string $birthday
 * @property integer $birthday_privacy_lvl
 * @property string $anniversary
 * @property integer $anniversary_privacy_lvl
 * @property integer $age_bracket_id
 * @property string $gender
 * @property integer $gender_privacy_lvl
 * @property string $giving_number
 * @property string $marital_status
 * @property integer $marital_status_privacy_lvl
 * @property string $membership_date
 * @property string $membership_date_stop
 * @property string $pref_toggle_search
 * @property integer $pref_list_quantity
 * @property string $pref_home_transactions
 * @property string $date_child_work_start
 * @property string $date_child_work_stop
 * @property integer $membership_type_id
 * @property integer $spiritual_maturity_id
 * @property string $baptized
 * @property integer $message_comment_count
 * @property string $deceased
 * @property string $inactive
 * @property string $listed
 * @property string $last_login_date
 * @property string $last_login_http_user_agent
 * @property string $ind_has_updated_comm_settings
 * @property integer $creator_id
 * @property integer $modifier_id
 * @property string $date_created
 * @property string $date_modified
 * @property string $mailing_latitude
 */
class Individual extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Individual the static model class
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
        return 'individual';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('password, date_modified', 'required'),
            array('campus_id, sync_id, owner_id, family_id, login_creator_id, picture_privacy_lvl, mailing_area_id, mailing_privacy_lvl, phone_contact_privacy_lvl, phone_home_privacy_lvl, phone_work_privacy_lvl, phone_mobile_privacy_lvl, phone_mobile_sms_carrier_id, phone_fax_privacy_lvl, phone_pager_privacy_lvl, phone_emergency_privacy_lvl, birthday_privacy_lvl, anniversary_privacy_lvl, age_bracket_id, gender_privacy_lvl, marital_status_privacy_lvl, pref_list_quantity, membership_type_id, spiritual_maturity_id, message_comment_count, creator_id, modifier_id', 'numerical', 'integerOnly'=>true),
            array('mailing_longitude, mailing_zip, mailing_latitude', 'length', 'max'=>10),
            array('checkin_barcode', 'length', 'max'=>64),
            array('token_doc, token_rss, token_access, token_ics', 'length', 'max'=>32),
            array('family_position, limited_access_user, email_list_general, pref_default_messages, pref_default_comments, pref_default_digest, pref_default_text, email_primary_listed, email_secondary_listed, mailing_listed, phone_home_listed, phone_work_listed, phone_mobile_listed, phone_fax_listed, phone_pager_listed, phone_emergency_listed, gender, marital_status, pref_toggle_search, pref_home_transactions, baptized, inactive, listed, ind_has_updated_comm_settings', 'length', 'max'=>1),
            array('login, mailing_name, phone_contact, phone_home, phone_work, phone_mobile, phone_fax, phone_pager, phone_emergency', 'length', 'max'=>50),
            array('name_prefix, name_suffix', 'length', 'max'=>16),
            array('name_first, name_middle, name_last, name_legal, giving_number', 'length', 'max'=>20),
            array('picture', 'length', 'max'=>15),
            array('email_primary, email_secondary', 'length', 'max'=>128),
            array('mailing_street', 'length', 'max'=>150),
            array('mailing_city, mailing_carrier_route, emergency_contact_name', 'length', 'max'=>30),
            array('mailing_state, phone_contact_ext, phone_home_ext, phone_work_ext, phone_mobile_ext, phone_fax_ext, phone_pager_ext, phone_emergency_ext', 'length', 'max'=>5),
            array('mailing_country_iso', 'length', 'max'=>2),
            array('phone_contact_area_code, phone_home_area_code, phone_work_area_code, phone_mobile_area_code, phone_fax_area_code, phone_pager_area_code, phone_emergency_area_code', 'length', 'max'=>3),
            array('last_login_http_user_agent', 'length', 'max'=>120),
            array('login_date_created, birthday, anniversary, membership_date, membership_date_stop, date_child_work_start, date_child_work_stop, deceased, last_login_date, date_created', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, campus_id, mailing_longitude, sync_id, checkin_barcode, token_doc, token_rss, token_access, token_ics, owner_id, family_id, family_position, login, password, login_date_created, login_creator_id, limited_access_user, name_prefix, name_first, name_middle, name_last, name_suffix, name_legal, picture, picture_privacy_lvl, email_list_general, pref_default_messages, pref_default_comments, pref_default_digest, pref_default_text, email_primary, email_primary_listed, email_secondary, email_secondary_listed, mailing_area_id, mailing_name, mailing_street, mailing_city, mailing_state, mailing_zip, mailing_country_iso, mailing_carrier_route, mailing_listed, mailing_privacy_lvl, phone_contact_area_code, phone_contact, phone_contact_ext, phone_contact_privacy_lvl, phone_home_area_code, phone_home, phone_home_ext, phone_home_listed, phone_home_privacy_lvl, phone_work_area_code, phone_work, phone_work_ext, phone_work_listed, phone_work_privacy_lvl, phone_mobile_area_code, phone_mobile, phone_mobile_ext, phone_mobile_listed, phone_mobile_privacy_lvl, phone_mobile_sms_carrier_id, phone_fax_area_code, phone_fax, phone_fax_ext, phone_fax_listed, phone_fax_privacy_lvl, phone_pager_area_code, phone_pager, phone_pager_ext, phone_pager_listed, phone_pager_privacy_lvl, phone_emergency_area_code, phone_emergency, phone_emergency_ext, phone_emergency_listed, phone_emergency_privacy_lvl, emergency_contact_name, birthday, birthday_privacy_lvl, anniversary, anniversary_privacy_lvl, age_bracket_id, gender, gender_privacy_lvl, giving_number, marital_status, marital_status_privacy_lvl, membership_date, membership_date_stop, pref_toggle_search, pref_list_quantity, pref_home_transactions, date_child_work_start, date_child_work_stop, membership_type_id, spiritual_maturity_id, baptized, message_comment_count, deceased, inactive, listed, last_login_date, last_login_http_user_agent, ind_has_updated_comm_settings, creator_id, modifier_id, date_created, date_modified, mailing_latitude', 'safe', 'on'=>'search'),
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
			'family' => array(self::BELONGS_TO, 'Family', 'family_id')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'campus_id' => 'Campus',
            'mailing_longitude' => 'Mailing Longitude',
            'sync_id' => 'Sync',
            'checkin_barcode' => 'Checkin Barcode',
            'token_doc' => 'Token Doc',
            'token_rss' => 'Token Rss',
            'token_access' => 'Token Access',
            'token_ics' => 'Token Ics',
            'owner_id' => 'Owner',
            'family_id' => 'Family',
            'family_position' => 'Family Position',
            'login' => 'Login',
            'password' => 'Password',
            'login_date_created' => 'Login Date Created',
            'login_creator_id' => 'Login Creator',
            'limited_access_user' => 'Limited Access User',
            'name_prefix' => 'Name Prefix',
            'name_first' => 'Name First',
            'name_middle' => 'Name Middle',
            'name_last' => 'Name Last',
            'name_suffix' => 'Name Suffix',
            'name_legal' => 'Name Legal',
            'picture' => 'Picture',
            'picture_privacy_lvl' => 'Picture Privacy Lvl',
            'email_list_general' => 'Email List General',
            'pref_default_messages' => 'Pref Default Messages',
            'pref_default_comments' => 'Pref Default Comments',
            'pref_default_digest' => 'Pref Default Digest',
            'pref_default_text' => 'Pref Default Text',
            'email_primary' => 'Email Primary',
            'email_primary_listed' => 'Email Primary Listed',
            'email_secondary' => 'Email Secondary',
            'email_secondary_listed' => 'Email Secondary Listed',
            'mailing_area_id' => 'Mailing Area',
            'mailing_name' => 'Mailing Name',
            'mailing_street' => 'Mailing Street',
            'mailing_city' => 'Mailing City',
            'mailing_state' => 'Mailing State',
            'mailing_zip' => 'Mailing Zip',
            'mailing_country_iso' => 'Mailing Country Iso',
            'mailing_carrier_route' => 'Mailing Carrier Route',
            'mailing_listed' => 'Mailing Listed',
            'mailing_privacy_lvl' => 'Mailing Privacy Lvl',
            'phone_contact_area_code' => 'Phone Contact Area Code',
            'phone_contact' => 'Phone Contact',
            'phone_contact_ext' => 'Phone Contact Ext',
            'phone_contact_privacy_lvl' => 'Phone Contact Privacy Lvl',
            'phone_home_area_code' => 'Phone Home Area Code',
            'phone_home' => 'Phone Home',
            'phone_home_ext' => 'Phone Home Ext',
            'phone_home_listed' => 'Phone Home Listed',
            'phone_home_privacy_lvl' => 'Phone Home Privacy Lvl',
            'phone_work_area_code' => 'Phone Work Area Code',
            'phone_work' => 'Phone Work',
            'phone_work_ext' => 'Phone Work Ext',
            'phone_work_listed' => 'Phone Work Listed',
            'phone_work_privacy_lvl' => 'Phone Work Privacy Lvl',
            'phone_mobile_area_code' => 'Phone Mobile Area Code',
            'phone_mobile' => 'Phone Mobile',
            'phone_mobile_ext' => 'Phone Mobile Ext',
            'phone_mobile_listed' => 'Phone Mobile Listed',
            'phone_mobile_privacy_lvl' => 'Phone Mobile Privacy Lvl',
            'phone_mobile_sms_carrier_id' => 'Phone Mobile Sms Carrier',
            'phone_fax_area_code' => 'Phone Fax Area Code',
            'phone_fax' => 'Phone Fax',
            'phone_fax_ext' => 'Phone Fax Ext',
            'phone_fax_listed' => 'Phone Fax Listed',
            'phone_fax_privacy_lvl' => 'Phone Fax Privacy Lvl',
            'phone_pager_area_code' => 'Phone Pager Area Code',
            'phone_pager' => 'Phone Pager',
            'phone_pager_ext' => 'Phone Pager Ext',
            'phone_pager_listed' => 'Phone Pager Listed',
            'phone_pager_privacy_lvl' => 'Phone Pager Privacy Lvl',
            'phone_emergency_area_code' => 'Phone Emergency Area Code',
            'phone_emergency' => 'Phone Emergency',
            'phone_emergency_ext' => 'Phone Emergency Ext',
            'phone_emergency_listed' => 'Phone Emergency Listed',
            'phone_emergency_privacy_lvl' => 'Phone Emergency Privacy Lvl',
            'emergency_contact_name' => 'Emergency Contact Name',
            'birthday' => 'Birthday',
            'birthday_privacy_lvl' => 'Birthday Privacy Lvl',
            'anniversary' => 'Anniversary',
            'anniversary_privacy_lvl' => 'Anniversary Privacy Lvl',
            'age_bracket_id' => 'Age Bracket',
            'gender' => 'Gender',
            'gender_privacy_lvl' => 'Gender Privacy Lvl',
            'giving_number' => 'Giving Number',
            'marital_status' => 'Marital Status',
            'marital_status_privacy_lvl' => 'Marital Status Privacy Lvl',
            'membership_date' => 'Membership Date',
            'membership_date_stop' => 'Membership Date Stop',
            'pref_toggle_search' => 'Pref Toggle Search',
            'pref_list_quantity' => 'Pref List Quantity',
            'pref_home_transactions' => 'Pref Home Transactions',
            'date_child_work_start' => 'Date Child Work Start',
            'date_child_work_stop' => 'Date Child Work Stop',
            'membership_type_id' => 'Membership Type',
            'spiritual_maturity_id' => 'Spiritual Maturity',
            'baptized' => 'Baptized',
            'message_comment_count' => 'Message Comment Count',
            'deceased' => 'Deceased',
            'inactive' => 'Inactive',
            'listed' => 'Listed',
            'last_login_date' => 'Last Login Date',
            'last_login_http_user_agent' => 'Last Login Http User Agent',
            'ind_has_updated_comm_settings' => 'Ind Has Updated Comm Settings',
            'creator_id' => 'Creator',
            'modifier_id' => 'Modifier',
            'date_created' => 'Date Created',
            'date_modified' => 'Date Modified',
            'mailing_latitude' => 'Mailing Latitude',
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

        $criteria->compare('campus_id',$this->campus_id);

        $criteria->compare('mailing_longitude',$this->mailing_longitude,true);

        $criteria->compare('sync_id',$this->sync_id);

        $criteria->compare('checkin_barcode',$this->checkin_barcode,true);

        $criteria->compare('token_doc',$this->token_doc,true);

        $criteria->compare('token_rss',$this->token_rss,true);

        $criteria->compare('token_access',$this->token_access,true);

        $criteria->compare('token_ics',$this->token_ics,true);

        $criteria->compare('owner_id',$this->owner_id);

        $criteria->compare('family_id',$this->family_id);

        $criteria->compare('family_position',$this->family_position,true);

        $criteria->compare('login',$this->login,true);

        $criteria->compare('password',$this->password,true);

        $criteria->compare('login_date_created',$this->login_date_created,true);

        $criteria->compare('login_creator_id',$this->login_creator_id);

        $criteria->compare('limited_access_user',$this->limited_access_user,true);

        $criteria->compare('name_prefix',$this->name_prefix,true);

        $criteria->compare('name_first',$this->name_first,true);

        $criteria->compare('name_middle',$this->name_middle,true);

        $criteria->compare('name_last',$this->name_last,true);

        $criteria->compare('name_suffix',$this->name_suffix,true);

        $criteria->compare('name_legal',$this->name_legal,true);

        $criteria->compare('picture',$this->picture,true);

        $criteria->compare('picture_privacy_lvl',$this->picture_privacy_lvl);

        $criteria->compare('email_list_general',$this->email_list_general,true);

        $criteria->compare('pref_default_messages',$this->pref_default_messages,true);

        $criteria->compare('pref_default_comments',$this->pref_default_comments,true);

        $criteria->compare('pref_default_digest',$this->pref_default_digest,true);

        $criteria->compare('pref_default_text',$this->pref_default_text,true);

        $criteria->compare('email_primary',$this->email_primary,true);

        $criteria->compare('email_primary_listed',$this->email_primary_listed,true);

        $criteria->compare('email_secondary',$this->email_secondary,true);

        $criteria->compare('email_secondary_listed',$this->email_secondary_listed,true);

        $criteria->compare('mailing_area_id',$this->mailing_area_id);

        $criteria->compare('mailing_name',$this->mailing_name,true);

        $criteria->compare('mailing_street',$this->mailing_street,true);

        $criteria->compare('mailing_city',$this->mailing_city,true);

        $criteria->compare('mailing_state',$this->mailing_state,true);

        $criteria->compare('mailing_zip',$this->mailing_zip,true);

        $criteria->compare('mailing_country_iso',$this->mailing_country_iso,true);

        $criteria->compare('mailing_carrier_route',$this->mailing_carrier_route,true);

        $criteria->compare('mailing_listed',$this->mailing_listed,true);

        $criteria->compare('mailing_privacy_lvl',$this->mailing_privacy_lvl);

        $criteria->compare('phone_contact_area_code',$this->phone_contact_area_code,true);

        $criteria->compare('phone_contact',$this->phone_contact,true);

        $criteria->compare('phone_contact_ext',$this->phone_contact_ext,true);

        $criteria->compare('phone_contact_privacy_lvl',$this->phone_contact_privacy_lvl);

        $criteria->compare('phone_home_area_code',$this->phone_home_area_code,true);

        $criteria->compare('phone_home',$this->phone_home,true);

        $criteria->compare('phone_home_ext',$this->phone_home_ext,true);

        $criteria->compare('phone_home_listed',$this->phone_home_listed,true);

        $criteria->compare('phone_home_privacy_lvl',$this->phone_home_privacy_lvl);

        $criteria->compare('phone_work_area_code',$this->phone_work_area_code,true);

        $criteria->compare('phone_work',$this->phone_work,true);

        $criteria->compare('phone_work_ext',$this->phone_work_ext,true);

        $criteria->compare('phone_work_listed',$this->phone_work_listed,true);

        $criteria->compare('phone_work_privacy_lvl',$this->phone_work_privacy_lvl);

        $criteria->compare('phone_mobile_area_code',$this->phone_mobile_area_code,true);

        $criteria->compare('phone_mobile',$this->phone_mobile,true);

        $criteria->compare('phone_mobile_ext',$this->phone_mobile_ext,true);

        $criteria->compare('phone_mobile_listed',$this->phone_mobile_listed,true);

        $criteria->compare('phone_mobile_privacy_lvl',$this->phone_mobile_privacy_lvl);

        $criteria->compare('phone_mobile_sms_carrier_id',$this->phone_mobile_sms_carrier_id);

        $criteria->compare('phone_fax_area_code',$this->phone_fax_area_code,true);

        $criteria->compare('phone_fax',$this->phone_fax,true);

        $criteria->compare('phone_fax_ext',$this->phone_fax_ext,true);

        $criteria->compare('phone_fax_listed',$this->phone_fax_listed,true);

        $criteria->compare('phone_fax_privacy_lvl',$this->phone_fax_privacy_lvl);

        $criteria->compare('phone_pager_area_code',$this->phone_pager_area_code,true);

        $criteria->compare('phone_pager',$this->phone_pager,true);

        $criteria->compare('phone_pager_ext',$this->phone_pager_ext,true);

        $criteria->compare('phone_pager_listed',$this->phone_pager_listed,true);

        $criteria->compare('phone_pager_privacy_lvl',$this->phone_pager_privacy_lvl);

        $criteria->compare('phone_emergency_area_code',$this->phone_emergency_area_code,true);

        $criteria->compare('phone_emergency',$this->phone_emergency,true);

        $criteria->compare('phone_emergency_ext',$this->phone_emergency_ext,true);

        $criteria->compare('phone_emergency_listed',$this->phone_emergency_listed,true);

        $criteria->compare('phone_emergency_privacy_lvl',$this->phone_emergency_privacy_lvl);

        $criteria->compare('emergency_contact_name',$this->emergency_contact_name,true);

        $criteria->compare('birthday',$this->birthday,true);

        $criteria->compare('birthday_privacy_lvl',$this->birthday_privacy_lvl);

        $criteria->compare('anniversary',$this->anniversary,true);

        $criteria->compare('anniversary_privacy_lvl',$this->anniversary_privacy_lvl);

        $criteria->compare('age_bracket_id',$this->age_bracket_id);

        $criteria->compare('gender',$this->gender,true);

        $criteria->compare('gender_privacy_lvl',$this->gender_privacy_lvl);

        $criteria->compare('giving_number',$this->giving_number,true);

        $criteria->compare('marital_status',$this->marital_status,true);

        $criteria->compare('marital_status_privacy_lvl',$this->marital_status_privacy_lvl);

        $criteria->compare('membership_date',$this->membership_date,true);

        $criteria->compare('membership_date_stop',$this->membership_date_stop,true);

        $criteria->compare('pref_toggle_search',$this->pref_toggle_search,true);

        $criteria->compare('pref_list_quantity',$this->pref_list_quantity);

        $criteria->compare('pref_home_transactions',$this->pref_home_transactions,true);

        $criteria->compare('date_child_work_start',$this->date_child_work_start,true);

        $criteria->compare('date_child_work_stop',$this->date_child_work_stop,true);

        $criteria->compare('membership_type_id',$this->membership_type_id);

        $criteria->compare('spiritual_maturity_id',$this->spiritual_maturity_id);

        $criteria->compare('baptized',$this->baptized,true);

        $criteria->compare('message_comment_count',$this->message_comment_count);

        $criteria->compare('deceased',$this->deceased,true);

        $criteria->compare('inactive',$this->inactive,true);

        $criteria->compare('listed',$this->listed,true);

        $criteria->compare('last_login_date',$this->last_login_date,true);

        $criteria->compare('last_login_http_user_agent',$this->last_login_http_user_agent,true);

        $criteria->compare('ind_has_updated_comm_settings',$this->ind_has_updated_comm_settings,true);

        $criteria->compare('creator_id',$this->creator_id);

        $criteria->compare('modifier_id',$this->modifier_id);

        $criteria->compare('date_created',$this->date_created,true);

        $criteria->compare('date_modified',$this->date_modified,true);

        $criteria->compare('mailing_latitude',$this->mailing_latitude,true);

        return new CActiveDataProvider(get_class($this), array(
            'criteria'=>$criteria,
        ));
    }
}
