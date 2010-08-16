<?php
$javascript = <<<HTML
	var cache = [];
	jQuery(document).ready(function(){
		jQuery('#checkin-search').autocomplete({
			'minLength' : 2,
			'source' : function( request, response ) {
				if ( request.term in cache ) {
					response( jQuery.map( cache[request.term].names, function(item) {
						return {
							'label' : item.name,
							'value' : item.id
						};
					}));
					return;
				}

				$.ajax({
					url: "checkin/search",
					dataType: "json",
					data: request,
					success: function( data ) {
						cache[ request.term ] = data;
						response( jQuery.map( data.names, function(item) {
							return {
								'label' : item.name,
								'value' : item.name,
								'id' : item.id
							};
						}));
					}
				});
			},
			select : function(event, ui) {
				window.location = 'checkin/' + ui.item.id;
			}
		});
		jQuery('#checkin-search').data( "autocomplete" )._renderItem = function( ul, item ) {
			var re = new RegExp(this.term, "gi");
			var label = item.label.replace(re, '<b>$&</b>');

			return jQuery( "<li></li>" )
				.data( "item.autocomplete", item )
				.append( "<a>" + label + "</a>" )
				.appendTo( ul );
		};
		jQuery('#checkin-search').data( "autocomplete" )._response = function( content ) {
			if ( content.length ) {
				content = this._normalize( content );
				this._suggest( content );
				this._trigger( "open" );
			} else {
				content = [{'label' : '<b>No results were found</b>', 'value' : this.term}];
				this._suggest( content );
				this._trigger( "open" );
			}
			this.element.removeClass( "ui-autocomplete-loading" );
			
		};
		jQuery('#checkin-search').focus();
	});
HTML;

Yii::app()->clientScript->registerScript('pageScript', $javascript, CClientScript::POS_HEAD);
?>

<div id="inner-title">Search</a></div>
	<div id="inner-title-sub">
	<em>Enter One of the following:</em><br/>
	Phone number (last 4 digits), Last name, Barcode
	</div>
	
	<div id="main-search-container">
		<div id="main-search">
			<?php echo CHtml::textField('checkin-search'); ?>
		</div>
	</div>

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
