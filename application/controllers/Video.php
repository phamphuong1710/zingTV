<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index($id=1)
	{
		$this->load->model('Video_model');
		$all=$this->Video_model->getNewVideo($id);
		
		$program=$this->Video_model->getProgram();
		foreach ($all as $key => $value) {
			foreach ($program as $k => $val) {
				if ($value->id_tenchuongtrinh==$val->id) {
					$value->id_tenchuongtrinh=$val->tenchuongtrinh;
				}
			
			}
			
		}
		$data['video']=$all;
		$slide=$this->Video_model->getSlide($id);
		$data['slide']=$slide;
		// echo "<pre>";
		// var_dump($all);
		// die();
		$this->load->view('home',$data);
	}
	
}
