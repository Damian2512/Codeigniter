<?php

if (!function_exists('isAdmin()')){
	function isAdmin() {
		if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){
			return true;
		}else {
			return false;
		}
	}
}
