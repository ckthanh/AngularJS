<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SinhVienController extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function LayDuLieu()
	{
		//load model
		$this->load->model('SinhVienModel');

		//Lấy method nào của model
		$dl = $this->SinhVienModel->layDuLieu();

		//Chuyển json
		$dl = json_encode($dl);

		echo $dl;
	}



	public function CapNhat()
	{
		$maSV = $this->input->post('maSV');
		$tenSV = $this->input->post('tenSV');
		$email = $this->input->post('email');
		$phone= $this->input->post('phone');


		$this->load->model('SinhVienModel');

		echo $this->SinhVienModel->luuDuLieu($maSV, $tenSV, $email, $phone);
	}


	public function Xoa($maSV)
	{
		$this->load->model('SinhVienModel');

		//Gọi đến hàm
		$this->SinhVienModel->xoaDuLieu($maSV);

		$this->session->set_flashdata('flash_mess', 'Xóa thành công');

		redirect(base_url()."index.php");
	}


	//Thêm dữ liệu
	public function Them()
	{
		//Lấy dữ liệu nhập từ người dùng về
		$tensv = $this->input->post('tensv');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');

		//Load model
		$this->load->model('SinhVienModel');

		//Đưa vào mảng dữ liệu
		$dulieu = array('tensv'=>$tensv, 'email'=>$email, 'phone'=>$phone);

		if($this->SinhVienModel->insert($dulieu))
		{
			echo 'Thêm thành công';
		}



	}

}

/* End of file SinhVienController.php */
/* Location: ./application/controllers/SinhVienController.php */