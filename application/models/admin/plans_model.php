<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Plans_model extends Simple_data_model
{

    public $db_index = 'plan_id';
    public $db_table = 'plans';

	protected $db_fields = array(
								'mod_name',
                                'slogan',
                                'cuota_dia',
								'confort_text',
                                'security_text',
                                'exterior_text',
                                'table_title',
                                'table_bonif',
                                'description',
                                'cuota_pura',
								'file_manager_id',
								'active',
								'date_created',
								);

}
?>
