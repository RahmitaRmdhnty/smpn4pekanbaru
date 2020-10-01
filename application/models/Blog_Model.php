<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_Model extends CI_Model
{
    public function getBlogList()
    {
        $this->db->select('*');
        $this->db->from('u1101401_wp684.wp_posts');
        $this->db->where('post_status', 'publish');
        return $this->db->get()->result_array();
    }
}
