<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5bce6aaf6c93c',
	'title' => 'Cartão',
	'fields' => array(
		array(
			'key' => 'field_5bce6ab7e95fb',
			'label' => 'Nome do Projeto',
			'name' => 'nome_projeto',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'nome_perfil',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Nome do Projeto',
			'prepend' => '',
			'append' => '',
			'maxlength' => 15,
		),
		array(
			'key' => 'field_5bce6b36e95fc',
			'label' => 'Imagem do Perfil',
			'name' => 'imagem_do_perfil',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => 100,
			'min_height' => 100,
			'min_size' => '',
			'max_width' => 300,
			'max_height' => 300,
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5bce70950a2c4',
			'label' => 'Campo de Atuação',
			'name' => 'campo_atuacao',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Pesquisa' => 'Pesquisa',
				'Extensão' => 'Extensão',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'label',
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;?>