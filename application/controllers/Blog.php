<?php 

class Blog  extends CI_Controller { 
     

    function __construct() { 
        parent::__construct(); 
         
      
       // $this->load->library('form_validation'); 
        $this->load->model('BlogModel'); 
        $this->load->model('BlogCategoryModel'); 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
        if(!$this->isUserLoggedIn){ 
         
            redirect('users/login'); 
        } 
    
    } 
    public function index(){
   
        $data['blogs'] = $this->BlogModel->get_blogs();
        
        $this->load->view('includes/header', $data); 
        $this->load->view('blog/index',$data);
        $this->load->view('includes/footer'); 
       
    }

    public function create(){
        $data['categories'] = $this->BlogCategoryModel->get_categories();
        $this->load->view('includes/header'); 
        $this->load->view('blog/create',$data);
        $this->load->view('includes/footer'); 
    }

    public function save(){
        $title = $this->input->post('title');
        $data = array(
        
            'title' => $this->input->post('title'),
            'text' =>$this->input->post('text'),
            'category_id' =>$this->input->post('category_id'),
            'user_id'=> $this->session->userdata('userId')
        );
    
        $this->BlogModel->save($data);
        redirect('blog');
    }

    public function delete(){
        $id = $this->uri->segment(3);
        $this->BlogModel->delete($id);
        redirect('blog');
      }

    public function update(){
        if($this->input->post('blogSubmit')){ 
            $data = array(
                'id' => $this->input->post('id'),
                'title' => $this->input->post('title')
            );
            $this->BlogModel->update($data);
            redirect('blog');
        }

        $id = $this->uri->segment(3);
      

        $data['blog'] = $this->BlogModel->get_blog($id);
        $data['categories'] = $this->BlogCategoryModel->get_categories();
        $this->load->view('includes/header'); 
        $this->load->view('blog/update',$data);
        $this->load->view('includes/footer'); 

    }
}