<?php
acf_add_local_field_group( array(
	'key'                   => 'group_5bf3e14074a22',
	'title'                 => 'Alert Bar',
	'fields'                => array(
		array(
			'key'               => 'field_5bf3e2459447e',
			'label'             => 'Position',
			'name'              => 'type',
			'type'              => 'radio',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'choices'           => array(
				'header' => 'Header',
				'footer' => 'Footer',
			),
			'allow_null'        => 0,
			'other_choice'      => 0,
			'default_value'     => 'header',
			'layout'            => 'horizontal',
			'return_format'     => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_566d54cdb28616',
			'label' => 'Behaviour',
			'name' => 'behaviour',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'dismiss' => 'Dismissable',
				'minimize' => 'Minimizable',
				'permanent' => 'Permanent',
			),
			'default_value' => array(
				0 => 'dismiss',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key'               => 'field_5bf3e2569447f',
			'label'             => 'Is Sticky?',
			'name'              => 'sticky',
			'type'              => 'true_false',
			'instructions'      => 'Makes the bar stick to the top or bottom of the screen when scrolling',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'message'           => '',
			'default_value'     => 0,
			'ui'                => 0,
			'ui_on_text'        => '',
			'ui_off_text'       => '',
		),
		array(
			'key' => 'field_5de54d3e98148',
			'label' => 'Alert Bar Background Color',
			'name' => 'bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5df57d3e98148',
			'label' => 'Alert Bar Text Color',
			'name' => 'text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key'               => 'field_5bf3e1499447c',
			'label'             => 'CTA',
			'name'              => 'cta',
			'type'              => 'link',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'return_format'     => 'array',
		),
		array(
			'key' => 'field_5dd54d3e98148',
			'label' => 'Button Background Color',
			'name' => 'cta_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5dd57d3e98148',
			'label' => 'Button Text Color',
			'name' => 'cta_text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key'               => 'field_5bfac2191b4cc',
			'label'             => 'End Date',
			'name'              => 'countdown_end',
			'type'              => 'date_time_picker',
			'instructions'      => '',
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'display_format'    => 'F j, Y g:i a',
			'return_format'     => 'Y-m-d H:i:s',
			'first_day'         => 1,
		),
		array(
			'key' => 'field_5dd54d3e981e8',
			'label' => 'Countdown Time Background Color',
			'name' => 'countdown_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5dd54d3e981e9',
			'label' => 'Countdown Time Text Color',
			'name' => 'countdown_text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
	),
	'location'              => array(
		array(
			array(
				'param'    => 'post_type',
				'operator' => '==',
				'value'    =>  $post_type,
			),
		),
	),
	'menu_order'            => 0,
	'position'              => 'normal',
	'style'                 => 'default',
	'label_placement'       => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen'        => '',
	'active'                => 1,
	'description'           => '',
) );
