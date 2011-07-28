<?php

class Article_model extends CI_Model
{

    var $title = '';
    var $contents = '';
    var $category = '';


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();


    }
     //simpan artikel
    function save()
    {
        $title = $this->input->post('title');
        $contents = $this->input->post('contents');
        $category = $this->input->post('category');

        $data = array(
            'title' => $title,
            'contents' => $contents,
            'category' => $category
        );
        $this->db->insert('articles', $data);
    }

    //mendapatkan artikel
    function getAll()
    {
        $this->db->select('id,title,category,contents');
        $this->db->from('articles');
        $this->db->limit(10);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }

    //mendapatkan id artikel
    function getArticle($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('articles');
        return $query->row_array();
    }

    //update artikel
    function update()
    {

        $this->title   = $_POST['title'];
        $this->category=$_POST['category'];
        $this->contents = $_POST['contents'];
        $this->db->update('articles', $this, array('id' => $_POST['id']));
    }
}

?>