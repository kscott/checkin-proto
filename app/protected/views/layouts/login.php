<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/checkin.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css" />

	<?php echo CGoogleApi::init(); ?>
	 
	<?php echo CHtml::script(
		CGoogleApi::load('jquery','1.4') . "\n" .
		CGoogleApi::load('jqueryui','1.8') . "\n"
	); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="settings">

<div class="container" id="page">
	<div id="dialog">
		<?php echo $content; ?>
	</div>
</div><!-- page -->

</body>
</html>
