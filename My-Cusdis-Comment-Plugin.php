<?php
/*
Plugin Name: My Cusdis Comment Plugin
Description: Adds a https://cusdis.com/ custom comment system to WordPress.
Version: 1.4
Author: Roy Wikan
*/




function my_remove_comment_form($defaults) {
	//https://developer.wordpress.org/reference/hooks/comment_form_defaults/
	
	// Get the current post object
	$post = get_post();

	// Get the post ID, URL, and title
	$post_id = $post->ID;
	$post_url = get_permalink($post_id);
	$post_title = get_the_title($post_id);
	$post_title = strip_tags( $post_title, '<b><u><i><h1><h2><h3><code><blockquote><br><hr>' );
	
	
    
	$defaults['comment_field'] = ''; //bagian isian komentar
    $defaults['comment_notes_after'] = '';
    $defaults['comment_notes_before'] = '';

    $defaults['logged_in_as'] = '';
    $defaults['submit_button'] = '';
	$defaults['title_reply'] = 'Comments on <i>' . $post_title .'</i>';
	
	$defaults['fields'] = ''; //bagian isian nama email dll
	
	
    return $defaults;
}

function my_custom_comment_form() {
	// Get the current post object
	$post = get_post();

	// Get the post ID, URL, and title
	$post_id = $post->ID;
	$post_url = get_permalink($post_id);
	$post_title = get_the_title($post_id);
	$post_title = strip_tags( $post_title, '<b><u><i><h1><h2><h3><code><blockquote><br><hr>' );

	// Your JavaScript code here, using the $post_id, $post_url, and $post_title variables

	print('<i>
		<div id="cusdis_thread"
		data-host="https://cusdis.com"
		data-app-id="b05e057e-12ac-48df-a2bc-dfb48286cec2"
		data-page-id="'.$post_id.'"
		data-page-url="'.$post_url.'"
		data-page-title="'.$post_title.'" >		
		</div>
		
		<script async defer src="https://cusdis.com/js/cusdis.es.js"></script></i>

	');

}

add_filter('comment_form_defaults', 'my_remove_comment_form');

add_action('comment_form', 'my_custom_comment_form');

