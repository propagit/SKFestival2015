<?php
class News_sticker_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
	function add($data) {
		$this->db->insert('jq_newsticker',$data);
		return $this->db->insert_id();
	}
	function update($id,$data) {
		$this->db->where('id',$id);
		$this->db->update('jq_newsticker',$data);
	}
	function id($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('jq_newsticker');
		return $query->first_row('array');
	}
	function get(){
		$this->db->order_by('news_order','desc');
		$query = $this->db->get('jq_newsticker');
		return $query->result_array();
	}
	function get_published(){
		$this->db->where('published',1)->order_by('news_order','desc');
		$query = $this->db->get('jq_newsticker');
		return $query->result_array();
	}
	function search($row) {
		$sql = "SELECT * FROM `jq_newsticker` ORDER BY `news_order` DESC LIMIT $row,10";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function delete($id) {
		$this->db->where('id',$id);
		return $this->db->delete('jq_newsticker');
	}
	
	function latest($limit) {
		$this->db->where('published',1);
		$this->db->order_by('news_order','desc');
		if ($limit >= 1) {
			$this->db->limit($limit);
		}
		$query = $this->db->get('jq_newsticker');
		return $query->result_array();
	}
	function get_youtube() {
		
		$query = $this->db->get('hp_youtube');
		return $query->first_row('array');
	}
	function update_youtube($id,$data) {
		$this->db->where('id',$id);
		$this->db->update('hp_youtube',$data);
	}
	function add_banner($data) {
		$this->db->insert('banners',$data);
		return $this->db->insert_id();
	}
	function get_banners() {
		$this->db->order_by('id','desc');
		$query = $this->db->get('banners');
		return $query->result_array();
	}
	function get_banner($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('banners');
		return $query->first_row('array');
	}
	function get_random_banner() {
		$this->db->order_by('id', 'RANDOM');
		$query = $this->db->get('banners');
		return $query->first_row('array');
	}
	function update_banner($id,$data) {
		$this->db->where('id',$id);
		$this->db->update('banners',$data);
	}
	function delete_banner($id) {
		$this->db->where('id',$id);
		$this->db->delete('banners');
	}
	function get_footer_banners() {
		$this->db->order_by('id','desc');
		$query = $this->db->get('footer_banners');
		return $query->result_array();
	}
	function get_footer_banner($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('footer_banners');
		return $query->first_row('array');
	}
	function get_random_footer_banner() {
		$this->db->order_by('id', 'RANDOM');
		$query = $this->db->get('footer_banners');
		return $query->first_row('array');
	}
	function update_footer_banner($id,$data) {
		$this->db->where('id',$id);
		$this->db->update('footer_banners',$data);
	}
	function delete_footer_banner($id) {
		$this->db->where('id',$id);
		$this->db->delete('footer_banners');
	}
	function add_footer_banner($data) {
		$this->db->insert('footer_banners',$data);
		return $this->db->insert_id();
	}
}
?>