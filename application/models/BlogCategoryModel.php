<?php
class BlogCategoryModel extends CI_Model{
 
  function get_categories(){
    $result = $this->db->get('blog_category');
    return $result;
  }
  function save($title){
    $data = array(
      'title' => $title
    );
    $this->db->insert('blog_category',$data);
  }

  function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('blog_category');
  }

  public function update($data) { 
    extract($data);
    $this->db->where('id', $id);
    $this->db->update('blog_category', array('title' => $title));
    return true;
  }

  public function get_category($id){
     return $this->db->get_where('blog_category',array('id'=>$id))->row();

  }
}