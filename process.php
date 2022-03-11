<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname= $_POST['firstname'];
	$registration= $_POST['registration'];
	$email= $_POST['email'];
	$branch= $_POST['branch'];
	$dom = $_POST['dom'];
	$contact = $_POST['contact'];

		$sql = "INSERT INTO users (firstname, registration, email, branch, dom, contact) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $registration, $email, $branch, $dom, $contact]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}