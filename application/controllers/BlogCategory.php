<?php 

class BlogCategory  extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
      
       // $this->load->library('form_validation'); 
        $this->load->model('BlogCategoryModel'); 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
        if(!$this->isUserLoggedIn){ 
         
            redirect('users/login'); 
        } 
    
    } 

   public function index(){
   
        $data['categories'] = $this->BlogCategoryModel->get_categories();
        $this->load->view('includes/header', $data); 
        $this->load->view('blogcategory/index',$data);
        $this->load->view('includes/footer'); 
       
    }
    public function create(){
        $this->load->view('includes/header'); 
        $this->load->view('blogcategory/create');
        $this->load->view('includes/footer'); 
    }

    public function save(){
        $title = $this->input->post('title');
    
        $this->BlogCategoryModel->save($title);
        redirect('blogcategory');
    }

    public function delete(){
        $id = $this->uri->segment(3);
        $this->BlogCategoryModel->delete($id);
        redirect('blogcategory');
      }
    public function update(){
        if($this->input->post('categorySubmit')){ 
            $data = array(
                'id' => $this->input->post('id'),
                'title' => $this->input->post('title')
            );
            $this->BlogCategoryModel->update($data);
            redirect('blogcategory');
        }

        $id = $this->uri->segment(3);
      

        $data['category'] = $this->BlogCategoryModel->get_category($id);
       
        $this->load->view('includes/header'); 
        $this->load->view('blogcategory/update',$data);
        $this->load->view('includes/footer'); 

    }

}