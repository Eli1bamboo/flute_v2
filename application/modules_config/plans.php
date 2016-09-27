<?

$module_name = 'plans';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/plans',
											'main_model' => 'admin/plans_model',
										 	'module_label' => 'Planes',
											'module_unit' => 'Plan',
										 );

$config['modules'][$module_name]['fields'] = array(
										'date_created' => array('label' => 'Agregado',
														'type' => 'date_time',
														'filter' => 'date_range_filter',
														'visibility' => 'details|list'
														),
										'banner_image' => array(	'label' => 'Imagen del Banner',
															'type' => 'image',
															'tag' => 'banner_image',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'banner_image_mobile' => array(	'label' => 'Imagen del Banner para mobile',
															'type' => 'image',
															'tag' => 'banner_image_mobile',
															'validation' => '',
															'visibility' => 'details|save',
														),
										'mod_name' => array(	'label' => 'Nombre del Modelo',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'slogan' => array(	'label' => 'Slogan',
															'type' => 'text',
															'class' => 'title',
															'visibility' => 'save|details|list'
														),
										'cuota_dia' => array(	'label' => 'Cuota por día',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'confort_text' => array(	'label' => 'Texto confort',
															'type' => 'textarea',
															'class' => 'title',
															'visibility' => 'save|details'
														),
										'security_text' => array(	'label' => 'Texto seguridad',
															'type' => 'textarea',
															'class' => 'title',
															'visibility' => 'save|details'
														),
										'exterior_text' => array(	'label' => 'Texto extra',
															'type' => 'textarea',
															'class' => 'title',
															'visibility' => 'save|details'
														),
										'table_title' => array(	'label' => 'Titulo de la tabla',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'table_bonif' => array(	'label' => 'Valor bonificado',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details'
														),
										'description'=> array(	'label' => 'Tabla de cuotas',
															'type' => 'textarea',
															'class' => 'summernote',
															'validation' => 'required',
															'visibility' => 'save'
														),
										'cuota_pura' => array(	'label' => 'Cuota Pura',
															'type' => 'text',
															'class' => 'title',
															'validation' => 'required',
															'visibility' => 'save|details|list'
														),
										'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list'
														),
										);

$config['modules'][$module_name]['top_menu_actions'] = array( 	'plans_list' => array('url' => '#plans/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_plans' => array('url' => '#plans/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

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
																'dialog' => 'Borrar plan?',
											 					'url' => '#'.$module_name.'/delete/'),
											);
?>
