<script type="text/html" id="tmpl-bsfm-template">
	<# if( 'select-cf' === data.clas ) { #>
		<?php Bsfm_Postmeta::select_all_cf7forms(); ?>
	<# } #>
	<# if ( 'condition-field' === data.clas ) { #>
		<span class="dashicons dashicons-minus remove-item"></span>
		<span class="dashicons dashicons-editor-justify sort-items"></span>
		<select class="select-condition form-control" name="pm_condition[]">
			<option value="UR">User Register on WordPress</option>
			<option value="CP">User Post a Comment</option>
			<option value="CF7">User Submit Contact Form 7</option>
		</select>
		<div class="first-condition" style="display:inline;"></div>
		<div class="second-condition" style="display:inline;"></div>
	<# } #>
	<# if ( 'action-field' === data.clas ) { #>
		<span class="dashicons dashicons-minus remove-item"></span>
		<span class="dashicons dashicons-editor-justify sort-items"></span>
		<select class="select-action form-control" name="pm_action[]">
	    	<option value="segment">Segment</option>
		</select>
		<div class="first-action" style="display:inline;">
			<select id="sub-cp-action" class="sub-cp-action form-control" name="sub_seg_action[]">
				<option value="pre_segments">Select predefined segment</option>
			</select>
		</div>
		<div class="second-action" style="display:inline;">
			<?php Bsfm_Postmeta::select_all_segments(); ?>
		</div>
	<# } #>
	<# if( 'sub-cp-condition' === data.clas ) { #>
		<select id="sub-cp-condition" class="sub-cp-condition form-control" name="sub_cp_condition[]">
			<option value="ao_website">Anywhere on website</option>
			<option value="os_page">On Specific Page</option>
			<option value="os_post">On Specific Post</option>
		</select>
	<# } #>
	<# if( 'os_page' === data.clas ) { #>
		<?php Bsfm_Postmeta::select_all_pages(); ?>
	<# } #>
	<# if( 'os_post' === data.clas ) { #>
		<?php Bsfm_Postmeta::select_all_posts(); ?>
	<# } #>
	<# if( 'mautic_fields' === data.clas ) { #>
		<table style="float: right;">
			<tbody>
			<# for (var i = 0; i < data.fieldCnt; i++) { #>
				<tr>
					<td>
						<select class="mautic_forms" name='mautic_cfields[<# print(data.formId); #>][]'>
							<?php Bsfm_Postmeta::mautic_get_all_cfields(); ?>
						</select>
					</td>
				</tr>
			<# } #>
			</tbody>
		</table>
	<# } #>
	<# if( 'm_form' === data.clas ) { #>
		<table style=" ">
			<tbody>
				<tr>
					<td><label>Choose Form: </label></td>
					<td><?php Bsfm_Postmeta::select_all_mforms(); ?></td>
				</tr>
				<tr>
					<td><label>Form Fields: </label></td>
					<td>
						<select class="mautic_form_fields" name=''>
							<?php Bsfm_Postmeta::mautic_get_all_form_fields(); ?></td>
						</select>
				</tr>
				<tr>
					<td><label>Name Field : </label></td>
					<td><input name="mautic_form_field[]" value=""/></td>
				</tr>
				<tr>
					<td><label>Email Field : </label></td>
					<td><input name="mautic_form_field[]" value=""/></td>
				</tr>
			</tbody>
		</table>
	<# } #>
</script>