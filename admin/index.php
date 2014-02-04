<?php
require_once('../functions.php');
	
	if(isset($_POST['submit'])){
		$added= add_url($_POST['url'], $_POST['desc']);
		
		if($added){
			print "URL Added Successfully!";
		}else{
			print "Hmmm there was an issue.";
		}

	}else if(isset($_POST['submit-edit'])){
		$edited= edit_url($_POST['url'], $_POST['desc'], $_POST['id']);
		
		if($edited){
			print "URL Edited Successfully!";
		}else{
			print "Hmmm there was an issue.";
		}
	
	}
	
	
	if(isset($_GET['edit'])){
		$info= $db->get_row("SELECT * FROM shortlinks WHERE id=". $_GET['edit']);
	
?>
		<div style="float: left; width: 30%;">
			<h3>Edit URL</h3>
			<form method="post" action="index.php">
				<div><input type="text" name="url" value="<?php print $info['url']; ?>" /></div>
				<div><textarea name="desc"><?php print $info['desc']; ?></textarea></div>
				<input type="hidden" name="id" value="<?php print $info['id']; ?>" />
				<div><input type="submit" name="submit-edit" value="Submit" /></div>
			</form>
		</div>

<?php		
	}
?>


<div style="float: left; width: 30%;">
	<h3>Add URL</h3>
<form method="post">
	<div><input type="text" name="url" placeholder="URL" /></div>
	<div><textarea name="desc">Description goes here</textarea></div>
	<div><input type="submit" name="submit" value="Submit" /></div>
</form>
</div>

<div>
	<h3>URLs</h3>
	<?php print_urls(); ?>
</div>

