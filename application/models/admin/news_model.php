<?
require_once(dirname(__FILE__)."/../simple_data_model.php");

class News_model extends Simple_data_model
{

    public $db_index = 'new_id';
    public $db_table = 'news';

	protected $db_fields = array(
								'title',
                                'sub_heading',
								'description',
								'file_manager_id',
								'active',
								'date_created',
								);

    public function get_all(){
		$sql = "SELECT * FROM news WHERE active = 1 ORDER BY new_id DESC";
		$result = $this->db->query($sql)->result_array();
		$this->load->model('admin/news_model', 'news_model');
		$this->news = array();
		foreach ($result as $row){
			$news = new News_model();
			$news->set($row);
			$news->get_files();
			$this->news[] = $news;
		}
	}
}
?>
