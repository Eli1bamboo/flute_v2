<?

$module_name = 'user';

$config['modules'][$module_name] = array(
										 	'controller_name' => 'admin/user',
											'main_model' => 'user_model',
										 	'module_label' => 'Usuarios',
											'module_unit' => 'Usuario',
											'views_folder' => 'admin/auth',
											'admin_only' => true,
										 );


$config['modules'][$module_name]['fields'] = array(
									'username' => array('label' => 'Usuario',
														'type' => 'text',
														'validation' => 'required',
														'visibility' => 'save|details|list'
														),
									'email' => array(	'label' => 'Email',
														'type' => 'text',
														'validation' => 'required|valid_email',
														'visibility' => 'save|details|list'
														),
									'password' => array('label' => 'Contrase&ntilde;a',
														'type' => 'password',
														'validation' => 'required|matches[passconf]',
														'visibility' => 'create|edit_password'
														),
									'passconf' => array('label' => 'Repetir contrase&ntilde;a',
														'type' => 'password',
														'validation' => 'required',
														'visibility' => 'create|edit_password'
														),

									'media_gallery' => array('label' => 'Archivos',
														'type' => 'file',
														'upload_label' => 'Seleccionar archivo',
														'groups' => array('Factura','Recibo','Comprobante de retención'),
														'groups_label' => 'Tipo',
														'validation' => '',
														'visibility' => 'media_gallery'
														),
									'fullname' => array(	'label' => 'Nombre completo',
															'type' => 'text',
															'visibility' => 'save|details|list'
															),

									'group_id' => array( 'label' => 'Rol',
															'type' => 'select',
															'options' => array(0 => array('value' => 1, 'label' => 'Administrador'),
																			1 => array('value' => 2, 'label' => 'Editor')
																			),
															'value' => 2,
															'visibility' => 'save|details|list'
														),
									'active'	=> array(	'label' => 'Activo',
															'type' => 'checkbox',
															'value' => 1,
															'visibility' => 'save|details|list',
												));



$config['modules'][$module_name]['top_menu_actions'] = array( 	'user_list' => array('url' => '#user/show_list','method' => 'show_list', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-clipboard", 'label' => "Listado de ".$config['modules'][$module_name]['module_label']),
																'add_user' => array('url' => '#user/create','method' => 'create', 'class_name' => $config['modules'][$module_name], 'icon' => "ui-icon-plusthick", 'label' => "Agregar ".$config['modules'][$module_name]['module_unit']));

$config['modules'][$module_name]['main_model_tabs'] = array( 	'details' => array( 'label' => 'Detalle',
														'url' => '#'.$module_name.'/details/'),
									'edit' => array( 	'label' => 'Editar',
														'admin_only' => true,
														'url' => '#'.$module_name.'/edit/'),
									'edit_password' => array( 	'label' => 'Modificar Password',
														'url' => '#'.$module_name.'/edit_password/'));

$config['modules'][$module_name]['datatable_actions'] = array(
									'details' => array( 'label' => 'Detalle',
														'url' => '#'.$module_name.'/details/'),
									'edit' => array( 	'label' => 'Editar',
														'admin_only' => true,
														'url' => '#'.$module_name.'/edit/'),

									'delete' => array( 	'label' => 'Borrar',
														'dialog' => 'borrar el Usuario?',
														'url' => '#user/delete/'),

														);


?>
