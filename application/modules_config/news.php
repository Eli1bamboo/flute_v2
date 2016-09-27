<?

$module_name = 'news';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/news',
											'main_model' => 'admin/news_model',
										 	'module_label' => 'Noticias',
											'module_unit' => 'Noticia',
										 );

$config['modules'][$module_name]['fields'] = array(
										'date_created' => array('label' => 'Agregado',
														'type' => 'date_time',
														'filter' => 'date_range_filter',
														'visibility' => 'details|list'
														),
										'title' => array(	'label' => 'Titulo de la noticia.',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'sub_heading' => array(	'label' => 'Copete de la noticia.',
															'type' => 'textarea',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'description'=> array(	'label' => 'Texto de la noticia.',
															'type' => 'textarea',
															'class' => 'summernote',
															'validation' => '',
															'visibility' => 'save|details'
														),
										'main_image' => array(	'label' => 'Imagen Principal',
															'type' => 'image',
															'tag' => 'main_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'list_image' => array(	'label' => 'Imagen del Listado',
															'type' => 'image',
															'tag' => 'list_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'news_list' => array('url' => '#news/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_news' => array('url' => '#news/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/',
																),

																);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/'),
											'delete' => array( 	'label' => 'Borrar',
																'dialog' => 'Borrar noticia?',
											 					'url' => '#'.$module_name.'/delete/'),
											);
?>
