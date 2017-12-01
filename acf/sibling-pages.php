<?php
/***
Sibling Pages is very similar to Child Pages but instead of displaying a posts children it displays its siblings. It's common to use Child Pages on the parent and Sibling Pages on every child of the parent.
***/
return [
	[
		'name' => 'sibling-pages-title',
		'label' => __('Title', 'sleek_child'),
		'instructions' => __('Enter a title above the list of sibling pages.', 'sleek_child'),
		'type' => 'text'
	],
	[
		'name' => 'sibling-pages-description',
		'label' => __('Description', 'sleek_child'),
		'instructions' => __('Enter a description for the sibling pages.', 'sleek_child'),
		'type' => 'wysiwyg'
	]
];
