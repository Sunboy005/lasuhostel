<?php
include"config.php";
	// it will never let you open index(login) page if session is set
	if( !isset($_SESSION['id']) ) {
		header("Location: ../admin/index.php");
		exit;
	}
	?>