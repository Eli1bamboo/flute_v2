<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class Configuration_model extends Simple_data_model
{

    public $db_index = 'configuration_id';
    public $db_table = 'configurations';

	protected $db_fields = array(
                                'phone',
                                'fax',
								'address',
                                'text_consumer_rights',
                                'text_legal',
                                'text_privacy_policy',
                                'url_facebook',
								'url_twitter',
								'url_googleplus',
								'url_youtube',
								'email',
								'form_emails',
                                'file_manager_id',
								);
}
?>
