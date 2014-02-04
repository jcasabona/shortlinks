<?php

class Database{
	var $dbName;
	var $user;
	var $password;
	var $host;
	var $lastID;
	
	//constructor
	function database($db, $u, $p, $h){
		$this->dbName= $db;
		$this->user= $u;
		$this->password= $p;
		$this->host= $h;
		
		//metadata to get entire table list?
	}
	
//any query
function query($query){
		$dbh= mysql_connect ($this->host, $this->user, $this->password) or die ('I cannot connect to the database because: ' . mysql_error());
		mysql_select_db ($this->dbName) or die ('I cannot connect to the database because: ' . mysql_error());

		$result= mysql_query($query, $dbh) or die ('Error: ' . mysql_error());
		$this->lastID= mysql_insert_id();
		mysql_close($dbh); 
	
		return $result;
}

function resToArray($res){
	$data= array();
	while($info= mysql_fetch_assoc($res)){
		$data[]= $info;
	}
	
	return $data;
}

function get_column($query){

	$res= $this->query($query);
	
	$data= array();
	
	while($info= mysql_fetch_assoc($res)){
		$key= array_keys($info);
		$key= $key[0];
		$data[]= $info[$key];
	}
	
	return $data;
}


function get_row($query){
	$res= $this->query($query);
	
	$info= $this->resToArray($res);
	
	return $info[0];
}

function get_var($query){
	$res= $this->query($query);
	
	$info= mysql_fetch_array($res);
	
	return $info[0];
}

function get_timestamp(){
	return date('Y-m-d H:i:s');
}
	

	
	//sanatize data
	function clean () {
	
		// count the arguments list
		$num_args = func_num_args();
	
		// 1st arg is the string
		$d = func_get_arg(0);
	
		// if 2nd exists, get it
		if ($num_args == 2) {
			$s = func_get_arg(1);
		}
	
		// normalize strings
		if (get_magic_quotes_gpc()) {
			$d = stripslashes($d);
		}
	
		// remove harmful code
		if ($s) {
			// hardcore cleaning
			$d = trim(addslashes(htmlentities(strip_tags($d))));
		} else {
			// lighter duty; use mysql_real_escape_string before sending to database
			$d = trim(htmlentities(strip_tags($d)));
		}

		return $d;
	}
}


?>