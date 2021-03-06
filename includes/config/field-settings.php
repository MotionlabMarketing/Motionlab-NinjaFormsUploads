<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$max_mb_int = NF_FU_Helper::max_upload_mb_int();

return apply_filters( 'ninja_forms_uploads_field_settings', array(
	'save_to_server' => array(
		'name'  => 'save_to_server',
		'type'  => 'toggle',
		'value' => '1',
		'label' => __( 'Save to Server', 'ninja-forms-uploads' ),
		'group' => 'primary',
		'width' => 'one-half',
		'help'  => __( 'Save the file to the server.', 'ninja-forms-uploads' ),
	),
	'upload_rename' => array(
		'name'           => 'upload_rename',
		'type'           => 'textbox',
		'value'          => '',
		'label'          => __( 'Rename Uploaded File', 'ninja-forms-uploads' ),
		'group'          => 'primary',
		'width'          => 'full',
		'help'           => __( 'Advanced renaming options. You can also create directories using "/". If you do not want to rename the files, leave this box blank', 'ninja-forms-uploads' ),
		'use_merge_tags' => true,
	),
	'media_library' => array(
		'name'  => 'media_library',
		'type'  => 'toggle',
		'value' => 'false',
		'label' => __( 'Save to Media Library', 'ninja-forms-uploads' ),
		'group' => 'primary',
		'width' => 'one-half',
		'help'  => __( 'Save to Media Library.', 'ninja-forms-uploads' ),
		'deps'  => array(
			'save_to_server' => true,
		),
	),
	'upload_multi_count' => array(
		'name'  => 'upload_multi_count',
		'type'  => 'number',
		'label' => __( 'File Limit', 'ninja-forms-uploads' ),
		'value' => 1,
		'width' => 'one-half',
		'group' => 'restrictions',
		'help'  => __( 'How many files can be uploaded?', 'ninja-forms-uploads' ),
	),
	'upload_types'       => array(
		'name'        => 'upload_types',
		'type'        => 'textbox',
		'label'       => __( 'Allowed File Types', 'ninja-forms-uploads' ),
		'help'        => __( 'Comma Separated List of allowed file types. An empty list means all file types are accepted. (i.e. jpg, gif, png, pdf) This is not fool-proof and can be tricked, please remember that there is always a danger in allowing users to upload files.', 'ninja-forms-uploads' ),
		'group'       => 'restrictions',
		'width'       => 'one-half',
	),
	'max_file_size' => array(
		'name'  => 'max_file_size',
		'type'  => 'number',
		'label' => __( 'Maximum File Size (MB)', 'ninja-forms-uploads' ),
		'value' => '',
		'max'   => $max_mb_int, // TODO fix max not appearing in markup
		'width' => 'one-half',
		'group' => 'restrictions',
		'help'  => sprintf( __( 'Maximum size of a file that can be uploaded. Defaults to %sM', 'ninja-forms-uploads' ), NF_File_Uploads()->controllers->settings->get_setting( 'max_filesize', $max_mb_int ) ),
	),
	'min_file_size' => array(
		'name'  => 'min_file_size',
		'type'  => 'number',
		'label' => __( 'Minimum File Size (MB)', 'ninja-forms-uploads' ),
		'value' => '0',
		'width' => 'one-half',
		'group' => 'restrictions',
		'help'  => __( 'Minimum size of a file that can be uploaded.', 'ninja-forms-uploads' ),
	),
	'select_files_text' => array(
		'name'  => 'select_files_text',
		'type'  => 'textbox',
		'value' => __( 'Select Files', 'ninja-forms-uploads' ),
		'label' => __( 'Select Files Button Text', 'ninja-forms-uploads' ),
		'group' => 'display',
		'width' => 'full',
		'help'  => __( 'Change the button text for selecting files.', 'ninja-forms-uploads' ),
	),
) );
