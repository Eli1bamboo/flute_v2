<?

$config['general']['admin'] = array('home_controller' => 'admin/x/',
									'user_session' => 'user',
									'start_page' => 'news/show_list',
									'login_page' => 'admin/user/login',
									'login_logo' => 'logo.png',
									'admin_logo' => 'logo.png'
									);

$config['general']['admin']['sections'] = array(
									'plans' =>array('url' => '#plans/show_list', 'name' => 'Planes de ahorro', 'icon' => ' fa-money'),
									'mods' =>array('url' => '#mods/show_list', 'name' => 'Modelos', 'icon' => ' fa-car'),
									'news' =>array('url' => '#news/show_list', 'name' => 'Noticias', 'icon' => ' fa-newspaper-o'),
									'contact' =>array('url' => '#contact/show_list', 'name' => 'Contactos', 'admin_only' => true, 'icon' => 'fa-users'),
									'user' =>array('url' => '#contact/show_list', 'name' => 'Usuarios', 'admin_only' => true, 'icon' => 'fa-users'),
									'configuration' =>array('url' => '#configuration/show_list', 'name' => 'configuration', 'admin_only' => true, 'icon' => 'fa-gears'),
									);


$config['general']['admin']['table_icons'] = array(	'details' => 'fa fa-eye',
													'save' => 'fa fa-pencil',
													'edit' => 'fa fa-pencil',
													'files' => 'fa fa-file-text-o',
													'media_gallery' => 'fa fa-picture-o',
													'delete' => 'fa fa-trash-o');

foreach(glob( dirname(__FILE__)."/../modules_config/*.php") as $filename)
{
    include $filename;
}

?>
