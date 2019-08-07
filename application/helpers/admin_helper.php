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

if (!function_exists('loggedIn()')) {
	function loggedIn() {
		if(isset($_SESSION['user_id'] )){
			return true;
		}else {
			return false;
		}
	}
}











