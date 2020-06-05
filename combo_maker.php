<?php
	if(is_file("username.txt") and is_file("password.txt") and is_file("delimiter.txt")){
		$username_list = file("username.txt");
		$password_list = file("password.txt");
		$delimiter = file_get_contents("delimiter.txt");
		for($i = 0; $i < count($username_list); $i++){
			for($j = 0; $j < count($password_list); $j++){
				$combo_txt = $username_list[$i].$delimiter.$password_list[$j].PHP_EOL;
				file_put_contents("combo.txt",$combo_txt);
			}
		}
		echo "combo list created , file name : combo.txt";
	}else{
		echo "username or password or delimiter file not found";
	}
?>