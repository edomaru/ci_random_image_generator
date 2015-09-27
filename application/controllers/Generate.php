<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// $files = glob("./tmp/*");
		// foreach ($files as $file) {
		// 	echo $file . "<br />";
		// }		
	}

	public function index()
	{		
		$this->load->view("generate");
	}

	public function generate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("image_width", "Width", "required|integer");
		$this->form_validation->set_rules("image_height", "Height", "required|integer");
		$this->form_validation->set_rules("image_text", "Text", "trim");
		
		if ($this->form_validation->run() == true) 
		{
			// sanitize post data
			foreach ($_POST as $key => $value) {
				$_POST[$key] = $this->input->post($key);
			}

			$text     = $_POST['image_text'];
			$provider = $_POST['provider'];
			$save_directory = "./tmp";

			$generated_files = array();
			for ($i = 0; $i < $_POST['image_count']; $i++)
			{
				$bgcolor   = $this->random_bg_color();
				// because the background color maybe dark when generate
				// so we have to choose white text color 
				// and we have to choose black to light background insted
				$textcolor = $this->get_contrast_yiq($bgcolor);
				$the_text  = urlencode($text . " " . ($i + 1));

				$attr = array();
				$attr[] = $_POST['image_width'] . "x" . $_POST['image_height'] . $_POST['image_type'];
				$attr[] = $bgcolor;
				$attr[] = $textcolor . "&text=" . $the_text;

				$image_url = $provider . "/" . implode("/", $attr);
				$file_name = $the_text . $_POST['image_type'];
				$new_file  = $save_directory . "/" . $file_name;				

				$status = file_put_contents($new_file, file_get_contents($image_url));
				if ($status !== false) {
					$generated_files[] = $new_file;
				}
			}			
		}
		else 
		{
			
			echo json_encode(array("success" => false, "errors" => $errors));
		}
	}

	private function random_bg_color()
	{
		return dechex(mt_rand(0, 0xFFFFFF));	
	}

	private function get_contrast_yiq($hexcolor)
	{
		$r = hexdec(substr($hexcolor,0,2));
		$g = hexdec(substr($hexcolor,2,2));
		$b = hexdec(substr($hexcolor,4,2));
		$yiq = (($r*299)+($g*587)+($b*114))/1000;
		return ($yiq >= 128) ? '000000' : 'ffffff';
	}

}