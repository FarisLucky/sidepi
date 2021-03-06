<?php 
 
class M_rab_perumahan extends CI_Model{
	function __construct()
	{
	parent::__construct();
	}
	function get(){

	$this->db->where(['id_properti'=>1,'type'=>'properti']);
	$query = $this->db->get('rab_properti');
    return $query->row();
	}
	function tampil_data_kategori()
	{
	return $this->db->get_where('kelompok_item', ['id_kategori'=>4])->result();
	}
	function tampil_data()
	{
	return $this->db->get_where('detail_rab', ['id_rab'=>2]);
	}
	function input_data($data,$table)
	{
	$this->db->insert($table,$data);
	}
	function hapus_data($where,$table)
	{
	$this->db->where($where);
	$this->db->delete($table);
	}
	function edit_data($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table)
	{
	$this->db->where($where);
	$this->db->update($table,$data);
	}
}