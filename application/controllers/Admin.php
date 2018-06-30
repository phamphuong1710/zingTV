<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }else{
        	$this->load->view('admin/myAdmin');
        }

	}
	public function myAdmin()
	{
		$this->load->view('admin/myAdmin.php');
	}
	
	// public function login()
	// 	{  
			
	// 		$this->load->model('Admin_model');
	// 		if ($_SERVER["REQUEST_METHOD"]==="POST"){
	// 			$name=$_POST['name'];
	// 			$password=$_POST['password'];
	// 			$user=new Admin_model();
	// 			$checkLogin=$user->checkLogin($name,$password);
	// 			if (!$checkLogin) {
	// 				$error="Đăng nhập lỗi, tài khoản học mật khẩu không đúng";
	// 				redirect('Admin/index');
	// 			}
	// 			else{
	// 				$this->session;
	// 				$_SESSION['username'] = $username;
	// 				$_SESSION['current_user'] = $checkLogin;
	// 				redirect('Admin/myAdmin');  
			
	// 			}
	// 		}
	// 	}
	public function form_addProgram()
	{	
		if(! $this->session->userdata('validated')){
            redirect('login');
        }else{
			$this->load->model('Admin_model');
			$program=$this->Admin_model->getLoaiCT();
			$type=$this->Admin_model->getTheloai();
			$data['type']=$program;
			$data['genre']=$type;
			$this->load->view('admin/add_program.php',$data);
		}
	}
	public function addProgram()
	{
		$this->load->model('Admin_model');
		 $config['upload_path']          = './image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100000000;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('anh'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);die();
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                   // var_dump($data);
                    $anh=$data['upload_data']['file_name'];
            }
		$program=[
			'tenchuongtrinh'=>$_POST['tenchuongtrinh'],
			'quocgia'=>$_POST['quocgia'],
			'daodien'=>$_POST['daodien'],
			'dienvien'=>$_POST['dienvien'],
			'thoiluong'=>$_POST['thoiluong'],
			'mota'=>$_POST['mota'],
			'idloaichuongtrinh'=>$_POST['loaichuongtrinh'],
			'idtheloai'=>implode('-',$_POST['theloai']),
			'namphathanh'=>$_POST['namphathanh'],
			'anh'=>$anh,
			];
		$this->Admin_model->addProgram($program);
		redirect('Admin/listProgram');		
	}
	public function listProgram()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }else{
			$this->load->model('Admin_model');
			$all=$this->Admin_model->getAllProgram();
			$type=$this->Admin_model->getLoaiCT();
			$genre=$this->Admin_model->getTheloai();
			foreach ($all as $key => $value) {
				$loaict=$this->Admin_model->LoaiCT($value->idloaichuongtrinh);
				$all[$key]->idloaichuongtrinh=$loaict[0]->loaichuongtrinh;
				$tl=explode('-', $value->idtheloai);
				for ($i=0; $i <count($tl) ; $i++) { 
					$theloai[$key][]=$this->Admin_model->Theloai($tl[$i]);
					$TL[$key][$i]=$theloai[$key][$i][0]->tentheloai;
					$all[$key]->idtheloai=$theloai[$key][$i][0]->tentheloai;	
				}
				$all[$key]->idtheloai=implode(',', $TL[$key]);
			}

			$data['program']=$all;

			$this->load->view('admin/listProgram.php',$data);
		}
	}
	public function editProgram($id)
	{
		// echo "<pre>";
		$this->load->model('Admin_model');
		$data['type']=$this->Admin_model->getLoaiCT();
		$data['gener']=$this->Admin_model->getTheloai();
		$data['program']=$this->Admin_model->getProgram($id);
		foreach ($data['program'] as $key => $value) {
			$data['type1']=$this->Admin_model->LoaiCT($value->idloaichuongtrinh);
		}
		$this->load->view('admin/edit_program',$data);
	}
	public function updateProgram($id)
	{
		$this->load->model('Admin_model');
		 $config['upload_path']          = './image/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100000000;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('anh'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);die();
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                   // var_dump($data);
                    $anh=$data['upload_data']['file_name'];
            }
		$program=[
			'tenchuongtrinh'=>$_POST['tenchuongtrinh'],
			'quocgia'=>$_POST['quocgia'],
			'daodien'=>$_POST['daodien'],
			'dienvien'=>$_POST['dienvien'],
			'thoiluong'=>$_POST['thoiluong'],
			'mota'=>$_POST['mota'],
			'idloaichuongtrinh'=>$_POST['loaichuongtrinh'],
			'idtheloai'=>implode('-',$_POST['theloai']),
			'namphathanh'=>$_POST['namphathanh'],
			'anh'=>$anh,
			];
		$this->Admin_model->updateProgram($program,$id);
		redirect('Admin/listProgram');
	}
	public function deleteProgram($id)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deleteProgram($id);
		redirect('Admin/listProgram');
	}
	// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	public function formAddVideo()
	{
		$this->load->model('Admin_model');
		
		$data['program']=$this->Admin_model->getAllProgram();
		$this->load->view('admin/addVideo.php',$data);
	}
	public function addVideo()
	{
		$this->load->model('Admin_model');
		$config['upload_path']          = './image/video';
        $config['allowed_types']        = 'gif|jpg|png|mp4';
        $config['max_size']             = 200000000;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('anh'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);die();
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                   // var_dump($data);
                    $anh=$data['upload_data']['file_name'];
            }
           

            if ( ! $this->upload->do_upload('video'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);die();
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                   // var_dump($data);
                    $mp4=$data['upload_data']['file_name'];
                    
            }
		$video=[
			'id_tenchuongtrinh'=>$_POST['tenchuongtrinh'],
			'tap'=>$_POST['tap'],
			'anh'=>$anh,
			'video'=>$mp4,
			];
		$this->Admin_model->addVideo($video);
		redirect('Admin/listVideo');
	}
	public function listVideo()
	{
		$this->load->model('Admin_model');
		$allVideo=$this->Admin_model->getAllVideo();
		$allProgram=$this->Admin_model->getAllProgram();
		foreach ($allVideo as $key => $value) {
			foreach ($allProgram as $k => $val) {
				if ($value->id_tenchuongtrinh==$val->id) {
					$allVideo[$key]->id_tenchuongtrinh=$val->tenchuongtrinh;
				}
			}
		}
		$data['video']=$allVideo;
		// echo "<pre>";
		// var_dump($allVideo);die();
		$this->load->view('admin/listVideo',$data);
	}
	public function editVideo($id)
	{
		$this->load->model('Admin_model');
		$data['video']=$this->Admin_model->getVideo($id);
		// var_dump($data['video']);
		foreach ($data['video'] as $key => $value) {
			
			 $data['program1']=$this->Admin_model->getProgram($value->id_tenchuongtrinh);
		}
		$data['program']=$this->Admin_model->getAllProgram();
		$this->load->view('admin/editVideo.php',$data);
	}
	public function updateVideo($id)
	{
		$this->load->model('Admin_model');
		$config['upload_path']          = './image/video';
        $config['allowed_types']        = 'gif|jpg|png|mp4';
        $config['max_size']             = 200000000;

        $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('anh'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);die();
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                   // var_dump($data);
                    $anh=$data['upload_data']['file_name'];
            }
           

            if ( ! $this->upload->do_upload('video'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);die();
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                   // var_dump($data);
                    $mp4=$data['upload_data']['file_name'];
                    
            }
		$video=[
			'id_tenchuongtrinh'=>$_POST['tenchuongtrinh'],
			'tap'=>$_POST['tap'],
			'anh'=>$anh,
			'video'=>$mp4,
			];
		$this->Admin_model->updateVideo($video,$id);
		redirect('Admin/listVideo');
	}
	public function deleteVideo($id)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deleteVideo($id);
		redirect('Admin/listVideo');
	}
	 public function do_logout(){
        $this->session->sess_destroy();
        redirect('Login/index');
    }
}
