<?php
class BlogModel extends CI_Model{
 
  function get_blogs(){


    $result = $this->db->select('t1.*, t2.title as category_title,t3.first_name as author_firstname, t3.last_name as author_lastname')
     ->from('blog as t1')
     ->join('blog_category as t2', 't1.category_id = t2.id', 'INNER')
     ->join('users as t3', 't1.user_id = t3.id', 'INNER')
     ->get();

   // $result = $this->db->get('blog');
    return $result;
  }
  function save($data){

 
    $this->db->insert('blog',$data);
  }

  function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('blog');
  }

  public function update($data) { 
    extract($data);
    $this->db->where('id', $id);
    $this->db->update('blog', array('title' => $title));
    return true;
  }

  public function get_blog($id){

    
     return $this->db->get_where('blog',array('id'=>$id))->row();

  }
}