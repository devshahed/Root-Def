<?php 	

	if(isset($_SESSION['username'])){
		if(($x = readline("Enter your codename: ")) != ""){
			$cname = $x;
			$def_file = "pages/".str_replace(" ","",$def[$pid-1]);
			$opendef = fopen($def_file, "r");
			$read = fread($opendef, filesize($def_file));
			$c = str_replace("codenameHere", $cname, $read);
			$final_def = fopen($cname ."-deface.html", "w");
			fwrite($final_def, $c);
		
			fclose($opendef);
			fclose($final_def);
			echo shell_exec("clear");
			echo shell_exec("ls");
			echo "\e[00;32m Your deface page is ready.....Find this on your present directory =>>". $cname ."-deface.html \n";
			
		}else{	
			echo shell_exec("clear");
			die("\e[00;31m codename can not be empty \n");
		}
	}else{
		
		echo shell_exec("clear");
		die();
	
	}
?>
