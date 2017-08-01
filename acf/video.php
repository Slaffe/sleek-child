<?php
return [
	[
		'name' => 'video-title',
		'label' => __('Title', 'sleek_child'),
		'instructions' => __('Enter a title to display above the video.', 'sleek_child'),
		'type' => 'text'
	],
	[
		'name' => 'video-description',
		'label' => __('Description', 'sleek_child'),
		'instructions' => __('Enter a description for the video.', 'sleek_child'),
		'type' => 'wysiwyg'
	],
	[
		'name' => 'video-code',
		'label' => __('Video', 'sleek_child'),
		'instructions' => __('Copy the YouTube/Vimeo URL and paste it here.', 'sleek_child'),
		'type' => 'oembed',
		'required' => true
	]
];
