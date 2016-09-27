<?
require_once(dirname(__FILE__)."/front_init.php");
class Home extends Front_init
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("admin/configuration_model","configuration_model");
  		$this->configuration_model->get(1);
	}

	public function index()
	{
		$this->get_latest_news();
		$this->get_slider();
		$this->get_plan_nav();
		$this->get_mods_nav();

		$this->data['section'] = "home";
		$this->data['section_form'] = "Home";

		$this->load->view("front/index.php", $this->data);
	}

	public function about()
	{
		$this->get_mods_nav();
		$this->get_plan_nav();

		$this->data['section'] = "about";
		$this->data['section_form'] = "La empresa";

		$this->load->view("front/about-us.php", $this->data);
	}

	public function faq()
	{
		$this->get_mods_nav();
		$this->get_plan_nav();

		$this->data['section'] = "faq";
		$this->data['section_form'] = "Preguntas frecuentes";

		$this->load->view("front/faq.php", $this->data);
	}

	public function service()
	{
		$this->get_mods_nav();
		$this->get_plan_nav();

		$this->data['section'] = "service";
		$this->data['section_form'] = "Service";

		$this->load->view("front/service.php", $this->data);
	}


	public function news()
	{
		$this->get_mods_nav();
		$this->get_plan_nav();

		$this->load->model('admin/news_model', 'news_model');
		$this->news_model->get_all();

		$this->data['section'] = "news";
		$this->data['section_form'] = "Novedades";

		$this->load->view("front/news.php", $this->data);
	}

	public function new_single($new_id)
	{
		$this->get_mods_nav();
		$this->get_plan_nav();

		$this->load->model('admin/news_model', 'news_model');
		$this->news_model->get($new_id);

		$this->data['section'] = "news";
		$this->data['section_form'] = "Novedades";

		$this->load->view("front/new-single.php", $this->data);
	}

	public function mods($mod_id)
	{
		$this->get_mods_nav();
		$this->get_plan_nav();

		$this->load->model('admin/mods_model', 'mods_model');
		$this->mods_model->get($mod_id);

		$this->data['section'] = "mods";
		$this->data['section_form'] = "Modelos";

		$this->load->view("front/mods.php", $this->data);
	}

	public function plans($plan_id)
	{
		$this->get_mods_nav();
		$this->get_plan_nav();

		$this->load->model('admin/plans_model', 'plans_model');
		$this->plans_model->get($plan_id);

		$this->data['section'] = "plans";
		$this->data['section_form'] = "Plan de ahorro";

		$this->load->view("front/plan-single.php", $this->data);
	}
}
