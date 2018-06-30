<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {

	public function getProgram($value='')
	{
		$this->db->select('*');
		$this->db->from('chuongtrinh');
		$query=$this->db->get();
		return $query->result();
	}
	public function getNewVideo($id)
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->where('new',$id);
		$query=$this->db->get();
		return $query->result();
	}
	public function getSlide($id)
	{
		$this->db->select('*');
		$this->db->from('chuongtrinh');
		$this->db->where('slide',$id);
		$query=$this->db->get();
		return $query->result();
	}
	public function FunctionName($value='')
	{
		
	}
	
}
