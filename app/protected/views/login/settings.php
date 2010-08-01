<?php if ( $message != "" ) { ?><div id="message"><?= urldecode($message); ?></div><?php } ?>

<h1>Check-In Station Settings</h1>
	
<div class="form">
<form autocomplete="off" method="POST" action="checkin_start.php" name="main_form">
	<input type="hidden" name="ax" value="confirm_settings" />
	<input type="hidden" name="checkin_type" value="standard" />
	
	
	<h2>Attendance Grouping</h2>
	<p class="block-intro">These are the categories that certain groups are placed into for attendance tracking purposes. Select one from the list to access the groups in that category for check-in.</p>
	<div class="block">
		<p>
			<?php
			if ( ! $attendance_grouping_id ) {
				$attendance_grouping_id = $session['ci_attendance_grouping_id'];
			}
			?>
		</p>
	</div>
	
	<h2>Date &amp; Time</h2>
	<p class="block-intro">The groups that are a part of the attendance grouping selected above must have events already setup for the date and time you select here to be available for check-in. After you click "Start Check-In", you will see a list of all of the groups in the selected attendance grouping and whether or not they have an event ready for check-in for the selected date and time.</p>
	<div class="block">
		<p>
			<select name="last_day_date" onChange="window.document.main_form.checkin_date.value = this.value;" style="font-size:14px;height:24px;">
				<option value="">Today</option>
			</select>
			<?php
			if ( ! $checkin_date ) {
				//$checkin_date_and_time = date_convert_datetime_to_timestamp(date_local_date_now_for_sql() . ' 09:00:00');
			}
			else {
            	if ($time_ampm == 'AM') {
            	    if ($time_hour == 12) $time_hour = 0;
            	}
            	else { // $time_ampm == 'PM'
            	    if ($time_hour < 12) $time_hour = $time_hour + 12;
            	}
				//$checkin_date = date_format_date_from_sql_to_input($checkin_date);
				//$checkin_date_and_time = date_convert_datetime_to_timestamp( date_format_date_from_input_to_sql($checkin_date) . sprintf(" %02d:%02d:00", $time_hour, $time_minute));
			}
			?>
			<input type="text" name="checkin_date" value="<?= $checkin_date; ?>" style="width:85px;" maxlength="10" /> <strong>&#64;</strong>
			<select name="time_hour" style="font-size:14px;height:24px;"></select>
			<select name="time_minute" style="font-size:14px;height:24px;"></select>
			<select name="time_ampm" style="font-size:14px;height:24px;"></select>
		</p>
		<?php
		if ( $session['mod_checkin_multi_service'] ) {
			?>
			<br /><div id="more_times_link" style="text-align:center;padding-top:5px;"><a href="javascript:void(0)"  onClick="jQuery('#more_times_link').hide();jQuery('#more_times').fadeIn().find('select[name=time_2_hour]').focus();return false;" class="admin">Add Additional Service Times</a></div>
			<?php
		}
		?>
	</div>
	<?php
	if ( $session['mod_checkin_multi_service'] ) {
		?>
		<div id="more_times" <?= ($time_2_hour == '' && $time_3_hour == '')?'style="display:none;"':''; ?>>
			<div class="block no-break-block">
				<p>
					<?php
					if ( $time_2_hour ) {
                    	if ($time_2_ampm == 'AM') {
                    	    if ($time_2_hour == 12) $time_2_hour = 0;
                    	}
                    	else { // $time_ampm == 'PM'
                    	    if ($time_2_hour < 12) $time_2_hour = $time_2_hour + 12;
                    	}
        				//$checkin_2_date_and_time = date_convert_datetime_to_timestamp( date_format_date_from_input_to_sql($checkin_date) . sprintf(" %02d:%02d:00", $time_2_hour, $time_2_minute));
						//$checkin_2_date_and_time_hour_part = strtotime( $checkin_date . sprintf(" %02d:%02d:00", $time_2_hour, $time_2_minute) );
					}
					elseif ( $checkin_date ) {
        				//$checkin_2_date_and_time = date_convert_datetime_to_timestamp(date_local_date_now_for_sql() . ' 09:00:00');
						//$checkin_2_date_and_time_hour_part = 'none_selected';
					}
					?>
					2nd Service Time
					<select name="time_2_hour" style="font-size:14px;height:24px;"><option value="">--</option></select>
					<select name="time_2_minute" style="font-size:14px;height:24px;"><option value="">--</option></select>
					<select name="time_2_ampm" style="font-size:14px;height:24px;"></select>
				</p>
			</div>
			<div class="block no-break-block">
				<p>
					<?php
    				if ( $time_3_hour ) {
                    	if ($time_3_ampm == 'AM') {
                    	    if ($time_3_hour == 12) $time_3_hour = 0;
                    	}
                    	else { // $time_ampm == 'PM'
                    	    if ($time_3_hour < 12) $time_3_hour = $time_3_hour + 12;
                    	}
        				//$checkin_3_date_and_time = date_convert_datetime_to_timestamp( date_format_date_from_input_to_sql($checkin_date) . sprintf(" %02d:%02d:00", $time_3_hour, $time_3_minute));
    					//$checkin_3_date_and_time_hour_part = strtotime( $checkin_date . sprintf(" %02d:%02d:00", $time_3_hour, $time_3_minute) );
    				}
    				elseif ( $checkin_date ) {
        				//$checkin_3_date_and_time = date_convert_datetime_to_timestamp(date_local_date_now_for_sql() . ' 09:00:00');
    					//$checkin_3_date_and_time_hour_part = 'none_selected';
    				}
					?>
					3rd Service Time
					<select name="time_3_hour" style="font-size:14px;height:24px;"><option value="">--</option></select>
					<select name="time_3_minute" style="font-size:14px;height:24px;"><option value="">--</option></select>
					<select name="time_3_ampm" style="font-size:14px;height:24px;"></select>
				</p>
			</div>
		</div>
		<?php
	}
	?>
	
	<h2>Label Options</h2>
	<p class="block-intro">The check-in system can be used for child check-in, church-wide events, adult classes, youth check-in, etc. Under different scenarios, you might need the labels to have a security code,
		you might need an extra label for a diaper bag, you might only want the person's name for an adult group setting or you may not need a label at all. For labels with security codes, choose the
		security code option that works best with your system of notifying parents (ie, some systems can only display 3 numeric digits while others can display alphanumerics).</p>
	<div class="block">
		<p>
			<input type="radio" name="label_quantity" value="0" <?= ($label_quantity === '0')?'checked':'';?> onClick="jQuery('#security_code_type').fadeOut();jQuery('#pagers_block').fadeIn();" />Check-in without printing a label<br />
			<input type="radio" name="label_quantity" value="1" <?= ($label_quantity == '1')?'checked':'';?> onClick="jQuery('#security_code_type').fadeIn();jQuery('#pagers_block').fadeIn();" />Print one label with a security code, plus a pick-up tag<br />
			<input type="radio" name="label_quantity" value="2" <?= ($label_quantity == '2')?'checked':'';?> onClick="jQuery('#security_code_type').fadeIn();jQuery('#pagers_block').fadeIn();" />Print two labels with a security code, plus a pick-up tag<br />
			<input type="radio" name="label_quantity" value="7" <?= ($label_quantity == '7')?'checked':'';?> onClick="jQuery('#security_code_type').fadeOut();jQuery('#pagers_block').fadeOut();" />Print a name only label<br />
		</p>
	</div>
	<div class="block no-break-block" id="security_code_type" <?= ($label_quantity != '1' && $label_quantity != '2')?'style="display:none;"':''; ?>>
		<p>
			<input type="radio" name="security_code_type" value="min" <?= ($security_code_type != 'nbr4' && $security_code_type != 'nbr3')?'checked':'';?> /> Alphanumeric Security Code (Most Secure)<br/>
			<input type="radio" name="security_code_type" value="nbr4" <?= ($security_code_type == 'nbr4')?'checked':'';?> /> Numeric Security Code (4 Digits)<br/>
			<input type="radio" name="security_code_type" value="nbr3" <?= ($security_code_type == 'nbr3')?'checked':'';?> /> Numeric Security Code (3 Digits)
		</p>
	</div>
	
	<?php
	if ( ! $session['mod_checkin_old_style_barcode'] && $session['mod_checkin_self'] ) {
		?>
		<h2>Check-In Station Type</h2>
		<p class="block-intro">A check-in station can be either manned with a volunteer to do normal check-in, or can be unmanned and allow people who already have a barcode keytag to do basic, self check-in.</p>
		<div class="block">
			<p>
				<input type="radio" name="self_checkin_station" value="no" <?= ($self_checkin_station != 'yes')?'checked':'';?> onClick="javascript:if(this.checked == true) {set_self_checkin_display('no');}" /> Manned check-in station<br />
				<input type="radio" name="self_checkin_station" value="yes" <?= ($self_checkin_station == 'yes')?'checked':'';?> onClick="javascript:if(this.checked == true) {set_self_checkin_display('yes');}" /> Self check-in station
			</p>
		</div>
		<?php
	}
	?>
	
	
	<div id="bottom_options" <?= ($self_checkin_station == 'yes')?'style="display:none;"':''; ?>>
		
		<div id="pagers_block">
			<h2>Pagers</h2>
			<p class="block-intro">Check this box if you use pagers.</p>
			<div class="block">
				<p>
					<input type="checkbox" name="pager" value="1" <?= ($pager == '1')?'checked':'';?> />We Use Pagers
				</p>
			</div>
		</div>
		
		<h2>Membership Type</h2>
		<p class="block-intro">The membership type option selected below will be used as the default for individuals when creating a new family through this check-in station.</p>
		<div class="block">
			<p>
				<?php
				if ( ! $default_membership_type_id ) {
					$default_membership_type_id = $session['default_membership_type_id'];
				}
				?>
				<select name="default_membership_type_id"><option value="">Choose...</option><?php db_write_option_list( "membership_type", $default_membership_type_id ); ?></select>
			</p>
		</div>
		
		<?php
		if ( $session['just_logged_in'] ) {
			?>
			<h2>Reports</h2>
			<p class="block-intro">Reports can be made available from the screens during the check-in process.</p>
			<div class="block">
				<p>
					<input type="radio" name="display_reports" value="yes" <?= ($display_reports == 'yes')?'checked':'';?> /> <strong>Yes</strong>, make reports accessible from this check-in station<br />
					<input type="radio" name="display_reports" value="no" <?= ($display_reports != 'yes')?'checked':'';?> /> <strong>No</strong>, reports should not be available from this check-in station
				</p>
			</div>
			<?php
		}
		?>
		
	</div>
	
	<div class="action">
		<a href="checkin_login.php">Cancel</a>
		or <input type="submit" value="Start Check-In" />
	</div>   

</form>
</div>
