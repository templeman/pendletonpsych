<?php

class Article_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_latest_article($category) {
    // get latest article id
    $this->db->select_max('id')->where('category', $category);
    $query = $this->db->get('articles');
    $row = $query->row();
    $data['id'] = $row->id;

    // retrieve latest article from id
    $query = $this->db->get_where('articles', array('id' => $data['id']));
    return $query;
  }

  function get_titles($category) {
    $this->db->select('slug, title')->where('category', $category)->order_by('id', 'desc');
    $query = $this->db->get('articles');
    return $query;
  }
}


