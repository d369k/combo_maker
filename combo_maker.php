<?php
	set_time_limit(5000);
	if(is_file("username.txt") and is_file("password.txt") and is_file("delimiter.txt")){
		$username_list = file("username.txt");
		$password_list = file("password.txt");
		$delimiter = file_get_contents("delimiter.txt");
		if(is_file("combo.txt")){
			file_put_contents("combo.txt","");
		}else{
			touch("combo.txt");
		}
		for($i = 0; $i < count($username_list); $i++){
			for($j = 0; $j < count($password_list); $j++){
				$combo_txt = trim($username_list[$i])."$delimiter".trim($password_list[$j])."\n";
				$combo = file_get_contents("combo.txt");
				$combo .= $combo_txt;
				file_put_contents("combo.txt",$combo);
			}
		}
		echo "combo list created , file name : combo.txt";
	}else{
		echo "username or password or delimiter file not found";
	}
?>