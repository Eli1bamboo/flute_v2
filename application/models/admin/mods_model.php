<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Mods_model extends Simple_data_model
{

    public $db_index = 'mod_id';
    public $db_table = 'modes';

	protected $db_fields = array(
								'mod_name',
                                'slogan',
								'design_left',
                                'design_right',
                                'security_left',
                                'security_right',
                                'description',
								'file_manager_id',
								'active',
                                'carousel',
								'date_created'
								);

}
?>
