<?php
$textBlock = include get_stylesheet_directory() . '/acf/text-block.php';

return [
	[
		'name' => 'text-blocks-title',
		'label' => __('Title', 'sleek_child'),
		'instructions' => __('Enter a title to display above the text blocks.', 'sleek_child'),
		'type' => 'text'
	],
	[
		'name' => 'text-blocks-description',
		'label' => __('Description', 'sleek_child'),
		'instructions' => __('Enter a description for the text blocks.', 'sleek_child'),
		'type' => 'wysiwyg'
	],
	[
		'name' => 'text-blocks',
		'label' => __('Text Blocks', 'sleek_child'),
		'instructions' => __('Add any number of text blocks here.', 'sleek_child'),
		'button_label' => __('Add a text block', 'sleek_child'),
		'type' => 'repeater',
		'layout' => 'row',
		'sub_fields' => $textBlock
	]
];
