<?php
	require_once('functions.php');
	if(isset($_GET['urlID'])){
		$url= get_URL($_GET['urlID']);
		  header( 'Location: '. $url); 
	}
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>Short Link Generator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		
		
	</head>
	
	<body>
		<div id="wrapper">


					<h2>Short Link List</h2>
					<?php print_urls(); ?>

			</div>

	</body>

</html>
