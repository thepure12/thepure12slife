<?php
class Pages extends CI_Controller
{
	public function view($page = 'home')
	{
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);

		if (file_exists('application/views/pages/'.$page.'.php'))
		{
			$this->load->view('pages/'.$page, $data);
		}else
		if (file_exists('application/views/pages/bloons/'.$page.'.php'))
		{
			$this->load->view('pages/bloons/'.$page, $data);
		}else
		{
			show_404();
		}

		$this->load->view('templates/footer', $data);
	}
}
?>