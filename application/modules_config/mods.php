<?

$module_name = 'mods';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/mods',
											'main_model' => 'admin/mods_model',
										 	'module_label' => 'Modelos',
											'module_unit' => 'Modelo',
										 );

$config['modules'][$module_name]['fields'] = array(
										'date_created' => array('label' => 'Agregado',
														'type' => 'date_time',
														'filter' => 'date_range_filter',
														'visibility' => 'details|list'
														),
										'image_gallery' => array(	'label' => 'Galería de Imágenes',
													'type' => 'image',
													'validation' => '',
													'descriptions' => true,
													'visibility' => 'media_gallery',
													),
										'banner_image' => array(	'label' => 'Imagen del Banner',
															'type' => 'image',
															'tag' => 'banner_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'carousel'	=> array(	'label' => 'Mostrar en el slider de Home?',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										'mod_name' => array(	'label' => 'Nombre del Modelo',
															'type' => 'textarea',
															'class' => 'summernote',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'slogan' => array(	'label' => 'Slogan del Modelo',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'design_left' => array(	'label' => 'Texto de Diseño izq.',
															'type' => 'textarea',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'design_right' => array(	'label' => 'Texto de Diseño der.',
															'type' => 'textarea',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'design_image_1' => array(	'label' => 'Imagen de diseño 1',
															'type' => 'image',
															'tag' => 'design_image_1',
															'visibility' => 'details|save',
														),
										'design_image_2' => array(	'label' => 'Imagen de diseño 2',
															'type' => 'image',
															'tag' => 'design_image_2',
															'visibility' => 'details|save',
														),
										'design_image_3' => array(	'label' => 'Imagen de diseño 3',
															'type' => 'image',
															'tag' => 'design_image_3',
															'visibility' => 'details|save',
														),
										'security_left' => array(	'label' => 'Texto de Seguridad izq.',
															'type' => 'textarea',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'security_right' => array(	'label' => 'Texto de Seguridad der.',
															'type' => 'textarea',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'security_image_1' => array(	'label' => 'Imagen de seguridad 1',
															'type' => 'image',
															'tag' => 'security_image_1',
															'visibility' => 'details|save',
														),
										'security_image_2' => array(	'label' => 'Imagen de seguridad 2',
															'type' => 'image',
															'tag' => 'security_image_2',
															'visibility' => 'details|save',
														),
										'security_image_3' => array(	'label' => 'Imagen de seguridad 3',
															'type' => 'image',
															'tag' => 'security_image_3',
															'visibility' => 'details|save',
														),
										'description'=> array(	'label' => 'Ficha Técnica',
															'type' => 'textarea',
															'class' => 'summernote',
															'validation' => 'required',
															'visibility' => 'save'
														),
										'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'mods_list' => array('url' => '#mods/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_mods' => array('url' => '#mods/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/',
																),
																'media_gallery' => array( 'label' => 'Galer&iacute;a',
																'url' => '#'.$module_name.'/media_gallery/image/'),
																);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
								  			  	 				'url' => '#'.$module_name.'/details/'),
											'edit' => array( 	'label' => 'Editar',
											 					'url' => '#'.$module_name.'/edit/'),
											'delete' => array( 	'label' => 'Borrar',
																'dialog' => 'Borrar modelo?',
											 					'url' => '#'.$module_name.'/delete/'),
											'media_gallery' => array( 'label' => 'Galer&iacute;a',
															  	'url' => '#'.$module_name.'/media_gallery/image/'),
											);
?>
