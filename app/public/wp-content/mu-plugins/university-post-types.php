<?php
function university_post_types()
{
	register_post_type('event', [
		'supports' => ['title','editor','excerpt'],
		'rewrite' => ['slug' => 'Events'],
		'has_archive' => true,
		'public' => true,
		'labels' => [
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular-name' => 'Event'

		],
		'menu_icon' => 'dashicons-calendar-alt'



	]);
}

add_action('init','university_post_types');
