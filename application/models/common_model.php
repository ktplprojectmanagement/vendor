<?php

class Common_model extends CI_Model
{
	
    function __construct()
    {
        parent::__construct();
    }

	function get_all_data($table_name)
	{
		$sql = $this->db->query("select * from ".$table_name);
		return $sql->result_array();
	}

	function get_all_data_distinct($table_name,$column)
	{
		$sql = $this->db->query("SELECT DISTINCT ".$column." FROM ".$table_name);
		return $sql->result_array();
	}

	function get_all_data_distinct_query($table,$search_query,$data,$column)
	{
		$query = "SELECT DISTINCT ".$column." FROM ".$table.' '.$search_query;
		$sql = $this->db->query($query,$data);
		return $sql->result_array();
	}

	function save_data($data)
	{		
		$sql = $this->db->insert_string($data['table_name'],$data['details']);
		$this->db->query($sql);	
		if($this->db->affected_rows()>0)
		{
			echo "success";
		}
		else
		{
			echo "error";
		}	
	}

	function fetch_data($table_name,$where,$data)
	{
		$sql = "select * from ".$table_name.' '.$where;
		$result = $this->db->query($sql,$data);
		return $result->result_array();
	}

	function fetch_data_query($query,$data)
	{
		$result = $this->db->query($query,$data);
		return $result->result_array();
	}

	function save_data_record($table_name,$list,$qry,$data)
	{
		
		$query = 'INSERT INTO '.$table_name.$list.'  VALUES '.$qry;
		$this->db->query($query,$data);
	}

	function edit_data_record($table_name,$list,$where,$data)
	{
		
		$query = 'UPDATE '.$table_name.' SET '.$list.$where;
		$this->db->query($query,$data);		
	}

	function delt_data_record($table_name,$data,$field_name)
	{
		$this->db->where($field_name,$data);		
		$this->db->delete($table_name);
	}

}

?>