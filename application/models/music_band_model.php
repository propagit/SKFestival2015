<?php
class Music_band_model extends CI_Model 
{
	function __construct() {
		parent::__construct();
	}
	function create_band($data) 
	{
		$this->db->insert('music_bands',$data);
		return $this->db->insert_id();
	}
	function update_band($id,$data) 
	{
		$this->db->where('id',$id);
		return $this->db->update('music_bands',$data);
		
	}
	function get_band($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('music_bands');
		return $query->first_row('array');
	}
	function get_featuring_band()
	{
		$this->db->where('featuring','Yes');
		$this->db->order_by("id", "random");
		$query = $this->db->get('music_bands');
		return $query->first_row('array');
	}
	function get_bands()
	{
		$this->db->order_by('event_date','asc');
		$this->db->order_by('start_timestamp','asc');
		$query = $this->db->get('music_bands');
		return $query->result_array();
	}
	function get_homepage_bands()
	{
		
		$this->db->where('venue !=',"DANCE ZONE");
		$this->db->where('venue !=',"THINGS TO SEE AND DO");
		$this->db->where('photo !=',"");
		$this->db->where('music_atoz =',"Yes");
		
		$this->db->order_by('event_date','asc');
		$query = $this->db->get('music_bands');
		return $query->result_array();
	}
	function delete_band($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('music_bands');
	}
	function add_page_band($data) {
		$this->db->insert('pages_bands',$data);
		return $this->db->insert_id();
	}
	function update_page_band($id,$data)
	{
		$this->db->where('id',$id);
		return $this->db->update('pages_bands',$data);
	}
	function remove_page_band($data) {
		$this->db->where('page_id',$data['page_id']);
		$this->db->where('band_id',$data['band_id']);
		$this->db->delete('pages_bands');
	}
	function check_page_band($data) {
		$this->db->where('page_id',$data['page_id']);
		$this->db->where('band_id',$data['band_id']);
		$query = $this->db->get('pages_bands');
		return $query->num_rows();
	}
	function get_page_bands($page_id) {
		$sql = "SELECT `music_bands`.* FROM `music_bands`,`pages_bands`
				WHERE `music_bands`.`id` = `pages_bands`.`band_id`
				AND `pages_bands`.`page_id` = $page_id
				ORDER BY `music_bands`.`event_date`, `music_bands`.`start_timestamp` ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function search_total($keyword) {
		if ($keyword != '') {
			$this->db->like('band_name',$keyword);
		}
		
		$query = $this->db->get('music_bands');
		return $query->result_array();
	}
	function search_in_rows($keyword,$row) {
		if ($keyword != '') {
			$this->db->like('band_name',$keyword);
		}
		
		$this->db->order_by('band_name','asc');
		$query = $this->db->get('music_bands',10,$row);
		return $query->result_array();
	}
	
	function bands_of_the_day($date)
	{
		$this->db->order_by('start_timestamp','asc');
		$this->db->where('event_date',$date);
		$query = $this->db->get('music_bands');
		return $query->result_array();
	}
	
	function search_band_name($key,$num,$row)
	{
		$this->db->like('band_name',$key);
		$this->db->limit($num, $row);
		$query = $this->db->get('music_bands');
		return $query->result_array();
	}
	function search_band_name_count($key)
	{
		$this->db->like('band_name',$key);
		$query = $this->db->get('music_bands');
		return count($query->result_array());
	}
	
	function add_vote($data) 
	{
		$this->db->insert('vote',$data);
		return $this->db->insert_id();
	}
	
	function vote_redundant_email($email)
	{
		$this->db->where('email',$email);
		$query = $this->db->get('vote');
		return count($query->result_array());
	}
	
	function vote_result() {
		$sql = "SELECT a.band_name, count( a.id ) AS count
				FROM music_bands a, vote b
				WHERE b.bandvote_id = a.id
				GROUP BY a.band_name";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>