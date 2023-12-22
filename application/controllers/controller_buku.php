<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_buku');
    }

    function index()
    {
        $data['book'] = $this->Model_buku->ambil_data(); // Fetch data for the view
        $this->load->view('view_buku', $data);
    }

//     function ambil_data()
//     {
//         $data = $this->model_buku->ambil_data()->result_array(); // Fetch data as array
//         echo json_encode($data);
//     }

//     function tambah_data()
//     {
//         // Get data from input (e.g., $this->input->post())
//         $data = '';
//         $result = $this->model_buku->tambah_data($data); // Fix: Load the 'model_buku' model in the constructor
//         echo json_encode($result);
//     }

//     function edit_data()
//     {
//         // Get ID and updated data from input
//         $id = '';
//         $data = '...';
//         $result = $this->model_buku->edit_data($id, $data);
//         echo json_encode($result);
//     }

//     function hapus_data()
//     {
//         // Get ID from input
//         $id = '';
//         $result = $this->model_buku->hapus_data($id);
//         echo json_encode($result);
//     }
}
?>