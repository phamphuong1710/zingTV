<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function checkLogin($user,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query->result();
	}
	public function getLoaiCT()
	{
		$this->db->select('*');
		$this->db->from('loaichuongtrinh');
		$query = $this->db->get();
		return $query->result();
	}
	public function LoaiCT($id)
	{
		$this->db->select('*');
		$this->db->from('loaichuongtrinh');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function getTheloai()
	{
		$this->db->select('*');
		$this->db->from('theloai');
		$query = $this->db->get();
		return $query->result();
	}
	public function Theloai($id)
	{
		$this->db->select('*');
		$this->db->from('theloai');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function addProgram($program)
	{
		return $this->db->insert('chuongtrinh',$program);
	}
	public function getAllProgram()
	{
		$this->db->select('*');
		$this->db->from('chuongtrinh');
		$query=$this->db->get();
		return $query->result();
	}
	public function getProgram($id)
	{
		$this->db->select('*');
		$this->db->from('chuongtrinh');
		$this->db->where('id', $id);
		$query=$this->db->get();
		return $query->result();
	}
	public function updateProgram($program,$id)
	{
		$this->db->where('id', $id);
		return $this->db->update('chuongtrinh',$program);
		 
	}
	public function deleteProgram($id)
	{
		return $this->db->delete('chuongtrinh', ['id'=>$id]);
	}
	// *************************************

	public function addVideo($video)
	{
		return $this->db->insert('video',$video);
	}
	public function getAllVideo()
	{
		$this->db->select('*');
		$this->db->from('video');
		$query=$this->db->get();
		return $query->result();
	}
	public function updateVideo($video,$id)
	{
		$this->db->where('id',$id);
		return $this->db->update('video',$video);
	}
	public function deleteVideo($id)
	{
		return $this->db->delete('video',['id'=>$id]);
	}
	public function getVideo($id)
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->where('id', $id);
		$query=$this->db->get();
		return $query->result();
	}
}
?>
