<?

$module_name = 'contact';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/contact',
											'main_model' => 'admin/contact_model',
										 	'module_label' => 'Contactos',
											'module_unit' => 'Contacto',
											'restrictions' => 'own_content',
											'admin_only' => true
										 );

$config['modules'][$module_name]['fields'] = array(

								'date_created' => array('label' => 'Fecha de ingreso',
														'type' => 'date_time',
														'filter' => 'date_range_filter',
														'visibility' => 'details|list'
														),

								'name' => array(	'label' => 'Nombre',
														'type' => 'text',
														'validation' => 'required',
														'visibility' => 'save|details|list'
														),
								'phone' => array(	'label' => 'Teléfono',
														'type' => 'text',
														'validation' => 'required',
														'visibility' => 'save|details|list'
														),
								'email' => array(		'label' => 'Email',
														'type' => 'text',
														'validation' => 'required',
														'visibility' => 'save|details|list'
														),
								'branch' => array(		'label' => 'Sucursal',
														'type' => 'text',
														'visibility' => 'save|details|list'
														),
								'section' => array(		'label' => 'Sección',
														'type' => 'text',
														'visibility' => 'save|details|list'
														),
								'message' => array(	'label' => 'Mensaje',
														'type' => 'textarea',
														'validation' => 'required',
														'visibility' => 'save|details'
														),
														);


$config['modules'][$module_name]['top_menu_actions'] = array( 	'contact_list' => array('url' => '#contact/show_list', 'class_name' => 'contact', 'method' => 'show_list', 'icon' => "ui-icon-clipboard", 'label' => "Listado de Contactos"),
													);

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
																					'url' => '#'.$module_name.'/details/'),
														);

$config['modules'][$module_name]['datatable_actions'] = array( 	'details' => array( 'label' => 'Detalle',
														'url' => '#'.$module_name.'/details/'),
																'delete' => array( 'label' => 'Borrar',
														'dialog' => 'Borrar el mensaje?',
														'url' => '#'.$module_name.'/delete/'),
															);


?>
