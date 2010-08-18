<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<META HTTP-EQUIV="Expires" CONTENT="Fri, 26 Mar 1999 23:59:59 GMT">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/checkinMain.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css" />
		
	<?php echo CGoogleApi::init(); ?>
	 
	<?php echo CHtml::script(
		CGoogleApi::load('jquery','1.4') . "\n" .
		CGoogleApi::load('jqueryui','1.8') . "\n"
	); ?>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-4053439-2']);
	  _gaq.push(['_setDomainName', '.ccbchurch.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	
	<style type="text/css" media="print">
		
		#header {display: none;}
		#top-nav {display: none;}
		#page-nav {display: none;}
		#screen-content-only {display: none;}
		.print-no {display: none;page-break-after:always;}

	</style>
</head>

<body>

<div id="container">
	
	<div id="header">
	</div>
		
	<div id="top-nav">
		<ul class="">
			<li><a href="checkin_start.php" onclick="return confirm_this('You are about to exit this check-in setup. To re-enter, you will have to reset certain information for this check-in station.');">Redo Setup</a></li>
			<li><a href="logout.php?checkin=true" onclick="return confirm_this('You are about to logout. This will require an administrator to re-input the login and password for this check-in station.');">Logout</a></li>
		</ul>
	</div>
	
	<div id="page-nav">
	</div>
	
	<div id="content">
		<?php echo $content; ?>
	</div>
	
</div>

</body>
</html>

