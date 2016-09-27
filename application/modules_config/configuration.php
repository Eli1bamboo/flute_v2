<?

$module_name = 'configuration';
$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/configuration',
											'main_model' => 'admin/configuration_model',
										 	'module_label' => 'Configuracion',
											'module_unit' => 'Item',
											'restrictions' => 'own_content',
											'admin_only' => true
										 );

$config['modules'][$module_name]['fields'] = array(
										'address' => array(	'label' => 'Direcci&oacute;n',
															'type' => 'text',
															'validation' => '',
															'visibility' => 'edit|details'
															),
										'phone' => array('label' => 'Número de télefono',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'edit|details|list'
																),
										'fax' => array('label' => 'Número de fax',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'edit|details|list'
																),
										'email' => array(		'label' => 'Email',
																'type' => 'text',
																'validation' => 'required',
																'visibility' => 'edit|details|list'
																),
										'form_emails' => array(	'label' => 'Emails recibo de formulario',
																'type' => 'text',
																'validation' => '',
																'visibility' => 'edit|details|list'
																),
										'text_consumer_rights' => array('label' => 'Texto "Derechos del consumidor"',
																'type' => 'textarea',
																'class' => 'summernote',
																'validation' => '',
																'visibility' => 'edit|details'
																),
										'text_legal' => array('label' => 'Texto "Aviso Legal"',
																'type' => 'textarea',
																'class' => 'summernote',
																'validation' => '',
																'visibility' => 'edit|details'
																),
										'text_privacy_policy' => array('label' => 'Texto "Politica de privacidad"',
																'type' => 'textarea',
																'class' => 'summernote',
																'validation' => '',
																'visibility' => 'edit|details'
																),
										// 'url_facebook' => array('label' => 'Facebook URL',
										// 						'type' => 'text',
										// 						'validation' => '',
										// 						'description' => "ej: http://www.facebook.com/username",
										// 						'visibility' => 'edit|details|list'
										// 						),
										//
										// 'url_twitter' => array('label' => 'Twitter URL',
										// 						'type' => 'text',
										// 						'validation' => '',
										// 						'description' => "ej: http://www.twitter.com/username",
										// 						'visibility' => 'edit|details|list'
										// 						),
																);


$config['modules'][$module_name]['top_menu_actions'] = array( 	'configuration_list' => array('url' => '#'.$module_name.'/details/1', 'class_name' => 'configuration', 'method' => 'show_list', 'icon' => "ui-icon-clipboard", 'label' => "Ver configuración"),
												);


$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
														'url' => '#'.$module_name.'/details/'),
									'edit' => array( 	'label' => 'Editar',
														'url' => '#'.$module_name.'/edit/'),
)
?>
