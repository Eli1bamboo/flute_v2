<?
class Front_init extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data['fields'] = array(	'name' => array(	'label' => 'Nombre y Apellido',
															'type' => 'contact_form_text_lg',
															'validation' => 'alpha_numeric_space|required|xss_clean',
															'visibility' => 'contact|contact-left|preguntas'
															),
										'phone' => array(	'label' => 'Teléfono / Celular',
																'type' => 'contact_form_text_lg',
																'validation' => 'numeric|xss_clean',
																'visibility' => 'contact|contact-left|preguntas'
															),
										'email' => array(	'label' => 'E-mail',
															'type' => 'contact_form_text_lg',
															'validation' => 'required|valid_email|xss_clean',
															'visibility' => 'contact|contact-left'
															),
										'branch' => array(	'label' => 'Sucursal',
															'type' => 'contact_form_select',
															'options' => array(0 => array('value' => 'Devoto', 'label' => 'Devoto'),
																			1 => array('value' => 'Lanús', 'label' => 'Lanús')
																			),
															'value' => 0,
															'visibility' => 'contact|contact-left'
															),
										'message' => array(	'label' => 'Tu consulta',
															'type' => 'contact_form_textarea',
															'validation' => 'alpha_numeric_space|required|xss_clean',
															'visibility' => 'contact|contact-right'
															)
								);

		$this->split_fields();

	}

	public function clear_session()
	{
		$this->session->sess_destroy();
	}

	public function get_latest_news(){
		$sql = "SELECT * FROM news WHERE active = 1 ORDER BY new_id DESC LIMIT 3";
		$result = $this->db->query($sql)->result_array();

		$this->load->model('admin/news_model', 'news_model');
		$this->data['news'] = array();

		foreach ($result as $row){
			$news = new News_model();
			$news->set($row);
			$news->get_files();
			$this->data['news'][] = $news;
		}
	}

	public function get_plan_nav(){
		$sql = "SELECT * FROM plans WHERE active = 1 ORDER BY plan_id DESC";
		$result = $this->db->query($sql)->result_array();

		$this->load->model('admin/plans_model', 'plans_model');
		$this->data['plan_nav'] = array();

		foreach ($result as $row){
			$plan_nav = new Plans_model();
			$plan_nav->set($row);
			$plan_nav->get_files();
			$this->data['plan_nav'][] = $plan_nav;
		}
	}

	public function get_mods_nav(){
		$sql = "SELECT * FROM modes WHERE active = 1 ORDER BY mod_id DESC";
		$result = $this->db->query($sql)->result_array();

		$this->load->model('admin/mods_model', 'mods_model');
		$this->data['mods_nav'] = array();

		foreach ($result as $row){
			$mods_nav = new Mods_model();
			$mods_nav->set($row);
			$mods_nav->get_files();
			$this->data['mods_nav'][] = $mods_nav;
		}
	}

	public function get_slider(){
		$sql = "SELECT * FROM modes WHERE active = 1 AND carousel = 1 ORDER BY mod_id DESC";
		$result = $this->db->query($sql)->result_array();

		$this->load->model('admin/mods_model', 'mods_model');
		$this->data['slider'] = array();

		foreach ($result as $row){
			$slider = new Mods_model();
			$slider->set($row);
			$slider->get_files();
			$this->data['slider'][] = $slider;
		}
	}
	/*
	Splits the fields array into page_fields[$visible_page][field_id][field_attributes]
	*/
	protected function split_fields()
	{
		if(!is_array($this->data['fields'])) return 0;

		$file_types = array('image','video','archive');
		$this->data['page_fields'] = array();
		foreach($this->data['fields'] as $field_id => $attrs)
		{
			if($attrs['visibility'])
			{
				$visibilities = explode("|", $attrs['visibility']);
				foreach($visibilities as $visibility)
				{
					$this->data['page_fields'][$visibility][$field_id] = $attrs;
				}
			}
			// insert file fields;
			if(in_array($attrs['type'],$file_types))
			{
				$this->file_fields[$field_id] = $attrs;
			}
		}
	}

	public function get_file_manager()
	{
		$this->load->model('admin/file_manager_model', 'file_manager');
		if($this->form_model->file_manager_id && $this->file_manager->get($this->form_model->file_manager_id))
		{
			return;
		}
		else
		{
			$this->file_manager->create();
			$this->form_model->set_field('file_manager_id',$this->file_manager->get_id());
			$this->form_model->save();
		}
	}

	public function validate_contact_form($page)
	{
		$output['page'] = $page;
		$output['valid'] = false;
		$this->form_validation->set_message('matches', '%s y %s deben ser iguales');
		$this->form_validation->set_message('required', 'Falta completar este campo');
		$this->form_validation->set_message('valid_email', 'Este email no es v&aacute;lido');
		$this->form_validation->set_message('alpha_numeric_space', 'Este campo solo puede contener letras, n&uacute;meros y espacios');
		$this->form_validation->set_message('numeric', 'Este campo solo puede contener n&uacute;meros');


		foreach($this->data['page_fields'][$page] as $field_id => $field)
		{
			$this->form_validation->set_rules($field_id, $field['label'], $field['validation']);
		}

		$this->data['post'] = $this->input->post();
		if(!$this->form_validation->run())
		{
			$output['valid'] = 0;

			foreach($this->data['page_fields'][$page] as $field_id => $field)
			{
				$output['errors'][$field_id] = form_error($field_id);
			}
		}
		else
		{
			$output['valid'] = true;

			switch($page)
			{
				case 'contact':
					$this->load->model("admin/contact_model","form_model");
					break;
			}

			if(!isset($output['valid']) || $output['valid'])
			{

				$this->form_model->set($this->data['post']);

				if($this->form_model->save())
				{
					$output['valid'] = 1;
					switch($page)
					{
						case 'contact':
							$this->send_register_email();
							break;
					}
				}
				else
				{
					$output['valid'] = 0;
					$output['errors'] = $this->form_model->get_error_message();
				}
			}
		}
		echo json_encode($output);
	}

	protected function send_register_email()
	{
		$this->load->library('email');

		$config['protocol'] = 'mail';
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('admin@fengtai.com.ar', 'Chery Fengtai');

		$this->email->to($this->configuration_model->form_emails);
		$this->email->reply_to($this->form_model->email);

		$this->email->subject('Nueva consulta en tu Website');

		$body= "Nombre: ".$this->form_model->name."<br>";
		$body.= "Teléfono: ".$this->form_model->phone."<br>";
		$body.= "Email: ".$this->form_model->email."<br>";
		$body.= "Mensaje: ".$this->form_model->message."<br>";
		$body.= "Sucursal: ".$this->form_model->branch."<br>";
		$body.= "Sección: ".$this->form_model->section."<br>";
		$body.= "--";

		$this->email->message($body);

		$this->email->send();

	}

	protected function check_captcha()
	{
		$captcha_input = $this->input->post('captcha_input', TRUE);
    	$captcha_text = $this->simple_captcha->get_captcha_text('signup');
		return $captcha_input && ($captcha_input == $captcha_text);
	}
}

?>
