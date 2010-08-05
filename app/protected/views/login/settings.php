<?php if ( $message != "" ) { ?><div id="message"><?= urldecode($message); ?></div><?php } ?>

<h1>Check-In Station Settings</h1>
<div class="form">
<?php echo CHtml::errorSummary($model); ?>
	
<?php
$form = $this->beginWidget('CActiveForm', array(
			'id'=>'checkin-settings-form',
			'action'=>'settings',
			'enableAjaxValidation'=>true,
		));
?>

<h2>Attendance Grouping</h2>
<p class="block-intro">These are the categories that certain groups are placed into for attendance tracking purposes. Select one from the list to access the groups in that category for check-in.</p>
	<div class="block">
		<p>
		<?php
			echo CHtml::activeDropDownList($model, 'attendanceGrouping', $attendanceGroupings); 
		?>
		</p>
	</div>
	
	<h2>Date &amp; Time</h2>
	<p class="block-intro">The groups that are a part of the attendance grouping selected above must have events already setup for the date and time you select here to be available for check-in. After you click "Start Check-In", you will see a list of all of the groups in the selected attendance grouping and whether or not they have an event ready for check-in for the selected date and time.</p>
	<div class="block">
		<p>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array('name'=>'date', 'model'=>$model,
						'options'=>array('changeMonth'=>true, 'changeYear'=>true, 'maxDate'=>'new Date()', 'minDate'=>'-30')));
		?>
		<strong>&#64;</strong>
		<?php
			echo CHtml::activeDropDownList($model, 'hour', array('1'=>'01', '2'=>'02', '3'=>'03', '4'=>'04', '5'=>'05', '6'=>'06', '7'=>'07', '8'=>'08', '9'=>'09', '10'=>'10', '11'=>'11', '12'=>'12'));
			echo CHtml::activeDropDownList($model, 'minute', array('0'=>'00', '15'=>'15', '30'=>'30', '45'=>'45'));
			echo CHtml::activeDropDownList($model, 'amPm', array('AM'=>'AM', 'PM'=>'PM'));
			echo CHtml::error($model, 'date');
		?>
		</p>
	</div>
	
	<h2>Label Options</h2>
	<p class="block-intro">The check-in system can be used for child check-in, church-wide events, adult classes, youth check-in, etc. Under different scenarios, you might need the labels to have a security code,
		you might need an extra label for a diaper bag, you might only want the person's name for an adult group setting or you may not need a label at all. For labels with security codes, choose the
		security code option that works best with your system of notifying parents (ie, some systems can only display 3 numeric digits while others can display alphanumerics).</p>
	<div class="block">
		<p>
		</p>
	</div>
	<div class="block no-break-block" id="security_code_type" <?= ($label_quantity != '1' && $label_quantity != '2')?'style="display:none;"':''; ?>>
		<p>
		</p>
	</div>
	
	<h2>Check-In Station Type</h2>
	<p class="block-intro">A check-in station can be either manned with a volunteer to do normal check-in, or can be unmanned and allow people who already have a barcode keytag to do basic, self check-in.</p>
	<div class="block">
		<p>
		</p>
	</div>
	
	
	<div id="bottom_options" <?= ($self_checkin_station == 'yes')?'style="display:none;"':''; ?>>
		
		<div id="pagers_block">
			<h2>Pagers</h2>
			<p class="block-intro">Check this box if you use pagers.</p>
			<div class="block">
				<p>
				</p>
			</div>
		</div>
		
		<h2>Membership Type</h2>
		<p class="block-intro">The membership type option selected below will be used as the default for individuals when creating a new family through this check-in station.</p>
		<div class="block">
			<p>
			</p>
		</div>
		
		<h2>Reports</h2>
		<p class="block-intro">Reports can be made available from the screens during the check-in process.</p>
		<div class="block">
			<p>
			</p>
		</div>
		
	</div>
	
	<div class="action">
		<?php echo CHtml::submitButton('Start Check-in'); ?>
	</div>   

	<?php $this->endWidget(); ?>
</div>
