<?php

class LoginController extends Controller
{
	public $layout='//layouts/login';
	
	public function actionLogin()
	{
		$model = new LoginForm;
		
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()) {
				$this->redirect(Yii::app()->urlManager->baseUrl . '/login/settings');
			}
		}
		$this->render('login', array('model' => $model));
	}

	public function actionIndex()
	{
		$campus = Campus::model()->find('id = :id', array(':id' => 5));
		$model = new LoginForm;
		$model->campusId = $campus->id;
		$this->render('login', array('model' => $model));
	}

	public function actionSettings()
	{
		$model = new CheckinSettingsForm;
		if(isset($_POST['CheckinSettingsForm'])) {
			$model->attributes=$_POST['CheckinSettingsForm'];

			if ( $model->validate() ) {
			}
		}
		$attendanceGroupings = AttendanceGrouping::model()->findAll();
		$attendanceGroupings = CHtml::listData($attendanceGroupings, 'id', 'name');
		$this->render('settings', array('model'=>$model, 'attendanceGroupings'=>$attendanceGroupings));
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
