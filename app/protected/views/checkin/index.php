<div id="inner-title">Search</a></div>

<form autocomplete="off" action="checkin_family_list.php" autocomplete="off" name="main_form" method="post" class="display:inline;">
	<input type="hidden" name="ax" value="search">
	<input type="hidden" name="where_to_go" value="family" />
	
	<div id="inner-title-sub">
	<em>Enter One of the following:</em><br/>
	Phone number (last 4 digits), Last name, Barcode
	</div>
	
	<div id="main-search-container">
		<div id="main-search">
			<input type="text" name="search_text" id="search-text" value="" size="35" maxlength="30" /> 
		</div>
	</div>

</form>

<form class="display:inline;" method="post" name="report_form" autocomplete="off" action="checkin_checkedin_list.php"></form>
	<input type="hidden" value="search" name="ax">
	<table cellspacing="4" cellpadding="2" border="0" align="center" class="f1">
				<tbody><tr>
					<td nowrap="" class="td-label-textarea">
						&nbsp;
					</td>
					<td class="td-input">
						<br>
						<select name="event_id">
							<option selected="" value="ALL">All Groups-Events</option>
												<option value="776">Ellerbe Road Church - Sunday School</option>
													<option value="723">PL 2nd-3rd - Free's Attendance</option>
													<option value="736">PL 3 - 5's - Sunday School</option>
													<option value="737">PL 4th-5th - Sunday School</option>
													<option value="778">PL Nursery - Sunday School</option>
													<option value="777">PromiseLand Weam WWW Breakdown - Sunday School - Western Campus</option>
							</select>&nbsp;&nbsp;<input type="submit" value="Lookup"><br>
						<br>
					</td>
				</tr>
		</tbody>
	</table>
</form>
