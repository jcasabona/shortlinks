<?php
require_once('Database.php');
include('config.php');
global $db;

$db= new Database(DATABASE, DB_USER, DB_PASS, DB_HOST);




function add_url($url, $desc){
	global $db;
	$url= $db->clean($url);
	$desc= $db->clean($desc);
	$time= $db->get_timestamp();
	
	return $db->query("INSERT INTO shortlinks VALUES(DEFAULT, '$url', '$desc', '$time')");

	
}

function edit_url($url, $desc, $id){
	global $db;
	$id= $db->clean($id);
	$url= $db->clean($url);
	$desc= $db->clean($desc);
	$q= "UPDATE shortlinks SET url='$url', `desc`='$desc' WHERE id='$id'";

	print "<h2>$q</h2>";

	return $db->query($q);
}

function get_url($id){
	global $db;
	
	return $db->get_var("SELECT url FROM shortlinks WHERE id='$id'");
}

function print_urls(){
	global $db;
	$urls= $db->resToArray($db->query('SELECT * FROM shortlinks'));
	
	echo '<table border="1">
			<thead>
				<th>Short Link</th>
				<th>Description</th>
				<th>Edit</th>
			</thead>
			<tbody>';
			
	foreach($urls as $u){
		$shortURL= BASE_URL. $u['id'];
		echo '	<tr>
					<td><a href="'.$shortURL .'" target="_blank">'. $shortURL .'</a></td>
					<td><b>Full URL:</b> '. $u['url']. '<br/><b>Description:</b> '. $u['desc']. '</td>
					<td><a href="index.php?edit='. $u['id'] .'">Edit</a></td>
				</tr>';
	}	
	
	echo '</tbody>
		</table>';
	
}


function print_array($a){
	print "<pre>";
	print_r($a);
	print "</pre>";
}



?>