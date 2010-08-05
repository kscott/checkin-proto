<?php
class CheckinSettingsForm extends CFormModel
{
	public $attendanceGrouping;
	public $date;
	public $hour;
	public $minute;
	public $amPm;

	public function rules() {
		return array(
			array('date, attendanceGrouping, hour, minute, amPm', 'required'),
		);
	}

	public function attributeLabels() {
		return array(
				'date'=>'Event Date',
		);
	}
}
?>
