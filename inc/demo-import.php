<?php
function ocdi_import_files() {
	return [
		[
			'import_file_name'           => 'Halim Main Demo',
			'categories'                 => [ 'Main' ],
			'import_file_url'            => get_template_directory_uri() . '/demo-import/halim-content.xml',
			'import_widget_file_url'     => get_template_directory_uri() . '/demo-import/halim-widget.wie',
			'import_customizer_file_url' => get_template_directory_uri() . '/demo-import/halim-customizer.dat',
		]
	];
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );