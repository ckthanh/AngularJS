<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SinhVienModel extends CI_Model
{

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}


	public function layDuLieu()
	{
		//Chọn
		$this->db->select('*');
		
		//Từ bảng nào
		$dl = $this->db->get('sinhvien');

		//Chuyển sang mảng
		$dl = $dl->result_array();

		return $dl;

	}

	public function luuDuLieu($maSV, $tenSV, $email, $phone)
	{
		$dl = array('maSV'=>$maSV, 'tenSV'=>$tenSV, 'email'=>$email, 'phone'=>$phone);

		$this->db->where('maSV', $maSV);

		$this->db->update('sinhvien', $dl);

		if($this->db->affected_rows() > 0)
		{
			echo 'Success';
		}
		else
		{
			echo 'Fail';
		}

	}

	//Xóa dữ liệu
	public function xoaDuLieu($maSV)
	{
		//Xác định vị trí id
		$this->db->where('maSV', $maSV);

		$this->db->delete('sinhvien');

		if($this->db->affected_rows() >0)
		{
			echo 'Thành công';
		}
		else
		{	
			echo 'Thất bại';
		}

	}


}

/* End of file SinhVienModel.php */
/* Location: ./application/models/SinhVienModel.php */