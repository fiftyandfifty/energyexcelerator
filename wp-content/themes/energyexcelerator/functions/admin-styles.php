<?php
add_action('admin_head', 'event_admin_styles');
function event_admin_styles(){ ?>
	<style type="text/css">
 
		.acf_postbox .field select#acf-field-event_type{
			width:25% !important;
		}

		.acf_postbox .field.field_type-location-field input[type="text"]{
			width:50%;
		}

		.acf-date_picker .hasDatepicker, .field_type-date_time_picker .ps_timepicker{
			width:15% !important;
		}

		input#acf-field-company_url{
			width:100%;
		}
 
	</style>
 
<?php }