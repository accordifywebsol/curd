<?php
//defined('BASEPATH') OR exit('No direct script access allowed'); 

class Curd extends CI_Controller
{
   public function index()
   {
       $data['product_details']= $this->curd_model->getAllProducts();
       $this->load->view('curd_view', $data);
    }

    public function addProduct(){

        $this->form_validation->set_rules('productname','Product Name','trim|required');
        $this->form_validation->set_rules('type','Type','trim|required');
        $this->form_validation->set_rules('version','Version','trim|required');

        if($this->form_validation->run() == false){
            $data_error=[
                'error'=> validation_errors()
            ];
            $this->session->set_flashdata($data_error);
        }
        else{

            $result = $this->curd_model->insertProduct([
                'product_name' => $this->input->post('productname'),
                'type' => $this->input->post('type'),
                'version_release' => $this->input->post('version')
            ]);

            if($result){
                $this->session->set_flashdata('inserted', 'your data has been sucessfully added!');
            }
        }
           redirect('curd');
    }
    public function editProduct($sid){
        echo $sid;
    }
}
?>