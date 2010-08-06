<?php
class CheckinSettingsForm extends CFormModel
{
	public $amPm;
	public $attendanceGrouping;
	public $date;
	public $hour;
	public $labelQuantity = '0';
	public $minute;
	public $pager;
	public $stationType = 'manned';
	public $defaultMembershipType;
	public $displayReports = 'no';

	public function rules() {
		return array(
			array('displayReports, stationType, labelQuantity, date, attendanceGrouping, hour, minute, amPm', 'required'),
			array('pager', 'boolean'),
			array('defaultMembershipType', 'safe'),
		);
	}

	public function attributeLabels() {
		return array(
			'pager'=>'We use pagers',
		);
	}
}
?>
