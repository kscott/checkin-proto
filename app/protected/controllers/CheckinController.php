<?php

class CheckinController extends Controller
{
	public $layout='//layouts/checkin';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionSearch()
	{
		$term = $_GET['term'];

		$nameCriteria = new CDbCriteria();
		//$nameCriteria->addSearchCondition('name_first', $term . '%', false);
		$nameCriteria->addSearchCondition('name_last', $term . '%', false, 'OR');

		$phoneCriteria = new CDbCriteria();
		$phoneCriteria->addSearchCondition('phone_contact', '%' . $term, false);

		$nameCriteria->mergeWith($phoneCriteria, false);
		
		$individuals = Individual::model()->findAll($nameCriteria);

		$names = array();
		foreach( $individuals as $individual ) {
			if ( $individual->family->name ) {
				$last_name = $individual->family->name;
			}
			else {
				$last_name = $individual->name_last;
			}

			$names[] = array('name' => stripslashes($last_name . ', ' . $individual->name_first), 'id' => $individual->family->id);
		}
		
		echo json_encode(array('names' => $names));
		exit;
	}

	public function actionEvents() {
		echo 'hello';
	}

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
