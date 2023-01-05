<?php

//Textarea move down
function halim_move_comment_field_to_bottom( $fields ) {
//	Unset cookie
	unset( $fields['cookies'] );
	// unset comment and reset down
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'halim_move_comment_field_to_bottom' );


//Url field remove
function halim_remove_comment_url( $arg ) {
	$arg['url'] = '';

	return $arg;
}

add_filter( 'comment_form_default_fields', 'halim_remove_comment_url' );
