<?php if($notice && $good_or_bad) { main_show_notice($notice, $good_or_bad); } ?>
<?php if ( $message != "" ) { ?><div id="message"><?= urldecode($message); ?></div><?php } ?>

<h1 style="text-align:center;">Check-In Station Login</h1>

<div class="form">
<?php 
	$form = $this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'action' => 'login/login',
		'enableAjaxValidation'=>true,
	));

	?>
	
	
	<dl id="login">
		
		<?php
		// if ( $session['has_multiple_campuses'] ) {
			?>
			<dt><?php echo $form->labelEx($model, 'campusId'); ?></dt>
			<dd>
				<?php echo CHtml::activeDropDownList($model, 'campusId', $campusList, array('empty' => 'Select a campus...')); ?>
			</dd>
			<?php
		// }
		?>
		
		<dt><?php echo $form->labelEx($model, 'username'); ?></dt>
		<dd><?php echo $form->textField($model, 'username'); ?><?php echo $form->error($model,'username'); ?></dd>
		
		<dt><?php echo $form->labelEx($model, 'password'); ?></dt>
		<dd><?php echo $form->passwordField($model, 'password'); ?><?php echo $form->error($model,'password'); ?></dd>
		
		<dd><?php echo CHtml::submitButton('Sign In'); ?></dd>
		
	</dl>
	
	<?php $this->endWidget(); ?>
</div>
