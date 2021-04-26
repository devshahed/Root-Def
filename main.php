<?php
		session_start();
		include "banner.php";
		$user = readline("Enter username: ");
		$pass = md5(readline("Enter password: "));
		if($user == "GHHC-MP" && $pass == "832a5fc575d8a6e95fc760c84b7303c9"){
			$_SESSION['username'] = "GHHC-MP";
			
			include "banner.php";
			$def = array("GHHC Official deface");
			function opt(){
				$i = 0;
				while($i < 1){
				
				$def = array("GHHC Official deface");
					echo "  " .$i+1 . ". " . $def[$i] ."\n";
					$i ++;
				}
				
				$option = readline("Select an option: ");
				$pid = (int)$option;
				if(isset($pid) && $pid <= sizeof($def) && $pid != ""){
					include "banner.php";
					include "defpages.php";
				}else{
					
					include "banner.php";
					echo "plese select a valid option \n";
					opt();
					
				}
			}
			
			opt();
		}else{
			include "main.php";	
		     }	
?>
