<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Breadcrumb {

	private $CI;
	private $delimiter = " &raquo; ";
	private $name = "admin_breadcrumb";

    public function __construct()
    {
		$this->session =& get_instance()->session;

		$this->set_delimiter("<div class='separator'></div>");
    }

	public function set_delimiter($delimiter = " &raquo; ")
	{
		$this->delimiter = $delimiter;
	}
	
	public function clear()
	{
		$this->session->set_userdata( $this->name , array() );
	}

	public function get()
	{
		$breadcrumb = $this->session->userdata( $this->name );

		if(is_array( $breadcrumb ))
		{
			$total = count($breadcrumb);
			$str = '<ol class="breadcrumb">';
			$i=0;
			foreach( $breadcrumb as $label => $url )
			{
				$i++;
				$str .= "<li  ".(($total==$i)?'class="active"':'')."><a href='".$url."' class='ajax-links-top-menu'>".$label."</a></li>";
			}
			$str .= "<li class='active'>".$this->label."</li>";
			$str .= '</ol>';
		}
		else
		{
			return 0;
		}

		$str = substr($str,0,-strlen($this->delimiter));
		return $str;
	}
	
	public function push_as_array($bc_arr = array() )
	{
		if( is_array($bc_arr) && !empty($bc_arr) )
		{
			foreach($bc_arr as $label => $url)
			{
				$this->push($label, $url);
			}
			return 1;
		}
		return 0;
	}
	
	public function push($label, $url)
	{
		if($url!=null && $label!=null)
		{
			$breadcrumb = $this->session->userdata( $this->name );
			if(!is_array($breadcrumb))
				$breadcrumb = array();
			$breadcrumb[$label] = $url;
			$this->session->set_userdata( $this->name , $breadcrumb);
			return 1;
		}
		return 0;
	}
	
	public function pop()
	{

		$breadcrumb = $this->session->userdata( $this->name );
		array_pop($breadcrumb);
		$this->session->set_userdata( $this->name , $breadcrumb);
		return 1;

	}

}

?>